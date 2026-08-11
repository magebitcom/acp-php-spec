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

use Magebit\AcpSpec\Api\AgenticCheckout\OrderLineItemInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\OrderLineItemQuantityInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Per-line-item tracking of what was ordered and fulfillment progress.
 */
class OrderLineItem extends SpecObject implements OrderLineItemInterface
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
     * @return string
     */
    public function getTitle(): string
    {
        return $this->requireString(self::KEY_TITLE);
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(string $title): self
    {
        return $this->set(self::KEY_TITLE, $title);
    }

    /**
     * @return string|null
     */
    public function getProductId(): string|null
    {
        return $this->stringOrNull(self::KEY_PRODUCT_ID);
    }

    /**
     * @param string|null $productId
     * @return self
     */
    public function setProductId(string|null $productId): self
    {
        return $this->set(self::KEY_PRODUCT_ID, $productId);
    }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
        return $this->stringOrNull(self::KEY_DESCRIPTION);
    }

    /**
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self
    {
        return $this->set(self::KEY_DESCRIPTION, $description);
    }

    /**
     * @return string|null
     */
    public function getImageUrl(): string|null
    {
        return $this->stringOrNull(self::KEY_IMAGE_URL);
    }

    /**
     * @param string|null $imageUrl
     * @return self
     */
    public function setImageUrl(string|null $imageUrl): self
    {
        return $this->set(self::KEY_IMAGE_URL, $imageUrl);
    }

    /**
     * @return string|null
     */
    public function getUrl(): string|null
    {
        return $this->stringOrNull(self::KEY_URL);
    }

    /**
     * @param string|null $url
     * @return self
     */
    public function setUrl(string|null $url): self
    {
        return $this->set(self::KEY_URL, $url);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\OrderLineItemQuantityInterface
     */
    public function getQuantity(): OrderLineItemQuantityInterface
    {
        return $this->requireInstance(self::KEY_QUANTITY, \Magebit\AcpSpec\Api\AgenticCheckout\OrderLineItemQuantityInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\OrderLineItemQuantityInterface $quantity
     * @return self
     */
    public function setQuantity(OrderLineItemQuantityInterface $quantity): self
    {
        return $this->set(self::KEY_QUANTITY, $quantity);
    }

    /**
     * @return int|null
     */
    public function getUnitPrice(): int|null
    {
        return $this->intOrNull(self::KEY_UNIT_PRICE);
    }

    /**
     * @param int|null $unitPrice
     * @return self
     */
    public function setUnitPrice(int|null $unitPrice): self
    {
        return $this->set(self::KEY_UNIT_PRICE, $unitPrice);
    }

    /**
     * @return int|null
     */
    public function getSubtotal(): int|null
    {
        return $this->intOrNull(self::KEY_SUBTOTAL);
    }

    /**
     * @param int|null $subtotal
     * @return self
     */
    public function setSubtotal(int|null $subtotal): self
    {
        return $this->set(self::KEY_SUBTOTAL, $subtotal);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[]|null
     */
    public function getTotals(): array|null
    {
        return $this->instanceListOrNull(self::KEY_TOTALS, \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[]|null $totals
     * @return self
     */
    public function setTotals(array|null $totals): self
    {
        return $this->set(self::KEY_TOTALS, $totals);
    }

    /**
     * @return string|null
     */
    public function getStatus(): string|null
    {
        return $this->stringOrNull(self::KEY_STATUS);
    }

    /**
     * @param string|null $status
     * @return self
     */
    public function setStatus(string|null $status): self
    {
        return $this->set(self::KEY_STATUS, $status);
    }
}
