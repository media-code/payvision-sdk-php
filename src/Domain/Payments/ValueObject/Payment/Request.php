<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Request\Header;

class Request
{
    public const ACTION_PAYMENT = 'payment';
    public const ACTION_AUTHORIZE = 'authorize';

    /**
     * @var string
     */
    private $action;

    /**
     * @var RequestBody
     */
    private $body;

    /**
     * @var Header
     */
    private $header;

    /**
     * Request constructor.
     *
     * @param string $action
     * @param RequestBody $body
     * @param Header $header
     */
    public function __construct(
        string $action,
        RequestBody $body,
        Header $header
    ) {
        $this->action = $action;
        $this->body = $body;
        $this->header = $header;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return RequestBody
     */
    public function getBody(): RequestBody
    {
        return $this->body;
    }

    /**
     * @return Header
     */
    public function getHeader(): Header
    {
        return $this->header;
    }
}
