<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2021 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Checkouts\ValueObject\Checkout;

class ResponseHeader
{
    /**
     * @var \Payvision\SDK\DataType\DateTime
     */
    private $requestTimestamp;

    /**
     * ResponseHeader constructor.
     *
     * @param \Payvision\SDK\DataType\DateTime $requestTimestamp
     */
    public function __construct(
        \Payvision\SDK\DataType\DateTime $requestTimestamp
    ) {
        $this->requestTimestamp = $requestTimestamp;
    }

    /**
     * @return \Payvision\SDK\DataType\DateTime
     */
    public function getRequestTimestamp(): \Payvision\SDK\DataType\DateTime
    {
        return $this->requestTimestamp;
    }
}
