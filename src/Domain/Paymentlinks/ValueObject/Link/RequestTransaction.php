<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\ValueObject\Link;

class RequestTransaction
{
    public const AUTHORIZATION_MODE_AUTHORIZE = 'authorize';
    public const AUTHORIZATION_MODE_PAYMENT = 'payment';

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $authorizationMode;

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * @var string
     */
    private $trackingCode;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $descriptor;

    /**
     * @var string
     */
    private $invoiceId;

    /**
     * @var string
     */
    private $languageCode;

    /**
     * @var string
     */
    private $purchaseId;

    /**
     * @var string
     */
    private $source;

    /**
     * @var int
     */
    private $storeId;

    /**
     * @var string
     */
    private $type;

    /**
     * RequestTransaction constructor.
     *
     * @param float $amount
     * @param string $authorizationMode
     * @param string $currencyCode
     * @param string $trackingCode
     * @param string $countryCode
     * @param string $descriptor
     * @param string $invoiceId
     * @param string $languageCode
     * @param string $purchaseId
     * @param string $source
     * @param int $storeId
     * @param string $type
     */
    public function __construct(
        float $amount,
        string $authorizationMode,
        string $currencyCode,
        string $trackingCode,
        string $countryCode = null,
        string $descriptor = null,
        string $invoiceId = null,
        string $languageCode = null,
        string $purchaseId = null,
        string $source = null,
        int $storeId = null,
        string $type = null
    ) {
        $this->amount = $amount;
        $this->authorizationMode = $authorizationMode;
        $this->currencyCode = $currencyCode;
        $this->trackingCode = $trackingCode;
        $this->countryCode = $countryCode;
        $this->descriptor = $descriptor;
        $this->invoiceId = $invoiceId;
        $this->languageCode = $languageCode;
        $this->purchaseId = $purchaseId;
        $this->source = $source;
        $this->storeId = $storeId;
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getAuthorizationMode(): string
    {
        return $this->authorizationMode;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @return string
     */
    public function getTrackingCode(): string
    {
        return $this->trackingCode;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @return string|null
     */
    public function getDescriptor(): ?string
    {
        return $this->descriptor;
    }

    /**
     * @return string|null
     */
    public function getInvoiceId(): ?string
    {
        return $this->invoiceId;
    }

    /**
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    /**
     * @return string|null
     */
    public function getPurchaseId(): ?string
    {
        return $this->purchaseId;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @return int|null
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
}
