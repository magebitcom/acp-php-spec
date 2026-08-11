<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\AgenticCheckout;

/**
 * Split payment configuration allowing payment across multiple methods or parties
 */
interface SplitPaymentInterface
{
    public const KEY_AMOUNT = 'amount';

    /**
     * Payment amount in minor currency units (e.g. 100 cents for $1.00 or 100 for ¥100) for this split
     *
     * @return int
     */
    public function getAmount(): int;

    /**
     * Payment amount in minor currency units (e.g. 100 cents for $1.00 or 100 for ¥100) for this split
     *
     * @param int $amount
     * @return self
     */
    public function setAmount(int $amount): self;
}
