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
 * Shipping fulfillment option with carrier, service level, and delivery estimates
 */
interface FulfillmentOptionShippingInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_ID = 'id';
    public const KEY_TITLE = 'title';
    public const KEY_DESCRIPTION = 'description';
    public const KEY_CARRIER = 'carrier';
    public const KEY_EARLIEST_DELIVERY_TIME = 'earliest_delivery_time';
    public const KEY_LATEST_DELIVERY_TIME = 'latest_delivery_time';
    public const KEY_TOTALS = 'totals';
    public const TYPE_SHIPPING = 'shipping';

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
     * Display title for this shipping option (e.g., 'Standard Shipping', 'Express')
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Display title for this shipping option (e.g., 'Standard Shipping', 'Express')
     *
     * @param string $title
     * @return self
     */
    public function setTitle(string $title): self;

    /**
     * Additional details about this shipping option
     *
     * @return string|null
     */
    public function getDescription(): string|null;

    /**
     * Additional details about this shipping option
     *
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self;

    /**
     * Shipping carrier name (e.g., 'USPS', 'FedEx')
     *
     * @return string|null
     */
    public function getCarrier(): string|null;

    /**
     * Shipping carrier name (e.g., 'USPS', 'FedEx')
     *
     * @param string|null $carrier
     * @return self
     */
    public function setCarrier(string|null $carrier): self;

    /**
     * RFC 3339 timestamp for earliest expected delivery
     *
     * @return string|null
     */
    public function getEarliestDeliveryTime(): string|null;

    /**
     * RFC 3339 timestamp for earliest expected delivery
     *
     * @param string|null $earliestDeliveryTime
     * @return self
     */
    public function setEarliestDeliveryTime(string|null $earliestDeliveryTime): self;

    /**
     * RFC 3339 timestamp for latest expected delivery
     *
     * @return string|null
     */
    public function getLatestDeliveryTime(): string|null;

    /**
     * RFC 3339 timestamp for latest expected delivery
     *
     * @param string|null $latestDeliveryTime
     * @return self
     */
    public function setLatestDeliveryTime(string|null $latestDeliveryTime): self;

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
