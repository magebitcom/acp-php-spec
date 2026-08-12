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

use Magebit\AcpSpec\Api\AgenticCheckout\AppliedDiscountInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\DiscountsResponseInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\RejectedDiscountInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Discount codes input and applied discounts output in checkout responses.
 */
class DiscountsResponse extends SpecObject implements DiscountsResponseInterface
{
    /**
     * @return string[]|null
     */
    public function getCodes(): array|null
    {
        return $this->arrayOrNull(self::KEY_CODES);
    }

    /**
     * @param string[]|null $codes
     * @return self
     */
    public function setCodes(array|null $codes): self
    {
        return $this->set(self::KEY_CODES, $codes);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AppliedDiscountInterface[]|null
     */
    public function getApplied(): array|null
    {
        return $this->instanceListOrNull(self::KEY_APPLIED, \Magebit\AcpSpec\Api\AgenticCheckout\AppliedDiscountInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AppliedDiscountInterface[]|null $applied
     * @return self
     */
    public function setApplied(array|null $applied): self
    {
        return $this->set(self::KEY_APPLIED, $applied);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\RejectedDiscountInterface[]|null
     */
    public function getRejected(): array|null
    {
        return $this->instanceListOrNull(self::KEY_REJECTED, \Magebit\AcpSpec\Api\AgenticCheckout\RejectedDiscountInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\RejectedDiscountInterface[]|null $rejected
     * @return self
     */
    public function setRejected(array|null $rejected): self
    {
        return $this->set(self::KEY_REJECTED, $rejected);
    }
}
