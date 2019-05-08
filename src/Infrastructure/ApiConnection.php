<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 */

// phpcs:disable ObjectCalisthenics.Metrics.MethodPerClassLimit.ObjectCalisthenics\Sniffs\Metrics\MethodPerClassLimitSniff

namespace Payvision\SDK\Infrastructure;

use GuzzleHttp\Client;
use Payvision\SDK\Application\Reflection\JsonToObject;
use Payvision\SDK\DataType\LimitedString;
use Payvision\SDK\Domain\Request;
use Payvision\SDK\Exception\Api\ErrorResponse;
use Payvision\SDK\Exception\ApiException;
use Payvision\SDK\Exception\BuilderException;
use Payvision\SDK\Exception\DataTypeException;
use ReflectionException;

class ApiConnection implements Connection
{
    const URI_LIVE = 'https://connect.acehubpaymentservices.com/gateway/v3/';
    const URI_TEST = 'https://stagconnect.acehubpaymentservices.com/gateway/v3/';

    /**
     * @var string
     */
    private $businessId;

    /**
     * @var Client
     */
    private $client;

    /**
     * @var bool
     */
    private $debug;

    /**
     * @var int
     */
    private $lastStatusCode;

    /**
     * @var array
     */
    private $lastJsonRequest;

    /**
     * ApiConnection constructor.
     *
     * @param string $userName
     * @param string $password
     * @param string $businessId
     * @param string $baseUri
     * @param bool|resource $debug
     * @throws DataTypeException
     */
    public function __construct(
        string $userName,
        string $password,
        string $businessId,
        string $baseUri = self::URI_TEST,
        $debug = false
    ) {
        $this->businessId = (new LimitedString($businessId, 50))->get();
        $this->debug = $debug;
        $this->client = new Client([
            'base_uri' => $baseUri,
            'auth' => [$userName, $password],
            'debug' => $debug,
            'http_errors' => false,
            'timeout' => 300,
        ]);
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     */
    public function execute(Request $request)
    {
        $this->validateResponseClasses($request);
        $jsonResponse = $this->doRequest($request);
        return $this->handleResponse($jsonResponse, $request);
    }

    /**
     * @param Request $request
     * @return array
     * @throws ApiException
     * @throws BuilderException
     * @throws ErrorResponse
     */
    public function executeAndReturnArray(Request $request): array
    {
        $jsonResponse = $this->doRequest($request);
        $items = [];

        foreach ($jsonResponse as $item) {
            $items[] = $this->handleResponse($item, $request);
        }

        return $items;
    }

    /**
     * @param Request $request
     * @return array
     * @throws ApiException
     */
    private function get(Request $request): array
    {
        $guzzleResponse = $this->client->get(
            $request->getUri(),
            [
                'query' =>
                    \array_merge(
                        ['businessId' => $this->businessId],
                        $request->getPathParams()
                    ),
            ]
        );

        $this->lastJsonRequest = $request->getPathParams();
        $this->lastStatusCode = $guzzleResponse->getStatusCode();

        $json = \json_decode($guzzleResponse->getBody()->getContents(), true);

        if (!\is_array($json)) {
            throw new ApiException('Response is not JSON', ApiException::INVALID_RESPONSE);
        }

        return $json;
    }

    /**
     * @param Request $request
     * @return array
     * @throws ApiException
     */
    private function post(Request $request): array
    {
        // Build request according to request object
        $jsonRequest = $this->prepareJsonRequest($request);
        $guzzleResponse = $this->client->post(
            $request->getUri(),
            [
                'json' => $jsonRequest,
                'query' => $request->getPathParams(),
            ]
        );

        $this->lastJsonRequest = $jsonRequest;
        $this->lastStatusCode = $guzzleResponse->getStatusCode();

        $json = \json_decode($guzzleResponse->getBody()->getContents(), true);

        if (!\is_array($json)) {
            throw new ApiException('Response is not JSON', ApiException::INVALID_RESPONSE);
        }

        return $json;
    }

    private function addBusinessId(array $jsonBody): array
    {
        if (\array_key_exists('header', $jsonBody)) {
            $jsonBody['header']['businessId'] = $this->businessId;
        }

        return $jsonBody;
    }

    /**
     * @param array $jsonRequest
     * @param array $jsonResponse
     * @return null
     */
    private function logDebugData(array $jsonRequest, array $jsonResponse)
    {
        $debugData = \sprintf(
            '%1$sRequest:%1$s%2$s%1$sResponse:%1$s%3$s%1$s',
            \PHP_EOL,
            \json_encode($jsonRequest, \JSON_PRETTY_PRINT),
            \json_encode($jsonResponse, \JSON_PRETTY_PRINT)
        );

        if ($this->debug === true) {
            echo $debugData;
        }

        if (\is_resource($this->debug)) {
            \fwrite($this->debug, $debugData);
        }
    }

    /**
     * @param Request $request
     * @throws ApiException
     * @return null
     */
    private function validateResponseClasses(Request $request)
    {
        if ($request->getResponseObjectTypes() === []) {
            throw new ApiException(
                'No response objects set',
                ApiException::RESPONSE_CLASS_NOT_FOUND
            );
        }

        foreach ($request->getResponseObjectTypes() as $targetClass) {
            if (!\class_exists($targetClass)) {
                throw new ApiException(
                    'Response class not found: ' . $targetClass,
                    ApiException::RESPONSE_CLASS_NOT_FOUND
                );
            }
        }
    }

    /**
     * @param array $jsonResponse
     * @param Request $request
     * @return mixed
     * @throws ApiException
     * @throws ErrorResponse
     * @throws BuilderException
     */
    private function handleResponse(
        array $jsonResponse,
        Request $request
    ) {
        try {
            $targetClass = $request->getResponseObjectByStatusCode($this->lastStatusCode);
            $response = JsonToObject::build($targetClass, $jsonResponse);

            if ($this->lastStatusCode >= 400) {
                throw new ErrorResponse($response);
            }
            return $response;
        } catch (ReflectionException $exception) {
            throw new ApiException(
                'Exception thrown during response building',
                ApiException::CANNOT_BUILD_RESPONSE,
                $exception
            );
        }
    }

    /**
     * @param Request $request
     * @return array
     * @throws ApiException
     */
    private function doRequest(Request $request): array
    {
        switch ($request->getMethod()) {
            case Request::METHOD_GET:
                $jsonResponse = $this->get($request);
                break;
            case Request::METHOD_POST:
                $jsonResponse = $this->post($request);
                break;
            default:
                throw new ApiException(
                    'Invalid request method',
                    ApiException::INVALID_REQUEST_METHOD
                );
                break;
        }

        if ($this->debug) {
            $this->logDebugData($this->lastJsonRequest, $jsonResponse);
        }

        return $jsonResponse;
    }

    /**
     * @param Request $request
     * @return array
     */
    private function prepareJsonRequest(Request $request): array
    {
        $jsonRequest = \array_merge(
            [
                'header' => $request->getHeader(),
                'body' => $request->getBody(),
            ],
            $request->getParameters()
        );

        $jsonRequest = $this->addBusinessId($jsonRequest);
        return $jsonRequest;
    }
}