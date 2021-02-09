<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Capture;

use Payvision\SDK\Domain\Payments\ValueObject\Capture\ResponseTransaction as ResponseTransactionObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseTransaction extends Basic
{
    /**
     * @return ResponseTransactionObject
     */
    public function build(): ResponseTransactionObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param string $action
     * @return ResponseTransaction
     */
    public function setAction(string $action): ResponseTransaction
    {
        return $this->set('action', $action);
    }

    /**
     * @param float $amount
     * @return ResponseTransaction
     */
    public function setAmount(float $amount): ResponseTransaction
    {
        return $this->set('amount', $amount);
    }

    /**
     * @param string $currencyCode
     * @return ResponseTransaction
     */
    public function setCurrencyCode(string $currencyCode): ResponseTransaction
    {
        return $this->set('currencyCode', $currencyCode);
    }

    /**
     * @param string $id
     * @return ResponseTransaction
     */
    public function setId(string $id): ResponseTransaction
    {
        return $this->set('id', $id);
    }

    /**
     * @param string $parentId
     * @return ResponseTransaction
     */
    public function setParentId(string $parentId): ResponseTransaction
    {
        return $this->set('parentId', $parentId);
    }

    /**
     * @param string $trackingCode
     * @return ResponseTransaction
     */
    public function setTrackingCode(string $trackingCode): ResponseTransaction
    {
        return $this->set('trackingCode', $trackingCode);
    }

    /**
     * @param int $brandId
     * @return ResponseTransaction
     */
    public function setBrandId(int $brandId): ResponseTransaction
    {
        return $this->set('brandId', $brandId);
    }

    /**
     * @param string $descriptor
     * @return ResponseTransaction
     */
    public function setDescriptor(string $descriptor): ResponseTransaction
    {
        return $this->set('descriptor', $descriptor);
    }

    /**
     * @return ResponseTransactionObject
     */
    protected function buildObject(): ResponseTransactionObject
    {
        return new ResponseTransactionObject(
            $this->get('action'),
            $this->get('amount'),
            $this->get('currencyCode'),
            $this->get('id'),
            $this->get('parentId'),
            $this->get('trackingCode'),
            $this->get('brandId'),
            $this->get('descriptor')
        );
    }
}
