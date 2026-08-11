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
 * Local delivery fulfillment option with delivery address and scheduling details
 */
interface FulfillmentOptionLocalDeliveryInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_ID = 'id';
    public const KEY_TITLE = 'title';
    public const KEY_DESCRIPTION = 'description';
    public const KEY_DELIVERY_WINDOW = 'delivery_window';
    public const KEY_SERVICE_AREA = 'service_area';
    public const KEY_TOTALS = 'totals';
    public const TYPE_LOCAL_DELIVERY = 'local_delivery';

    /**
     * Fulfillment type discriminator
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Fulfillment type discriminator
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Unique identifier for this fulfillment option
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Unique identifier for this fulfillment option
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * Display title for this local delivery option
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Display title for this local delivery option
     *
     * @param string $title
     * @return self
     */
    public function setTitle(string $title): self;

    /**
     * Additional details about this delivery option
     *
     * @return string|null
     */
    public function getDescription(): string|null;

    /**
     * Additional details about this delivery option
     *
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self;

    /**
     * Expected delivery time window
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionLocalDeliveryDeliveryWindowInterface|null
     */
    public function getDeliveryWindow(): FulfillmentOptionLocalDeliveryDeliveryWindowInterface|null;

    /**
     * Expected delivery time window
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionLocalDeliveryDeliveryWindowInterface|null $deliveryWindow
     * @return self
     */
    public function setDeliveryWindow(
        FulfillmentOptionLocalDeliveryDeliveryWindowInterface|null $deliveryWindow,
    ): self;

    /**
     * Geographic service area for local delivery
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionLocalDeliveryServiceAreaInterface|null
     */
    public function getServiceArea(): FulfillmentOptionLocalDeliveryServiceAreaInterface|null;

    /**
     * Geographic service area for local delivery
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionLocalDeliveryServiceAreaInterface|null $serviceArea
     * @return self
     */
    public function setServiceArea(FulfillmentOptionLocalDeliveryServiceAreaInterface|null $serviceArea): self;

    /**
     * Cost breakdown for this fulfillment option
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[]
     */
    public function getTotals(): array;

    /**
     * Cost breakdown for this fulfillment option
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[] $totals
     * @return self
     */
    public function setTotals(array $totals): self;
}
