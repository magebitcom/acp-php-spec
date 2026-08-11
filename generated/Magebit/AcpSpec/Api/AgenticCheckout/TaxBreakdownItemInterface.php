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
 * Breakdown of tax amounts by type, jurisdiction, or rate
 */
interface TaxBreakdownItemInterface
{
    public const KEY_JURISDICTION = 'jurisdiction';
    public const KEY_RATE = 'rate';
    public const KEY_AMOUNT = 'amount';

    /**
     * Tax jurisdiction name (e.g., 'California State Tax', 'City of San Francisco')
     *
     * @return string
     */
    public function getJurisdiction(): string;

    /**
     * Tax jurisdiction name (e.g., 'California State Tax', 'City of San Francisco')
     *
     * @param string $jurisdiction
     * @return self
     */
    public function setJurisdiction(string $jurisdiction): self;

    /**
     * Tax rate as a decimal (e.g., 0.0875 for 8.75%)
     *
     * @return float
     */
    public function getRate(): float;

    /**
     * Tax rate as a decimal (e.g., 0.0875 for 8.75%)
     *
     * @param float $rate
     * @return self
     */
    public function setRate(float $rate): self;

    /**
     * Tax amount in minor currency units (e.g. 100 cents for $1.00 or 100 for ¥100)
     *
     * @return int
     */
    public function getAmount(): int;

    /**
     * Tax amount in minor currency units (e.g. 100 cents for $1.00 or 100 for ¥100)
     *
     * @param int $amount
     * @return self
     */
    public function setAmount(int $amount): self;
}
