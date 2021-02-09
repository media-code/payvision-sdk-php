<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Capture;

use Payvision\SDK\Domain\Payments\ValueObject\Capture\RequestBody as RequestBodyObject;
use Payvision\SDK\Domain\Payments\ValueObject\Capture\RequestTransaction;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestBody extends Basic
{
    /**
     * @return RequestBodyObject
     */
    public function build(): RequestBodyObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param RequestTransaction $transaction
     * @return RequestBody
     */
    public function setTransaction(RequestTransaction $transaction): RequestBody
    {
        return $this->set('transaction', $transaction);
    }

    /**
     * @return RequestBodyObject
     */
    protected function buildObject(): RequestBodyObject
    {
        return new RequestBodyObject(
            $this->get('transaction')
        );
    }
}
