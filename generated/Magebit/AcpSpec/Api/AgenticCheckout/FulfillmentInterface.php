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
 * A fulfillment represents how items are delivered to the buyer (shipping, pickup, digital).
 */
interface FulfillmentInterface
{
    public const KEY_ID = 'id';
    public const KEY_TYPE = 'type';
    public const KEY_STATUS = 'status';
    public const KEY_LINE_ITEMS = 'line_items';
    public const KEY_CARRIER = 'carrier';
    public const KEY_TRACKING_NUMBER = 'tracking_number';
    public const KEY_TRACKING_URL = 'tracking_url';
    public const KEY_DESTINATION = 'destination';
    public const KEY_ESTIMATED_DELIVERY = 'estimated_delivery';
    public const KEY_DIGITAL_DELIVERY = 'digital_delivery';
    public const KEY_DESCRIPTION = 'description';
    public const KEY_EVENTS = 'events';
    public const TYPE_SHIPPING = 'shipping';
    public const TYPE_PICKUP = 'pickup';
    public const TYPE_DIGITAL = 'digital';
    public const CONSTRAINTS = ['tracking_url' => ['format' => 'uri']];

    /**
     * Fulfillment identifier
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Fulfillment identifier
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * Fulfillment method type
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Fulfillment method type
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Current fulfillment status. Implementations MUST accept unrecognized values gracefully. Defined values: 'pending', 'processing', 'shipped', 'in_transit', 'out_for_delivery', 'ready_for_pickup', 'delivered', 'failed', 'canceled'. Not all statuses apply to all types.
     *
     * @return string|null
     */
    public function getStatus(): string|null;

    /**
     * Current fulfillment status. Implementations MUST accept unrecognized values gracefully. Defined values: 'pending', 'processing', 'shipped', 'in_transit', 'out_for_delivery', 'ready_for_pickup', 'delivered', 'failed', 'canceled'. Not all statuses apply to all types.
     *
     * @param string|null $status
     * @return self
     */
    public function setStatus(string|null $status): self;

    /**
     * Which line items and quantities are in this fulfillment
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\LineItemReferenceInterface[]|null
     */
    public function getLineItems(): array|null;

    /**
     * Which line items and quantities are in this fulfillment
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\LineItemReferenceInterface[]|null $lineItems
     * @return self
     */
    public function setLineItems(array|null $lineItems): self;

    /**
     * Carrier name (e.g., 'FedEx', 'UPS', 'USPS'). Applies to type: shipping.
     *
     * @return string|null
     */
    public function getCarrier(): string|null;

    /**
     * Carrier name (e.g., 'FedEx', 'UPS', 'USPS'). Applies to type: shipping.
     *
     * @param string|null $carrier
     * @return self
     */
    public function setCarrier(string|null $carrier): self;

    /**
     * Carrier tracking number. Applies to type: shipping.
     *
     * @return string|null
     */
    public function getTrackingNumber(): string|null;

    /**
     * Carrier tracking number. Applies to type: shipping.
     *
     * @param string|null $trackingNumber
     * @return self
     */
    public function setTrackingNumber(string|null $trackingNumber): self;

    /**
     * URL to track this shipment. Applies to type: shipping.
     *
     * @return string|null
     */
    public function getTrackingUrl(): string|null;

    /**
     * URL to track this shipment. Applies to type: shipping.
     *
     * @param string|null $trackingUrl
     * @return self
     */
    public function setTrackingUrl(string|null $trackingUrl): self;

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface|null
     */
    public function getDestination(): AddressInterface|null;

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface|null $destination
     * @return self
     */
    public function setDestination(AddressInterface|null $destination): self;

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\EstimatedDeliveryInterface|null
     */
    public function getEstimatedDelivery(): EstimatedDeliveryInterface|null;

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\EstimatedDeliveryInterface|null $estimatedDelivery
     * @return self
     */
    public function setEstimatedDelivery(EstimatedDeliveryInterface|null $estimatedDelivery): self;

    /**
     * Digital delivery details. Applies to type: digital.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDigitalDeliveryInterface|null
     */
    public function getDigitalDelivery(): FulfillmentDigitalDeliveryInterface|null;

    /**
     * Digital delivery details. Applies to type: digital.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDigitalDeliveryInterface|null $digitalDelivery
     * @return self
     */
    public function setDigitalDelivery(FulfillmentDigitalDeliveryInterface|null $digitalDelivery): self;

    /**
     * Human-readable description (e.g., 'Backordered - ships Feb 15')
     *
     * @return string|null
     */
    public function getDescription(): string|null;

    /**
     * Human-readable description (e.g., 'Backordered - ships Feb 15')
     *
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self;

    /**
     * Append-only event log tracking fulfillment progress
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentEventInterface[]|null
     */
    public function getEvents(): array|null;

    /**
     * Append-only event log tracking fulfillment progress
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentEventInterface[]|null $events
     * @return self
     */
    public function setEvents(array|null $events): self;
}
