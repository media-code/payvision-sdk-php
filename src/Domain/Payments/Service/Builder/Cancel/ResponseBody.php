<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Cancel;

use Payvision\SDK\Domain\Payments\ValueObject\Cancel\ResponseBody as ResponseBodyObject;
use Payvision\SDK\Domain\Payments\ValueObject\Error;
use Payvision\SDK\Domain\Payments\ValueObject\Cancel\ResponseTransaction;
use Payvision\SDK\Domain\Service\Builder\Basic;

class ResponseBody extends Basic
{
    /**
     * @return ResponseBodyObject
     */
    public function build(): ResponseBodyObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param Error $error
     * @return ResponseBody
     */
    public function setError(Error $error): ResponseBody
    {
        return $this->set('error', $error);
    }

    /**
     * @param ResponseTransaction $transaction
     * @return ResponseBody
     */
    public function setTransaction(ResponseTransaction $transaction): ResponseBody
    {
        return $this->set('transaction', $transaction);
    }

    /**
     * @return ResponseBodyObject
     */
    protected function buildObject(): ResponseBodyObject
    {
        return new ResponseBodyObject(
            $this->get('error'),
            $this->get('transaction')
        );
    }
}
