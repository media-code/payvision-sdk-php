<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Payment;

class ResponseCard
{
    /**
     * @var string
     */
    private $approvalCode;

    /**
     * @var string
     */
    private $avsAuthorizationEntity;

    /**
     * @var string
     */
    private $avsResult;

    /**
     * @var string
     */
    private $cvvResult;

    /**
     * @var string
     */
    private $expiryMonth;

    /**
     * @var string
     */
    private $expiryYear;

    /**
     * @var string
     */
    private $firstSixDigits;

    /**
     * @var string
     */
    private $holderName;

    /**
     * @var string
     */
    private $lastFourDigits;

    /**
     * @var string
     */
    private $recurringAdvice;

    /**
     * @var string
     */
    private $threeDResult;

    /**
     * ResponseCard constructor.
     *
     * @param string $approvalCode
     * @param string $avsAuthorizationEntity
     * @param string $avsResult
     * @param string $cvvResult
     * @param string $expiryMonth
     * @param string $expiryYear
     * @param string $firstSixDigits
     * @param string $holderName
     * @param string $lastFourDigits
     * @param string $recurringAdvice
     * @param string $threeDResult
     */
    public function __construct(
        string $approvalCode = null,
        string $avsAuthorizationEntity = null,
        string $avsResult = null,
        string $cvvResult = null,
        string $expiryMonth = null,
        string $expiryYear = null,
        string $firstSixDigits = null,
        string $holderName = null,
        string $lastFourDigits = null,
        string $recurringAdvice = null,
        string $threeDResult = null
    ) {
        $this->approvalCode = $approvalCode;
        $this->avsAuthorizationEntity = $avsAuthorizationEntity;
        $this->avsResult = $avsResult;
        $this->cvvResult = $cvvResult;
        $this->expiryMonth = $expiryMonth;
        $this->expiryYear = $expiryYear;
        $this->firstSixDigits = $firstSixDigits;
        $this->holderName = $holderName;
        $this->lastFourDigits = $lastFourDigits;
        $this->recurringAdvice = $recurringAdvice;
        $this->threeDResult = $threeDResult;
    }

    /**
     * @return string|null
     */
    public function getApprovalCode(): ?string
    {
        return $this->approvalCode;
    }

    /**
     * @return string|null
     */
    public function getAvsAuthorizationEntity(): ?string
    {
        return $this->avsAuthorizationEntity;
    }

    /**
     * @return string|null
     */
    public function getAvsResult(): ?string
    {
        return $this->avsResult;
    }

    /**
     * @return string|null
     */
    public function getCvvResult(): ?string
    {
        return $this->cvvResult;
    }

    /**
     * @return string|null
     */
    public function getExpiryMonth(): ?string
    {
        return $this->expiryMonth;
    }

    /**
     * @return string|null
     */
    public function getExpiryYear(): ?string
    {
        return $this->expiryYear;
    }

    /**
     * @return string|null
     */
    public function getFirstSixDigits(): ?string
    {
        return $this->firstSixDigits;
    }

    /**
     * @return string|null
     */
    public function getHolderName(): ?string
    {
        return $this->holderName;
    }

    /**
     * @return string|null
     */
    public function getLastFourDigits(): ?string
    {
        return $this->lastFourDigits;
    }

    /**
     * @return string|null
     */
    public function getRecurringAdvice(): ?string
    {
        return $this->recurringAdvice;
    }

    /**
     * @return string|null
     */
    public function getThreeDResult(): ?string
    {
        return $this->threeDResult;
    }
}
