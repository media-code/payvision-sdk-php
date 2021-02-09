<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject\Checkout;

class RequestOption
{
    /**
     * @var string
     */
    private $brandName;

    /**
     * @var string
     */
    private $cartBorderColor;

    /**
     * @var string
     */
    private $countryRestriction;

    /**
     * @var string
     */
    private $headerImage;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var int
     */
    private $minAgeRestriction;

    /**
     * @var string
     */
    private $noShipping;

    /**
     * @var int
     */
    private $processingType;

    /**
     * @var int
     */
    private $quantity;

    /**
     * RequestOption constructor.
     *
     * @param string $brandName
     * @param string $cartBorderColor
     * @param string $countryRestriction
     * @param string $headerImage
     * @param string $locale
     * @param int $minAgeRestriction
     * @param string $noShipping
     * @param int $processingType
     * @param int $quantity
     */
    public function __construct(
        string $brandName = null,
        string $cartBorderColor = null,
        string $countryRestriction = null,
        string $headerImage = null,
        string $locale = null,
        int $minAgeRestriction = null,
        string $noShipping = null,
        int $processingType = null,
        int $quantity = null
    ) {
        $this->brandName = $brandName;
        $this->cartBorderColor = $cartBorderColor;
        $this->countryRestriction = $countryRestriction;
        $this->headerImage = $headerImage;
        $this->locale = $locale;
        $this->minAgeRestriction = $minAgeRestriction;
        $this->noShipping = $noShipping;
        $this->processingType = $processingType;
        $this->quantity = $quantity;
    }

    /**
     * @return string|null
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * @return string|null
     */
    public function getCartBorderColor(): ?string
    {
        return $this->cartBorderColor;
    }

    /**
     * @return string|null
     */
    public function getCountryRestriction(): ?string
    {
        return $this->countryRestriction;
    }

    /**
     * @return string|null
     */
    public function getHeaderImage(): ?string
    {
        return $this->headerImage;
    }

    /**
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @return int|null
     */
    public function getMinAgeRestriction(): ?int
    {
        return $this->minAgeRestriction;
    }

    /**
     * @return string|null
     */
    public function getNoShipping(): ?string
    {
        return $this->noShipping;
    }

    /**
     * @return int|null
     */
    public function getProcessingType(): ?int
    {
        return $this->processingType;
    }

    /**
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }
}
