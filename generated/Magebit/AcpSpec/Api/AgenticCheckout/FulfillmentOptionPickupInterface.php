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
 * In-store or curbside pickup fulfillment option with pickup location details
 */
interface FulfillmentOptionPickupInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_ID = 'id';
    public const KEY_TITLE = 'title';
    public const KEY_DESCRIPTION = 'description';
    public const KEY_LOCATION = 'location';
    public const KEY_PICKUP_TYPE = 'pickup_type';
    public const KEY_READY_BY = 'ready_by';
    public const KEY_PICKUP_BY = 'pickup_by';
    public const KEY_TOTALS = 'totals';
    public const TYPE_PICKUP = 'pickup';
    public const PICKUP_TYPE_IN_STORE = 'in_store';
    public const PICKUP_TYPE_CURBSIDE = 'curbside';
    public const PICKUP_TYPE_LOCKER = 'locker';

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
     * Display title for this pickup option
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Display title for this pickup option
     *
     * @param string $title
     * @return self
     */
    public function setTitle(string $title): self;

    /**
     * Additional details about this pickup option
     *
     * @return string|null
     */
    public function getDescription(): string|null;

    /**
     * Additional details about this pickup option
     *
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self;

    /**
     * Pickup location details
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionPickupLocationInterface
     */
    public function getLocation(): FulfillmentOptionPickupLocationInterface;

    /**
     * Pickup location details
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionPickupLocationInterface $location
     * @return self
     */
    public function setLocation(FulfillmentOptionPickupLocationInterface $location): self;

    /**
     * Type of pickup method
     *
     * @return string|null
     */
    public function getPickupType(): string|null;

    /**
     * Type of pickup method
     *
     * @param string|null $pickupType
     * @return self
     */
    public function setPickupType(string|null $pickupType): self;

    /**
     * RFC 3339 timestamp when order will be ready for pickup
     *
     * @return string|null
     */
    public function getReadyBy(): string|null;

    /**
     * RFC 3339 timestamp when order will be ready for pickup
     *
     * @param string|null $readyBy
     * @return self
     */
    public function setReadyBy(string|null $readyBy): self;

    /**
     * RFC 3339 timestamp by which order must be picked up
     *
     * @return string|null
     */
    public function getPickupBy(): string|null;

    /**
     * RFC 3339 timestamp by which order must be picked up
     *
     * @param string|null $pickupBy
     * @return self
     */
    public function setPickupBy(string|null $pickupBy): self;

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
