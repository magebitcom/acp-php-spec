<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\AgenticCheckout;

use Magebit\AcpSpec\Api\AgenticCheckout\SplitPaymentInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Split payment configuration allowing payment across multiple methods or parties
 */
class SplitPayment extends SpecObject implements SplitPaymentInterface
{
    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->requireInt(self::KEY_AMOUNT);
    }

    /**
     * @param int $amount
     * @return self
     */
    public function setAmount(int $amount): self
    {
        return $this->set(self::KEY_AMOUNT, $amount);
    }
}
