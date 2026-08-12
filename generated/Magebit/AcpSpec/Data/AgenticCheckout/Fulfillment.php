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

use Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\EstimatedDeliveryInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDigitalDeliveryInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentEventInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\LineItemReferenceInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * A fulfillment represents how items are delivered to the buyer (shipping, pickup, digital).
 */
class Fulfillment extends SpecObject implements FulfillmentInterface
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
    public function getType(): string
    {
        return $this->requireString(self::KEY_TYPE);
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType(string $type): self
    {
        return $this->set(self::KEY_TYPE, $type);
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
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\LineItemReferenceInterface[]|null
     */
    public function getLineItems(): array|null
    {
        return $this->instanceListOrNull(self::KEY_LINE_ITEMS, \Magebit\AcpSpec\Api\AgenticCheckout\LineItemReferenceInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\LineItemReferenceInterface[]|null $lineItems
     * @return self
     */
    public function setLineItems(array|null $lineItems): self
    {
        return $this->set(self::KEY_LINE_ITEMS, $lineItems);
    }

    /**
     * @return string|null
     */
    public function getCarrier(): string|null
    {
        return $this->stringOrNull(self::KEY_CARRIER);
    }

    /**
     * @param string|null $carrier
     * @return self
     */
    public function setCarrier(string|null $carrier): self
    {
        return $this->set(self::KEY_CARRIER, $carrier);
    }

    /**
     * @return string|null
     */
    public function getTrackingNumber(): string|null
    {
        return $this->stringOrNull(self::KEY_TRACKING_NUMBER);
    }

    /**
     * @param string|null $trackingNumber
     * @return self
     */
    public function setTrackingNumber(string|null $trackingNumber): self
    {
        return $this->set(self::KEY_TRACKING_NUMBER, $trackingNumber);
    }

    /**
     * @return string|null
     */
    public function getTrackingUrl(): string|null
    {
        return $this->stringOrNull(self::KEY_TRACKING_URL);
    }

    /**
     * @param string|null $trackingUrl
     * @return self
     */
    public function setTrackingUrl(string|null $trackingUrl): self
    {
        return $this->set(self::KEY_TRACKING_URL, $trackingUrl);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface|null
     */
    public function getDestination(): AddressInterface|null
    {
        return $this->instanceOrNull(self::KEY_DESTINATION, \Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface|null $destination
     * @return self
     */
    public function setDestination(AddressInterface|null $destination): self
    {
        return $this->set(self::KEY_DESTINATION, $destination);
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
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDigitalDeliveryInterface|null
     */
    public function getDigitalDelivery(): FulfillmentDigitalDeliveryInterface|null
    {
        return $this->instanceOrNull(self::KEY_DIGITAL_DELIVERY, \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDigitalDeliveryInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDigitalDeliveryInterface|null $digitalDelivery
     * @return self
     */
    public function setDigitalDelivery(FulfillmentDigitalDeliveryInterface|null $digitalDelivery): self
    {
        return $this->set(self::KEY_DIGITAL_DELIVERY, $digitalDelivery);
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
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentEventInterface[]|null
     */
    public function getEvents(): array|null
    {
        return $this->instanceListOrNull(self::KEY_EVENTS, \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentEventInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentEventInterface[]|null $events
     * @return self
     */
    public function setEvents(array|null $events): self
    {
        return $this->set(self::KEY_EVENTS, $events);
    }
}
