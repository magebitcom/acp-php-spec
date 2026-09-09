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
 * Reference to a line item with quantity, used in fulfillments and adjustments
 */
interface LineItemReferenceInterface
{
    public const KEY_ID = 'id';
    public const KEY_QUANTITY = 'quantity';
    public const CONSTRAINTS = ['quantity' => ['minimum' => 1]];

    /**
     * Line item ID reference
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Line item ID reference
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * Quantity in this fulfillment or adjustment
     *
     * @return int
     */
    public function getQuantity(): int;

    /**
     * Quantity in this fulfillment or adjustment
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity(int $quantity): self;
}
