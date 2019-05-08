<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2019 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENSE.txt
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject;

class Qr
{
    /**
     * @var bool
     */
    private $generate;

    /**
     * @var int
     */
    private $size;

    /**
     * Qr constructor.
     *
     * @param bool $generate
     * @param int $size
     */
    public function __construct(
        bool $generate,
        int $size = null
    ) {
        $this->generate = $generate;
        $this->size = $size;
    }

    /**
    * @return bool
    */
    public function getGenerate()
    {
        return $this->generate;
    }

    /**
    * @return int|null
    */
    public function getSize()
    {
        return $this->size;
    }
}
