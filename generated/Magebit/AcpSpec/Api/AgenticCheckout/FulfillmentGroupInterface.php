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
 * Group of line items that share the same fulfillment method and destination
 */
interface FulfillmentGroupInterface
{
    public const KEY_ID = 'id';
    public const KEY_ITEM_IDS = 'item_ids';
    public const KEY_DESTINATION_TYPE = 'destination_type';
    public const KEY_FULFILLMENT_DETAILS = 'fulfillment_details';
    public const KEY_LOCATION_ID = 'location_id';
    public const KEY_INSTRUCTIONS = 'instructions';
    public const DESTINATION_TYPE_SHIPPING = 'shipping';
    public const DESTINATION_TYPE_PICKUP = 'pickup';
    public const DESTINATION_TYPE_LOCAL_DELIVERY = 'local_delivery';
    public const DESTINATION_TYPE_DIGITAL = 'digital';

    /**
     * Unique identifier for this fulfillment group
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Unique identifier for this fulfillment group
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * List of line item IDs in this fulfillment group
     *
     * @return string[]
     */
    public function getItemIds(): array;

    /**
     * List of line item IDs in this fulfillment group
     *
     * @param string[] $itemIds
     * @return self
     */
    public function setItemIds(array $itemIds): self;

    /**
     * Type of fulfillment for this group
     *
     * @return string
     */
    public function getDestinationType(): string;

    /**
     * Type of fulfillment for this group
     *
     * @param string $destinationType
     * @return self
     */
    public function setDestinationType(string $destinationType): self;

    /**
     * Fulfillment contact and address details
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDetailsInterface|null
     */
    public function getFulfillmentDetails(): FulfillmentDetailsInterface|null;

    /**
     * Fulfillment contact and address details
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDetailsInterface|null $fulfillmentDetails
     * @return self
     */
    public function setFulfillmentDetails(FulfillmentDetailsInterface|null $fulfillmentDetails): self;

    /**
     * Location identifier for pickup or local delivery
     *
     * @return string|null
     */
    public function getLocationId(): string|null;

    /**
     * Location identifier for pickup or local delivery
     *
     * @param string|null $locationId
     * @return self
     */
    public function setLocationId(string|null $locationId): self;

    /**
     * Special fulfillment instructions
     *
     * @return string|null
     */
    public function getInstructions(): string|null;

    /**
     * Special fulfillment instructions
     *
     * @param string|null $instructions
     * @return self
     */
    public function setInstructions(string|null $instructions): self;
}
