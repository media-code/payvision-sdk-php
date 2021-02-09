<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\Service\Builder;

use Payvision\SDK\Domain\Payments\ValueObject\Error as ErrorObject;
use Payvision\SDK\Domain\Service\Builder\Basic;

class Error extends Basic
{
    /**
     * @return ErrorObject
     */
    public function build(): ErrorObject
    {
        return $this->buildAndReset();
    }

    /**
     * @param int $code
     * @return Error
     */
    public function setCode(int $code): Error
    {
        return $this->set('code', $code);
    }

    /**
     * @param string $message
     * @return Error
     */
    public function setMessage(string $message): Error
    {
        return $this->set('message', $message);
    }

    /**
     * @param string $detailedMessage
     * @return Error
     */
    public function setDetailedMessage(string $detailedMessage): Error
    {
        return $this->set('detailedMessage', $detailedMessage);
    }

    /**
     * @return ErrorObject
     */
    protected function buildObject(): ErrorObject
    {
        return new ErrorObject(
            $this->get('code'),
            $this->get('message'),
            $this->get('detailedMessage')
        );
    }
}
