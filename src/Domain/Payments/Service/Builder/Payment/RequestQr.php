<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder\Payment;

use Payvision\SDK\Domain\Payments\ValueObject\Payment\RequestQr as RequestQrObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class RequestQr extends Basic
{
    /**
     * @return RequestQrObject
     */
    public function build(): RequestQrObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param bool $generate
     * @return RequestQr
     */
    public function setGenerate(bool $generate): RequestQr
    {
        return $this->set('generate', $generate);
    }

    /**
     * @param int $size
     * @return RequestQr
     */
    public function setSize(int $size): RequestQr
    {
        return $this->set('size', $size);
    }

    /**
     * @return RequestQrObject
     */
    protected function buildObject(): RequestQrObject
    {
        return new RequestQrObject(
            $this->get('generate'),
            $this->get('size')
        );
    }
}
