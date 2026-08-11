<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\Feed;

/**
 * Monetary amount expressed in minor units with an associated ISO 4217 currency code.
 */
interface PriceInterface
{
    public const KEY_AMOUNT = 'amount';
    public const KEY_CURRENCY = 'currency';

    /**
     * Monetary amount expressed in ISO 4217 minor units.
     *
     * @return int
     */
    public function getAmount(): int;

    /**
     * Monetary amount expressed in ISO 4217 minor units.
     *
     * @param int $amount
     * @return self
     */
    public function setAmount(int $amount): self;

    /**
     * Three-letter ISO 4217 currency identifier.
     *
     * @return string
     */
    public function getCurrency(): string;

    /**
     * Three-letter ISO 4217 currency identifier.
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency(string $currency): self;
}
