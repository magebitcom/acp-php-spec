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

use Magebit\AcpSpec\Api\AgenticCheckout\AdjustmentInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\EstimatedDeliveryInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\OrderConfirmationInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\OrderInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\OrderLineItemInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\SupportInfoInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Order returned after checkout completion. Contains order details and optional rich post-purchase tracking.
 */
class Order extends SpecObject implements OrderInterface
{
    /**
     * @return string|null
     */
    public function getType(): string|null
    {
        return $this->stringOrNull(self::KEY_TYPE);
    }

    /**
     * @param string|null $type
     * @return self
     */
    public function setType(string|null $type): self
    {
        return $this->set(self::KEY_TYPE, $type);
    }

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
    public function getCheckoutSessionId(): string
    {
        return $this->requireString(self::KEY_CHECKOUT_SESSION_ID);
    }

    /**
     * @param string $checkoutSessionId
     * @return self
     */
    public function setCheckoutSessionId(string $checkoutSessionId): self
    {
        return $this->set(self::KEY_CHECKOUT_SESSION_ID, $checkoutSessionId);
    }

    /**
     * @return string|null
     */
    public function getOrderNumber(): string|null
    {
        return $this->stringOrNull(self::KEY_ORDER_NUMBER);
    }

    /**
     * @param string|null $orderNumber
     * @return self
     */
    public function setOrderNumber(string|null $orderNumber): self
    {
        return $this->set(self::KEY_ORDER_NUMBER, $orderNumber);
    }

    /**
     * @return string|null
     */
    public function getClientReferenceId(): string|null
    {
        return $this->stringOrNull(self::KEY_CLIENT_REFERENCE_ID);
    }

    /**
     * @param string|null $clientReferenceId
     * @return self
     */
    public function setClientReferenceId(string|null $clientReferenceId): self
    {
        return $this->set(self::KEY_CLIENT_REFERENCE_ID, $clientReferenceId);
    }

    /**
     * @return string
     */
    public function getPermalinkUrl(): string
    {
        return $this->requireString(self::KEY_PERMALINK_URL);
    }

    /**
     * @param string $permalinkUrl
     * @return self
     */
    public function setPermalinkUrl(string $permalinkUrl): self
    {
        return $this->set(self::KEY_PERMALINK_URL, $permalinkUrl);
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

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\EstimatedDeliveryInterface|null
     */
    public function getEstimatedDelivery(): EstimatedDeliveryInterface|null
    {
        return $this->instanceOrNull(self::KEY_ESTIMATED_DELIVERY, \Magebit\AcpSpec\Api\AgenticCheckout\EstimatedDeliveryInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\EstimatedDeliveryInterface|null $estimatedDelivery
     * @return self
     */
    public function setEstimatedDelivery(EstimatedDeliveryInterface|null $estimatedDelivery): self
    {
        return $this->set(self::KEY_ESTIMATED_DELIVERY, $estimatedDelivery);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\OrderConfirmationInterface|null
     */
    public function getConfirmation(): OrderConfirmationInterface|null
    {
        return $this->instanceOrNull(self::KEY_CONFIRMATION, \Magebit\AcpSpec\Api\AgenticCheckout\OrderConfirmationInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\OrderConfirmationInterface|null $confirmation
     * @return self
     */
    public function setConfirmation(OrderConfirmationInterface|null $confirmation): self
    {
        return $this->set(self::KEY_CONFIRMATION, $confirmation);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\SupportInfoInterface|null
     */
    public function getSupport(): SupportInfoInterface|null
    {
        return $this->instanceOrNull(self::KEY_SUPPORT, \Magebit\AcpSpec\Api\AgenticCheckout\SupportInfoInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\SupportInfoInterface|null $support
     * @return self
     */
    public function setSupport(SupportInfoInterface|null $support): self
    {
        return $this->set(self::KEY_SUPPORT, $support);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\OrderLineItemInterface[]|null
     */
    public function getLineItems(): array|null
    {
        return $this->instanceListOrNull(self::KEY_LINE_ITEMS, \Magebit\AcpSpec\Api\AgenticCheckout\OrderLineItemInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\OrderLineItemInterface[]|null $lineItems
     * @return self
     */
    public function setLineItems(array|null $lineItems): self
    {
        return $this->set(self::KEY_LINE_ITEMS, $lineItems);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentInterface[]|null
     */
    public function getFulfillments(): array|null
    {
        return $this->instanceListOrNull(self::KEY_FULFILLMENTS, \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentInterface[]|null $fulfillments
     * @return self
     */
    public function setFulfillments(array|null $fulfillments): self
    {
        return $this->set(self::KEY_FULFILLMENTS, $fulfillments);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AdjustmentInterface[]|null
     */
    public function getAdjustments(): array|null
    {
        return $this->instanceListOrNull(self::KEY_ADJUSTMENTS, \Magebit\AcpSpec\Api\AgenticCheckout\AdjustmentInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AdjustmentInterface[]|null $adjustments
     * @return self
     */
    public function setAdjustments(array|null $adjustments): self
    {
        return $this->set(self::KEY_ADJUSTMENTS, $adjustments);
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
}
