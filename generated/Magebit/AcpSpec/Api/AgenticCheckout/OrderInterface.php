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
 * Order returned after checkout completion. Contains order details and optional rich post-purchase tracking.
 */
interface OrderInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_ID = 'id';
    public const KEY_CHECKOUT_SESSION_ID = 'checkout_session_id';
    public const KEY_ORDER_NUMBER = 'order_number';
    public const KEY_CLIENT_REFERENCE_ID = 'client_reference_id';
    public const KEY_PERMALINK_URL = 'permalink_url';
    public const KEY_STATUS = 'status';
    public const KEY_ESTIMATED_DELIVERY = 'estimated_delivery';
    public const KEY_CONFIRMATION = 'confirmation';
    public const KEY_SUPPORT = 'support';
    public const KEY_LINE_ITEMS = 'line_items';
    public const KEY_FULFILLMENTS = 'fulfillments';
    public const KEY_ADJUSTMENTS = 'adjustments';
    public const KEY_TOTALS = 'totals';
    public const TYPE_ORDER = 'order';

    /**
     * Discriminator field for webhook payloads. Always 'order' when present.
     *
     * @return string|null
     */
    public function getType(): string|null;

    /**
     * Discriminator field for webhook payloads. Always 'order' when present.
     *
     * @param string|null $type
     * @return self
     */
    public function setType(string|null $type): self;

    /**
     * Unique identifier for the order
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Unique identifier for the order
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * ID of the checkout session that created this order
     *
     * @return string
     */
    public function getCheckoutSessionId(): string;

    /**
     * ID of the checkout session that created this order
     *
     * @param string $checkoutSessionId
     * @return self
     */
    public function setCheckoutSessionId(string $checkoutSessionId): self;

    /**
     * Human-readable order number for customer reference
     *
     * @return string|null
     */
    public function getOrderNumber(): string|null;

    /**
     * Human-readable order number for customer reference
     *
     * @param string|null $orderNumber
     * @return self
     */
    public function setOrderNumber(string|null $orderNumber): self;

    /**
     * Reference from the client (agent/platform) stored on the order for reconciliation (e.g. platform transaction id, PO number, ERP id).
     *
     * @return string|null
     */
    public function getClientReferenceId(): string|null;

    /**
     * Reference from the client (agent/platform) stored on the order for reconciliation (e.g. platform transaction id, PO number, ERP id).
     *
     * @param string|null $clientReferenceId
     * @return self
     */
    public function setClientReferenceId(string|null $clientReferenceId): self;

    /**
     * Permanent URL where the customer can view order details
     *
     * @return string
     */
    public function getPermalinkUrl(): string;

    /**
     * Permanent URL where the customer can view order details
     *
     * @param string $permalinkUrl
     * @return self
     */
    public function setPermalinkUrl(string $permalinkUrl): self;

    /**
     * Order-level status. Implementations MUST accept unrecognized values gracefully. Defined values: 'created', 'confirmed', 'manual_review', 'processing', 'shipped', 'completed', 'canceled'. 'completed' means all items have been delivered/received regardless of fulfillment method. Distinct from LineItem.status 'fulfilled', which indicates the seller has dispatched the item.
     *
     * @return string|null
     */
    public function getStatus(): string|null;

    /**
     * Order-level status. Implementations MUST accept unrecognized values gracefully. Defined values: 'created', 'confirmed', 'manual_review', 'processing', 'shipped', 'completed', 'canceled'. 'completed' means all items have been delivered/received regardless of fulfillment method. Distinct from LineItem.status 'fulfilled', which indicates the seller has dispatched the item.
     *
     * @param string|null $status
     * @return self
     */
    public function setStatus(string|null $status): self;

    /**
     * Estimated delivery time range
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\EstimatedDeliveryInterface|null
     */
    public function getEstimatedDelivery(): EstimatedDeliveryInterface|null;

    /**
     * Estimated delivery time range
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\EstimatedDeliveryInterface|null $estimatedDelivery
     * @return self
     */
    public function setEstimatedDelivery(EstimatedDeliveryInterface|null $estimatedDelivery): self;

    /**
     * Order confirmation details
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\OrderConfirmationInterface|null
     */
    public function getConfirmation(): OrderConfirmationInterface|null;

    /**
     * Order confirmation details
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\OrderConfirmationInterface|null $confirmation
     * @return self
     */
    public function setConfirmation(OrderConfirmationInterface|null $confirmation): self;

    /**
     * Customer support contact information
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\SupportInfoInterface|null
     */
    public function getSupport(): SupportInfoInterface|null;

    /**
     * Customer support contact information
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\SupportInfoInterface|null $support
     * @return self
     */
    public function setSupport(SupportInfoInterface|null $support): self;

    /**
     * What was ordered, with per-item fulfillment tracking
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\OrderLineItemInterface[]|null
     */
    public function getLineItems(): array|null;

    /**
     * What was ordered, with per-item fulfillment tracking
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\OrderLineItemInterface[]|null $lineItems
     * @return self
     */
    public function setLineItems(array|null $lineItems): self;

    /**
     * How items are being delivered (shipping, pickup, digital)
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentInterface[]|null
     */
    public function getFulfillments(): array|null;

    /**
     * How items are being delivered (shipping, pickup, digital)
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentInterface[]|null $fulfillments
     * @return self
     */
    public function setFulfillments(array|null $fulfillments): self;

    /**
     * Post-order changes: refunds, credits, returns, disputes
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AdjustmentInterface[]|null
     */
    public function getAdjustments(): array|null;

    /**
     * Post-order changes: refunds, credits, returns, disputes
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AdjustmentInterface[]|null $adjustments
     * @return self
     */
    public function setAdjustments(array|null $adjustments): self;

    /**
     * Order-level totals using the same Total schema as checkout. The 'total' entry is always the original charged amount. 'amount_refunded' tracks cumulative refunds.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[]|null
     */
    public function getTotals(): array|null;

    /**
     * Order-level totals using the same Total schema as checkout. The 'total' entry is always the original charged amount. 'amount_refunded' tracks cumulative refunds.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[]|null $totals
     * @return self
     */
    public function setTotals(array|null $totals): self;
}
