<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Paymentlinks\Service\Builder\Link;

use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponsePayment as ResponsePaymentObject;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponsePaymentBody;
use Payvision\SDK\Domain\Paymentlinks\ValueObject\Link\ResponsePaymentHeader;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponsePayment extends Basic
{
    /**
     * @return ResponsePaymentObject
     */
    public function build(): ResponsePaymentObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param ResponsePaymentBody $body
     * @return ResponsePayment
     */
    public function setBody(ResponsePaymentBody $body): ResponsePayment
    {
        return $this->set('body', $body);
    }

    /**
     * @param string $description
     * @return ResponsePayment
     */
    public function setDescription(string $description): ResponsePayment
    {
        return $this->set('description', $description);
    }

    /**
     * @param ResponsePaymentHeader $header
     * @return ResponsePayment
     */
    public function setHeader(ResponsePaymentHeader $header): ResponsePayment
    {
        return $this->set('header', $header);
    }

    /**
     * @param int $result
     * @return ResponsePayment
     */
    public function setResult(int $result): ResponsePayment
    {
        return $this->set('result', $result);
    }

    /**
     * @return ResponsePaymentObject
     */
    protected function buildObject(): ResponsePaymentObject
    {
        return new ResponsePaymentObject(
            $this->get('body'),
            $this->get('description'),
            $this->get('header'),
            $this->get('result')
        );
    }
}
