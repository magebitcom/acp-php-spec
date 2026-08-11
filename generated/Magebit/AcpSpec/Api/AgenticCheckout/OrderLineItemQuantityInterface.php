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
 * Quantity tracking for an order line item. Uses a 3-field model: ordered (original), current (active after cancellations/returns), fulfilled (completed).
 */
interface OrderLineItemQuantityInterface
{
    public const KEY_ORDERED = 'ordered';
    public const KEY_CURRENT = 'current';
    public const KEY_FULFILLED = 'fulfilled';

    /**
     * Quantity originally ordered by the customer
     *
     * @return int
     */
    public function getOrdered(): int;

    /**
     * Quantity originally ordered by the customer
     *
     * @param int $ordered
     * @return self
     */
    public function setOrdered(int $ordered): self;

    /**
     * Current active quantity on the order. May be less than ordered due to cancellations or returns. A value of 0 means the line item has been fully removed.
     *
     * @return int
     */
    public function getCurrent(): int;

    /**
     * Current active quantity on the order. May be less than ordered due to cancellations or returns. A value of 0 means the line item has been fully removed.
     *
     * @param int $current
     * @return self
     */
    public function setCurrent(int $current): self;

    /**
     * Quantity that has been fulfilled (shipped, picked up, or digitally delivered). Applies to all fulfillment types, not just shipping.
     *
     * @return int|null
     */
    public function getFulfilled(): int|null;

    /**
     * Quantity that has been fulfilled (shipped, picked up, or digitally delivered). Applies to all fulfillment types, not just shipping.
     *
     * @param int|null $fulfilled
     * @return self
     */
    public function setFulfilled(int|null $fulfilled): self;
}
