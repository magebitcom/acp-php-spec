<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\DelegateAuthentication;

/**
 * The transaction amount and currency.
 */
interface AmountInterface
{
    public const KEY_VALUE = 'value';
    public const KEY_CURRENCY = 'currency';
    public const CONSTRAINTS = ['currency' => ['pattern' => '^[A-Z]{3}$']];

    /**
     * Amount in minor units (e.g., 1000 = €10.00)
     *
     * @return int
     */
    public function getValue(): int;

    /**
     * Amount in minor units (e.g., 1000 = €10.00)
     *
     * @param int $value
     * @return self
     */
    public function setValue(int $value): self;

    /**
     * ISO 4217 currency code
     *
     * @return string
     */
    public function getCurrency(): string;

    /**
     * ISO 4217 currency code
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency(string $currency): self;
}
