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
 * A discount that was successfully applied to the checkout session.
 */
interface AppliedDiscountInterface
{
    public const KEY_ID = 'id';
    public const KEY_CODE = 'code';
    public const KEY_COUPON = 'coupon';
    public const KEY_AMOUNT = 'amount';
    public const KEY_AUTOMATIC = 'automatic';
    public const KEY_START = 'start';
    public const KEY_END = 'end';
    public const KEY_METHOD = 'method';
    public const KEY_PRIORITY = 'priority';
    public const KEY_ALLOCATIONS = 'allocations';
    public const METHOD_EACH = 'each';
    public const METHOD_ACROSS = 'across';

    public const CONSTRAINTS = [
        'amount' => ['minimum' => 0],
        'start' => ['format' => 'date-time'],
        'end' => ['format' => 'date-time'],
        'priority' => ['minimum' => 1],
    ];

    /**
     * Unique identifier for this applied discount instance.
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Unique identifier for this applied discount instance.
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * The discount code entered by the user. Omitted for automatic discounts.
     *
     * @return string|null
     */
    public function getCode(): string|null;

    /**
     * The discount code entered by the user. Omitted for automatic discounts.
     *
     * @param string|null $code
     * @return self
     */
    public function setCode(string|null $code): self;

    /**
     * Details about the underlying coupon/promotion.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\CouponInterface
     */
    public function getCoupon(): CouponInterface;

    /**
     * Details about the underlying coupon/promotion.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\CouponInterface $coupon
     * @return self
     */
    public function setCoupon(CouponInterface $coupon): self;

    /**
     * Total discount amount in minor (cents) currency units.
     *
     * @return int
     */
    public function getAmount(): int;

    /**
     * Total discount amount in minor (cents) currency units.
     *
     * @param int $amount
     * @return self
     */
    public function setAmount(int $amount): self;

    /**
     * True if applied automatically by merchant rules (no code required).
     *
     * @return bool|null
     */
    public function getAutomatic(): bool|null;

    /**
     * True if applied automatically by merchant rules (no code required).
     *
     * @param bool|null $automatic
     * @return self
     */
    public function setAutomatic(bool|null $automatic): self;

    /**
     * RFC 3339 timestamp when the discount became active.
     *
     * @return string|null
     */
    public function getStart(): string|null;

    /**
     * RFC 3339 timestamp when the discount became active.
     *
     * @param string|null $start
     * @return self
     */
    public function setStart(string|null $start): self;

    /**
     * RFC 3339 timestamp when the discount expires.
     *
     * @return string|null
     */
    public function getEnd(): string|null;

    /**
     * RFC 3339 timestamp when the discount expires.
     *
     * @param string|null $end
     * @return self
     */
    public function setEnd(string|null $end): self;

    /**
     * Allocation method. 'each' = applied independently per item. 'across' = split proportionally by value.
     *
     * @return string|null
     */
    public function getMethod(): string|null;

    /**
     * Allocation method. 'each' = applied independently per item. 'across' = split proportionally by value.
     *
     * @param string|null $method
     * @return self
     */
    public function setMethod(string|null $method): self;

    /**
     * Stacking order for discount calculation. Lower numbers applied first (1 = first).
     *
     * @return int|null
     */
    public function getPriority(): int|null;

    /**
     * Stacking order for discount calculation. Lower numbers applied first (1 = first).
     *
     * @param int|null $priority
     * @return self
     */
    public function setPriority(int|null $priority): self;

    /**
     * Breakdown of where this discount was allocated. Sum of allocation amounts equals total amount.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\DiscountAllocationInterface[]|null
     */
    public function getAllocations(): array|null;

    /**
     * Breakdown of where this discount was allocated. Sum of allocation amounts equals total amount.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\DiscountAllocationInterface[]|null $allocations
     * @return self
     */
    public function setAllocations(array|null $allocations): self;
}
