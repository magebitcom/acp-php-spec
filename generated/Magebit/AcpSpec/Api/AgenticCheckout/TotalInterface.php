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
 * Total amounts for the checkout including subtotal, discounts, tax, shipping, and final total
 */
interface TotalInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_DISPLAY_TEXT = 'display_text';
    public const KEY_AMOUNT = 'amount';
    public const KEY_PRESENTMENT_AMOUNT = 'presentment_amount';
    public const KEY_DESCRIPTION = 'description';
    public const KEY_BREAKDOWN = 'breakdown';
    public const TYPE_ITEMS_BASE_AMOUNT = 'items_base_amount';
    public const TYPE_ITEMS_DISCOUNT = 'items_discount';
    public const TYPE_SUBTOTAL = 'subtotal';
    public const TYPE_DISCOUNT = 'discount';
    public const TYPE_FULFILLMENT = 'fulfillment';
    public const TYPE_TAX = 'tax';
    public const TYPE_FEE = 'fee';
    public const TYPE_GIFT_WRAP = 'gift_wrap';
    public const TYPE_TIP = 'tip';
    public const TYPE_STORE_CREDIT = 'store_credit';
    public const TYPE_TOTAL = 'total';
    public const TYPE_AMOUNT_REFUNDED = 'amount_refunded';

    /**
     * Type of total line item
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Type of total line item
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Localized display text for this total
     *
     * @return string
     */
    public function getDisplayText(): string;

    /**
     * Localized display text for this total
     *
     * @param string $displayText
     * @return self
     */
    public function setDisplayText(string $displayText): self;

    /**
     * Amount in minor currency units (e.g. 100 cents for $1.00 or 100 for ¥100)
     *
     * @return int
     */
    public function getAmount(): int;

    /**
     * Amount in minor currency units (e.g. 100 cents for $1.00 or 100 for ¥100)
     *
     * @param int $amount
     * @return self
     */
    public function setAmount(int $amount): self;

    /**
     * Amount in presentment currency minor units if different from settlement currency
     *
     * @return int|null
     */
    public function getPresentmentAmount(): int|null;

    /**
     * Amount in presentment currency minor units if different from settlement currency
     *
     * @param int|null $presentmentAmount
     * @return self
     */
    public function setPresentmentAmount(int|null $presentmentAmount): self;

    /**
     * Additional descriptive text for this total
     *
     * @return string|null
     */
    public function getDescription(): string|null;

    /**
     * Additional descriptive text for this total
     *
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self;

    /**
     * Detailed breakdown for tax totals
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\TaxBreakdownItemInterface[]|null
     */
    public function getBreakdown(): array|null;

    /**
     * Detailed breakdown for tax totals
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\TaxBreakdownItemInterface[]|null $breakdown
     * @return self
     */
    public function setBreakdown(array|null $breakdown): self;
}
