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

use Magebit\AcpSpec\Api\Discount\AllocationInterface;
use Magebit\AcpSpec\Api\Discount\AppliedDiscountInterface;
use Magebit\AcpSpec\Api\Discount\CouponInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * A discount that was successfully applied to the checkout session.
 */
class AppliedDiscount extends SpecObject implements AppliedDiscountInterface
{
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
     * @return string|null
     */
    public function getCode(): string|null
    {
        return $this->stringOrNull(self::KEY_CODE);
    }

    /**
     * @param string|null $code
     * @return self
     */
    public function setCode(string|null $code): self
    {
        return $this->set(self::KEY_CODE, $code);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Discount\CouponInterface
     */
    public function getCoupon(): CouponInterface
    {
        return $this->requireInstance(self::KEY_COUPON, \Magebit\AcpSpec\Api\Discount\CouponInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Discount\CouponInterface $coupon
     * @return self
     */
    public function setCoupon(CouponInterface $coupon): self
    {
        return $this->set(self::KEY_COUPON, $coupon);
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
     * @return bool|null
     */
    public function getAutomatic(): bool|null
    {
        return $this->boolOrNull(self::KEY_AUTOMATIC);
    }

    /**
     * @param bool|null $automatic
     * @return self
     */
    public function setAutomatic(bool|null $automatic): self
    {
        return $this->set(self::KEY_AUTOMATIC, $automatic);
    }

    /**
     * @return string|null
     */
    public function getStart(): string|null
    {
        return $this->stringOrNull(self::KEY_START);
    }

    /**
     * @param string|null $start
     * @return self
     */
    public function setStart(string|null $start): self
    {
        return $this->set(self::KEY_START, $start);
    }

    /**
     * @return string|null
     */
    public function getEnd(): string|null
    {
        return $this->stringOrNull(self::KEY_END);
    }

    /**
     * @param string|null $end
     * @return self
     */
    public function setEnd(string|null $end): self
    {
        return $this->set(self::KEY_END, $end);
    }

    /**
     * @return string|null
     */
    public function getMethod(): string|null
    {
        return $this->stringOrNull(self::KEY_METHOD);
    }

    /**
     * @param string|null $method
     * @return self
     */
    public function setMethod(string|null $method): self
    {
        return $this->set(self::KEY_METHOD, $method);
    }

    /**
     * @return int|null
     */
    public function getPriority(): int|null
    {
        return $this->intOrNull(self::KEY_PRIORITY);
    }

    /**
     * @param int|null $priority
     * @return self
     */
    public function setPriority(int|null $priority): self
    {
        return $this->set(self::KEY_PRIORITY, $priority);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Discount\AllocationInterface[]|null
     */
    public function getAllocations(): array|null
    {
        return $this->instanceListOrNull(self::KEY_ALLOCATIONS, \Magebit\AcpSpec\Api\Discount\AllocationInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Discount\AllocationInterface[]|null $allocations
     * @return self
     */
    public function setAllocations(array|null $allocations): self
    {
        return $this->set(self::KEY_ALLOCATIONS, $allocations);
    }
}
