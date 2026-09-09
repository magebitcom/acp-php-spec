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
 * Coupon details describing the discount terms.
 */
interface CouponInterface
{
    public const KEY_ID = 'id';
    public const KEY_NAME = 'name';
    public const KEY_PERCENT_OFF = 'percent_off';
    public const KEY_AMOUNT_OFF = 'amount_off';
    public const KEY_CURRENCY = 'currency';
    public const KEY_DURATION = 'duration';
    public const KEY_DURATION_IN_MONTHS = 'duration_in_months';
    public const KEY_MAX_REDEMPTIONS = 'max_redemptions';
    public const KEY_TIMES_REDEEMED = 'times_redeemed';
    public const KEY_METADATA = 'metadata';
    public const DURATION_ONCE = 'once';
    public const DURATION_REPEATING = 'repeating';
    public const DURATION_FOREVER = 'forever';

    public const CONSTRAINTS = [
        'percent_off' => ['minimum' => 0, 'maximum' => 100],
        'amount_off' => ['minimum' => 0],
        'currency' => ['pattern' => '^[a-z]{3}$'],
        'duration_in_months' => ['minimum' => 1],
        'max_redemptions' => ['minimum' => 1],
        'times_redeemed' => ['minimum' => 0],
    ];

    /**
     * Unique identifier for the coupon.
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Unique identifier for the coupon.
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * Human-readable coupon name (e.g., 'Summer Sale 20% Off').
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Human-readable coupon name (e.g., 'Summer Sale 20% Off').
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;

    /**
     * Percentage discount (0-100). Mutually exclusive with amount_off.
     *
     * @return float|null
     */
    public function getPercentOff(): float|null;

    /**
     * Percentage discount (0-100). Mutually exclusive with amount_off.
     *
     * @param float|null $percentOff
     * @return self
     */
    public function setPercentOff(float|null $percentOff): self;

    /**
     * Fixed discount amount in minor currency units. Mutually exclusive with percent_off.
     *
     * @return int|null
     */
    public function getAmountOff(): int|null;

    /**
     * Fixed discount amount in minor currency units. Mutually exclusive with percent_off.
     *
     * @param int|null $amountOff
     * @return self
     */
    public function setAmountOff(int|null $amountOff): self;

    /**
     * ISO 4217 currency code for amount_off. Required if amount_off is set.
     *
     * @return string|null
     */
    public function getCurrency(): string|null;

    /**
     * ISO 4217 currency code for amount_off. Required if amount_off is set.
     *
     * @param string|null $currency
     * @return self
     */
    public function setCurrency(string|null $currency): self;

    /**
     * How long the discount applies. 'once' = single use, 'repeating' = multiple billing periods, 'forever' = indefinitely.
     *
     * @return string|null
     */
    public function getDuration(): string|null;

    /**
     * How long the discount applies. 'once' = single use, 'repeating' = multiple billing periods, 'forever' = indefinitely.
     *
     * @param string|null $duration
     * @return self
     */
    public function setDuration(string|null $duration): self;

    /**
     * Number of months the coupon applies if duration is 'repeating'.
     *
     * @return int|null
     */
    public function getDurationInMonths(): int|null;

    /**
     * Number of months the coupon applies if duration is 'repeating'.
     *
     * @param int|null $durationInMonths
     * @return self
     */
    public function setDurationInMonths(int|null $durationInMonths): self;

    /**
     * Maximum number of times this coupon can be redeemed across all customers.
     *
     * @return int|null
     */
    public function getMaxRedemptions(): int|null;

    /**
     * Maximum number of times this coupon can be redeemed across all customers.
     *
     * @param int|null $maxRedemptions
     * @return self
     */
    public function setMaxRedemptions(int|null $maxRedemptions): self;

    /**
     * Number of times this coupon has been redeemed.
     *
     * @return int|null
     */
    public function getTimesRedeemed(): int|null;

    /**
     * Number of times this coupon has been redeemed.
     *
     * @param int|null $timesRedeemed
     * @return self
     */
    public function setTimesRedeemed(int|null $timesRedeemed): self;

    /**
     * Arbitrary key-value metadata attached to the coupon.
     *
     * @return array<string, string>|null
     */
    public function getMetadata(): array|null;

    /**
     * Arbitrary key-value metadata attached to the coupon.
     *
     * @param array<string, string>|null $metadata
     * @return self
     */
    public function setMetadata(array|null $metadata): self;
}
