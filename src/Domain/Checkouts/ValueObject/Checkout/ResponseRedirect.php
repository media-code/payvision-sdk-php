<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject\Checkout;

class ResponseRedirect
{
    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $url;

    /**
     * ResponseRedirect constructor.
     *
     * @param string $method
     * @param string $url
     */
    public function __construct(
        string $method = null,
        string $url = null
    ) {
        $this->method = $method;
        $this->url = $url;
    }

    /**
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
}
