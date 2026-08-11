<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\Discount;

use Magebit\AcpSpec\Api\Discount\CouponInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Coupon details describing the discount terms.
 */
class Coupon extends SpecObject implements CouponInterface
{
    /** @var string[] */
    protected array $jsonObjectKeys = ['metadata'];

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->requireString(self::KEY_ID);
    }

    /**
     * @param string $id
     * @return self
     */
    public function setId(string $id): self
    {
        return $this->set(self::KEY_ID, $id);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->requireString(self::KEY_NAME);
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        return $this->set(self::KEY_NAME, $name);
    }

    /**
     * @return float|null
     */
    public function getPercentOff(): float|null
    {
        return $this->floatOrNull(self::KEY_PERCENT_OFF);
    }

    /**
     * @param float|null $percentOff
     * @return self
     */
    public function setPercentOff(float|null $percentOff): self
    {
        return $this->set(self::KEY_PERCENT_OFF, $percentOff);
    }

    /**
     * @return int|null
     */
    public function getAmountOff(): int|null
    {
        return $this->intOrNull(self::KEY_AMOUNT_OFF);
    }

    /**
     * @param int|null $amountOff
     * @return self
     */
    public function setAmountOff(int|null $amountOff): self
    {
        return $this->set(self::KEY_AMOUNT_OFF, $amountOff);
    }

    /**
     * @return string|null
     */
    public function getCurrency(): string|null
    {
        return $this->stringOrNull(self::KEY_CURRENCY);
    }

    /**
     * @param string|null $currency
     * @return self
     */
    public function setCurrency(string|null $currency): self
    {
        return $this->set(self::KEY_CURRENCY, $currency);
    }

    /**
     * @return string|null
     */
    public function getDuration(): string|null
    {
        return $this->stringOrNull(self::KEY_DURATION);
    }

    /**
     * @param string|null $duration
     * @return self
     */
    public function setDuration(string|null $duration): self
    {
        return $this->set(self::KEY_DURATION, $duration);
    }

    /**
     * @return int|null
     */
    public function getDurationInMonths(): int|null
    {
        return $this->intOrNull(self::KEY_DURATION_IN_MONTHS);
    }

    /**
     * @param int|null $durationInMonths
     * @return self
     */
    public function setDurationInMonths(int|null $durationInMonths): self
    {
        return $this->set(self::KEY_DURATION_IN_MONTHS, $durationInMonths);
    }

    /**
     * @return int|null
     */
    public function getMaxRedemptions(): int|null
    {
        return $this->intOrNull(self::KEY_MAX_REDEMPTIONS);
    }

    /**
     * @param int|null $maxRedemptions
     * @return self
     */
    public function setMaxRedemptions(int|null $maxRedemptions): self
    {
        return $this->set(self::KEY_MAX_REDEMPTIONS, $maxRedemptions);
    }

    /**
     * @return int|null
     */
    public function getTimesRedeemed(): int|null
    {
        return $this->intOrNull(self::KEY_TIMES_REDEEMED);
    }

    /**
     * @param int|null $timesRedeemed
     * @return self
     */
    public function setTimesRedeemed(int|null $timesRedeemed): self
    {
        return $this->set(self::KEY_TIMES_REDEEMED, $timesRedeemed);
    }

    /**
     * @return array<string, string>|null
     */
    public function getMetadata(): array|null
    {
        return $this->arrayOrNull(self::KEY_METADATA);
    }

    /**
     * @param array<string, string>|null $metadata
     * @return self
     */
    public function setMetadata(array|null $metadata): self
    {
        return $this->set(self::KEY_METADATA, $metadata);
    }
}
