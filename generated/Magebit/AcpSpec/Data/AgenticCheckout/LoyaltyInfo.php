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

use Magebit\AcpSpec\Api\AgenticCheckout\LoyaltyInfoInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Loyalty program information including membership details and rewards balance
 */
class LoyaltyInfo extends SpecObject implements LoyaltyInfoInterface
{
    /**
     * @return string|null
     */
    public function getTier(): string|null
    {
        return $this->stringOrNull(self::KEY_TIER);
    }

    /**
     * @param string|null $tier
     * @return self
     */
    public function setTier(string|null $tier): self
    {
        return $this->set(self::KEY_TIER, $tier);
    }

    /**
     * @return int|null
     */
    public function getPointsBalance(): int|null
    {
        return $this->intOrNull(self::KEY_POINTS_BALANCE);
    }

    /**
     * @param int|null $pointsBalance
     * @return self
     */
    public function setPointsBalance(int|null $pointsBalance): self
    {
        return $this->set(self::KEY_POINTS_BALANCE, $pointsBalance);
    }

    /**
     * @return string|null
     */
    public function getMemberSince(): string|null
    {
        return $this->stringOrNull(self::KEY_MEMBER_SINCE);
    }

    /**
     * @param string|null $memberSince
     * @return self
     */
    public function setMemberSince(string|null $memberSince): self
    {
        return $this->set(self::KEY_MEMBER_SINCE, $memberSince);
    }
}
