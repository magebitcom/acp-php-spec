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
 * Loyalty program information including membership details and rewards balance
 */
interface LoyaltyInfoInterface
{
    public const KEY_TIER = 'tier';
    public const KEY_POINTS_BALANCE = 'points_balance';
    public const KEY_MEMBER_SINCE = 'member_since';
    public const CONSTRAINTS = ['member_since' => ['format' => 'date-time']];

    /**
     * Loyalty program tier level
     *
     * @return string|null
     */
    public function getTier(): string|null;

    /**
     * Loyalty program tier level
     *
     * @param string|null $tier
     * @return self
     */
    public function setTier(string|null $tier): self;

    /**
     * Current loyalty points balance
     *
     * @return int|null
     */
    public function getPointsBalance(): int|null;

    /**
     * Current loyalty points balance
     *
     * @param int|null $pointsBalance
     * @return self
     */
    public function setPointsBalance(int|null $pointsBalance): self;

    /**
     * RFC 3339 timestamp when the customer joined the loyalty program
     *
     * @return string|null
     */
    public function getMemberSince(): string|null;

    /**
     * RFC 3339 timestamp when the customer joined the loyalty program
     *
     * @param string|null $memberSince
     * @return self
     */
    public function setMemberSince(string|null $memberSince): self;
}
