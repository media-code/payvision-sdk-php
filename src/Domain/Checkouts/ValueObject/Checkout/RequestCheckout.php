<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject\Checkout;

use Payvision\SDK\Domain\Checkouts\ValueObject\OneClick;

class RequestCheckout
{
    /**
     * @var int[]
     */
    private $brandIds;

    /**
     * @var string
     */
    private $returnUrl;

    /**
     * @var OneClick
     */
    private $oneClick;

    /**
     * @var bool
     */
    private $threeDSecure;

    /**
     * @var string
     */
    private $tokenize;

    /**
     * RequestCheckout constructor.
     *
     * @param int[] $brandIds
     * @param string $returnUrl
     * @param OneClick $oneClick
     * @param bool $threeDSecure
     * @param string $tokenize
     */
    public function __construct(
        array $brandIds,
        string $returnUrl,
        OneClick $oneClick = null,
        bool $threeDSecure = null,
        string $tokenize = null
    ) {
        $this->brandIds = $brandIds;
        $this->returnUrl = $returnUrl;
        $this->oneClick = $oneClick;
        $this->threeDSecure = $threeDSecure;
        $this->tokenize = $tokenize;
    }

    /**
     * @return int[]
     */
    public function getBrandIds(): array
    {
        return $this->brandIds;
    }

    /**
     * @return string
     */
    public function getReturnUrl(): string
    {
        return $this->returnUrl;
    }

    /**
     * @return OneClick|null
     */
    public function getOneClick(): ?OneClick
    {
        return $this->oneClick;
    }

    /**
     * @return bool|null
     */
    public function getThreeDSecure(): ?bool
    {
        return $this->threeDSecure;
    }

    /**
     * @return string|null
     */
    public function getTokenize(): ?string
    {
        return $this->tokenize;
    }
}
