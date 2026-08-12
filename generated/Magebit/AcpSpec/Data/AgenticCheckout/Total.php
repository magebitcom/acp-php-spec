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
use Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Total amounts for the checkout including subtotal, discounts, tax, shipping, and final total
 */
class Total extends SpecObject implements TotalInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->requireString(self::KEY_TYPE);
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType(string $type): self
    {
        return $this->set(self::KEY_TYPE, $type);
    }

    /**
     * @return string
     */
    public function getDisplayText(): string
    {
        return $this->requireString(self::KEY_DISPLAY_TEXT);
    }

    /**
     * @param string $displayText
     * @return self
     */
    public function setDisplayText(string $displayText): self
    {
        return $this->set(self::KEY_DISPLAY_TEXT, $displayText);
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

    /**
     * @return int|null
     */
    public function getPresentmentAmount(): int|null
    {
        return $this->intOrNull(self::KEY_PRESENTMENT_AMOUNT);
    }

    /**
     * @param int|null $presentmentAmount
     * @return self
     */
    public function setPresentmentAmount(int|null $presentmentAmount): self
    {
        return $this->set(self::KEY_PRESENTMENT_AMOUNT, $presentmentAmount);
    }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
        return $this->stringOrNull(self::KEY_DESCRIPTION);
    }

    /**
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self
    {
        return $this->set(self::KEY_DESCRIPTION, $description);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\TaxBreakdownItemInterface[]|null
     */
    public function getBreakdown(): array|null
    {
        return $this->instanceListOrNull(self::KEY_BREAKDOWN, \Magebit\AcpSpec\Api\AgenticCheckout\TaxBreakdownItemInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\TaxBreakdownItemInterface[]|null $breakdown
     * @return self
     */
    public function setBreakdown(array|null $breakdown): self
    {
        return $this->set(self::KEY_BREAKDOWN, $breakdown);
    }
}
