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

use Magebit\AcpSpec\Api\AgenticCheckout\TaxBreakdownItemInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Breakdown of tax amounts by type, jurisdiction, or rate
 */
class TaxBreakdownItem extends SpecObject implements TaxBreakdownItemInterface
{
    /**
     * @return string
     */
    public function getJurisdiction(): string
    {
        return $this->requireString(self::KEY_JURISDICTION);
    }

    /**
     * @param string $jurisdiction
     * @return self
     */
    public function setJurisdiction(string $jurisdiction): self
    {
        return $this->set(self::KEY_JURISDICTION, $jurisdiction);
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->requireFloat(self::KEY_RATE);
    }

    /**
     * @param float $rate
     * @return self
     */
    public function setRate(float $rate): self
    {
        return $this->set(self::KEY_RATE, $rate);
    }

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
