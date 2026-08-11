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
 * Per-line-item tracking of what was ordered and fulfillment progress.
 */
interface OrderLineItemInterface
{
    public const KEY_ID = 'id';
    public const KEY_TITLE = 'title';
    public const KEY_PRODUCT_ID = 'product_id';
    public const KEY_DESCRIPTION = 'description';
    public const KEY_IMAGE_URL = 'image_url';
    public const KEY_URL = 'url';
    public const KEY_QUANTITY = 'quantity';
    public const KEY_UNIT_PRICE = 'unit_price';
    public const KEY_SUBTOTAL = 'subtotal';
    public const KEY_TOTALS = 'totals';
    public const KEY_STATUS = 'status';

    /**
     * Line item identifier, used for references in fulfillments and adjustments
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Line item identifier, used for references in fulfillments and adjustments
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * Product name
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Product name
     *
     * @param string $title
     * @return self
     */
    public function setTitle(string $title): self;

    /**
     * Catalog product ID
     *
     * @return string|null
     */
    public function getProductId(): string|null;

    /**
     * Catalog product ID
     *
     * @param string|null $productId
     * @return self
     */
    public function setProductId(string|null $productId): self;

    /**
     * Product description
     *
     * @return string|null
     */
    public function getDescription(): string|null;

    /**
     * Product description
     *
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self;

    /**
     * Product image URL
     *
     * @return string|null
     */
    public function getImageUrl(): string|null;

    /**
     * Product image URL
     *
     * @param string|null $imageUrl
     * @return self
     */
    public function setImageUrl(string|null $imageUrl): self;

    /**
     * Product page URL
     *
     * @return string|null
     */
    public function getUrl(): string|null;

    /**
     * Product page URL
     *
     * @param string|null $url
     * @return self
     */
    public function setUrl(string|null $url): self;

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\OrderLineItemQuantityInterface
     */
    public function getQuantity(): OrderLineItemQuantityInterface;

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\OrderLineItemQuantityInterface $quantity
     * @return self
     */
    public function setQuantity(OrderLineItemQuantityInterface $quantity): self;

    /**
     * Price per unit in minor currency units (cents)
     *
     * @return int|null
     */
    public function getUnitPrice(): int|null;

    /**
     * Price per unit in minor currency units (cents)
     *
     * @param int|null $unitPrice
     * @return self
     */
    public function setUnitPrice(int|null $unitPrice): self;

    /**
     * Line total in minor currency units
     *
     * @return int|null
     */
    public function getSubtotal(): int|null;

    /**
     * Line total in minor currency units
     *
     * @param int|null $subtotal
     * @return self
     */
    public function setSubtotal(int|null $subtotal): self;

    /**
     * Optional line-item level totals breakdown using the same Total schema as checkout. Merchants who can provide richer breakdowns MAY use this alongside or instead of unit_price/subtotal.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[]|null
     */
    public function getTotals(): array|null;

    /**
     * Optional line-item level totals breakdown using the same Total schema as checkout. Merchants who can provide richer breakdowns MAY use this alongside or instead of unit_price/subtotal.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[]|null $totals
     * @return self
     */
    public function setTotals(array|null $totals): self;

    /**
     * Derived from quantity fields. Implementations MUST accept unrecognized values gracefully. Defined values: 'processing', 'partial', 'fulfilled', 'removed'. Rules: 'removed' if current==0, 'fulfilled' if fulfilled==current, 'partial' if 0<fulfilled<current, 'processing' otherwise.
     *
     * @return string|null
     */
    public function getStatus(): string|null;

    /**
     * Derived from quantity fields. Implementations MUST accept unrecognized values gracefully. Defined values: 'processing', 'partial', 'fulfilled', 'removed'. Rules: 'removed' if current==0, 'fulfilled' if fulfilled==current, 'partial' if 0<fulfilled<current, 'processing' otherwise.
     *
     * @param string|null $status
     * @return self
     */
    public function setStatus(string|null $status): self;
}
