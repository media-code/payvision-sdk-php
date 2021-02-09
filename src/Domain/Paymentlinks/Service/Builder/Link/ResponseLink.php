<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponseLink as ResponseLinkObject;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponseRedirect;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseLink extends Basic
{
    /**
     * @return ResponseLinkObject
     */
    public function build(): ResponseLinkObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param int[] $brandIds
     * @return ResponseLink
     */
    public function setBrandIds(array $brandIds): ResponseLink
    {
        return $this->set('brandIds', $brandIds);
    }

    /**
     * @param \Payvision\SDK\DataType\DateTime $expirationTime
     * @return ResponseLink
     */
    public function setExpirationTime(\Payvision\SDK\DataType\DateTime $expirationTime): ResponseLink
    {
        return $this->set('expirationTime', $expirationTime);
    }

    /**
     * @param string $linkId
     * @return ResponseLink
     */
    public function setLinkId(string $linkId): ResponseLink
    {
        return $this->set('linkId', $linkId);
    }

    /**
     * @param ResponseRedirect $redirect
     * @return ResponseLink
     */
    public function setRedirect(ResponseRedirect $redirect): ResponseLink
    {
        return $this->set('redirect', $redirect);
    }

    /**
     * @param string $status
     * @return ResponseLink
     */
    public function setStatus(string $status): ResponseLink
    {
        return $this->set('status', $status);
    }

    /**
     * @param bool $threeDSecure
     * @return ResponseLink
     */
    public function setThreeDSecure(bool $threeDSecure): ResponseLink
    {
        return $this->set('threeDSecure', $threeDSecure);
    }

    /**
     * @param string $tokenize
     * @return ResponseLink
     */
    public function setTokenize(string $tokenize): ResponseLink
    {
        return $this->set('tokenize', $tokenize);
    }

    /**
     * @return ResponseLinkObject
     */
    protected function buildObject(): ResponseLinkObject
    {
        return new ResponseLinkObject(
            $this->get('brandIds'),
            $this->get('expirationTime'),
            $this->get('linkId'),
            $this->get('redirect'),
            $this->get('status'),
            $this->get('threeDSecure'),
            $this->get('tokenize')
        );
    }
}
