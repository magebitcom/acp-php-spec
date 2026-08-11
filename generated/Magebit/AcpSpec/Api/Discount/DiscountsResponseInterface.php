<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\Discount;

/**
 * Discount codes input, applied discounts, and rejected codes in checkout responses.
 */
interface DiscountsResponseInterface
{
    public const KEY_CODES = 'codes';
    public const KEY_APPLIED = 'applied';
    public const KEY_REJECTED = 'rejected';

    /**
     * Echo of submitted discount codes.
     *
     * @return string[]|null
     */
    public function getCodes(): array|null;

    /**
     * Echo of submitted discount codes.
     *
     * @param string[]|null $codes
     * @return self
     */
    public function setCodes(array|null $codes): self;

    /**
     * Discounts successfully applied (code-based and automatic).
     *
     * @return \Magebit\AcpSpec\Api\Discount\AppliedDiscountInterface[]|null
     */
    public function getApplied(): array|null;

    /**
     * Discounts successfully applied (code-based and automatic).
     *
     * @param \Magebit\AcpSpec\Api\Discount\AppliedDiscountInterface[]|null $applied
     * @return self
     */
    public function setApplied(array|null $applied): self;

    /**
     * Discount codes that could not be applied, with reasons.
     *
     * @return \Magebit\AcpSpec\Api\Discount\RejectedDiscountInterface[]|null
     */
    public function getRejected(): array|null;

    /**
     * Discount codes that could not be applied, with reasons.
     *
     * @param \Magebit\AcpSpec\Api\Discount\RejectedDiscountInterface[]|null $rejected
     * @return self
     */
    public function setRejected(array|null $rejected): self;
}
