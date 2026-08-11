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
 * Information about a discount applied to the checkout or a specific item
 */
interface DiscountDetailInterface
{
    public const KEY_CODE = 'code';
    public const KEY_TYPE = 'type';
    public const KEY_AMOUNT = 'amount';
    public const KEY_DESCRIPTION = 'description';
    public const KEY_SOURCE = 'source';
    public const TYPE_PERCENTAGE = 'percentage';
    public const TYPE_FIXED = 'fixed';
    public const TYPE_BOGO = 'bogo';
    public const TYPE_VOLUME = 'volume';
    public const SOURCE_COUPON = 'coupon';
    public const SOURCE_AUTOMATIC = 'automatic';
    public const SOURCE_LOYALTY = 'loyalty';

    /**
     * Discount code if applicable
     *
     * @return string|null
     */
    public function getCode(): string|null;

    /**
     * Discount code if applicable
     *
     * @param string|null $code
     * @return self
     */
    public function setCode(string|null $code): self;

    /**
     * Type of discount
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Type of discount
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Discount amount in minor currency units (e.g. 100 cents for $1.00 or 100 for ¥100)
     *
     * @return int
     */
    public function getAmount(): int;

    /**
     * Discount amount in minor currency units (e.g. 100 cents for $1.00 or 100 for ¥100)
     *
     * @param int $amount
     * @return self
     */
    public function setAmount(int $amount): self;

    /**
     * Human-readable discount description
     *
     * @return string|null
     */
    public function getDescription(): string|null;

    /**
     * Human-readable discount description
     *
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self;

    /**
     * Source of the discount
     *
     * @return string|null
     */
    public function getSource(): string|null;

    /**
     * Source of the discount
     *
     * @param string|null $source
     * @return self
     */
    public function setSource(string|null $source): self;
}
