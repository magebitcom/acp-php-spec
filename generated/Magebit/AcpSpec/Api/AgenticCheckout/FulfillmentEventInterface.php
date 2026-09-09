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
 * A point-in-time event in the fulfillment lifecycle.
 */
interface FulfillmentEventInterface
{
    public const KEY_ID = 'id';
    public const KEY_TYPE = 'type';
    public const KEY_OCCURRED_AT = 'occurred_at';
    public const KEY_DESCRIPTION = 'description';
    public const KEY_LOCATION = 'location';
    public const CONSTRAINTS = ['occurred_at' => ['format' => 'date-time']];

    /**
     * Event identifier
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Event identifier
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * Event type. Implementations MUST accept unrecognized values gracefully. Defined values: 'processing', 'shipped', 'in_transit', 'out_for_delivery', 'ready_for_pickup', 'delivered', 'failed_attempt', 'returned_to_sender', 'canceled', 'undeliverable'. 'out_for_delivery' and 'ready_for_pickup' are ACP extensions for richer agent experiences.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Event type. Implementations MUST accept unrecognized values gracefully. Defined values: 'processing', 'shipped', 'in_transit', 'out_for_delivery', 'ready_for_pickup', 'delivered', 'failed_attempt', 'returned_to_sender', 'canceled', 'undeliverable'. 'out_for_delivery' and 'ready_for_pickup' are ACP extensions for richer agent experiences.
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * RFC 3339 timestamp when this event occurred
     *
     * @return string
     */
    public function getOccurredAt(): string;

    /**
     * RFC 3339 timestamp when this event occurred
     *
     * @param string $occurredAt
     * @return self
     */
    public function setOccurredAt(string $occurredAt): self;

    /**
     * Human-readable description (e.g., 'Left at front door')
     *
     * @return string|null
     */
    public function getDescription(): string|null;

    /**
     * Human-readable description (e.g., 'Left at front door')
     *
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self;

    /**
     * Location where this event occurred (e.g., 'Memphis, TN')
     *
     * @return string|null
     */
    public function getLocation(): string|null;

    /**
     * Location where this event occurred (e.g., 'Memphis, TN')
     *
     * @param string|null $location
     * @return self
     */
    public function setLocation(string|null $location): self;
}
