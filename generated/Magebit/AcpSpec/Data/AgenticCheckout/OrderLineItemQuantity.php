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

use Magebit\AcpSpec\Api\AgenticCheckout\OrderLineItemQuantityInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Quantity tracking for an order line item. Uses a 3-field model: ordered (original), current (active after cancellations/returns), fulfilled (completed).
 */
class OrderLineItemQuantity extends SpecObject implements OrderLineItemQuantityInterface
{
    /**
     * @return int
     */
    public function getOrdered(): int
    {
        return $this->requireInt(self::KEY_ORDERED);
    }

    /**
     * @param int $ordered
     * @return self
     */
    public function setOrdered(int $ordered): self
    {
        return $this->set(self::KEY_ORDERED, $ordered);
    }

    /**
     * @return int
     */
    public function getCurrent(): int
    {
        return $this->requireInt(self::KEY_CURRENT);
    }

    /**
     * @param int $current
     * @return self
     */
    public function setCurrent(int $current): self
    {
        return $this->set(self::KEY_CURRENT, $current);
    }

    /**
     * @return int|null
     */
    public function getFulfilled(): int|null
    {
        return $this->intOrNull(self::KEY_FULFILLED);
    }

    /**
     * @param int|null $fulfilled
     * @return self
     */
    public function setFulfilled(int|null $fulfilled): self
    {
        return $this->set(self::KEY_FULFILLED, $fulfilled);
    }
}
