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
 * Estimated delivery date range for a fulfillment option
 */
interface EstimatedDeliveryInterface
{
    public const KEY_EARLIEST = 'earliest';
    public const KEY_LATEST = 'latest';
    public const CONSTRAINTS = ['earliest' => ['format' => 'date-time'], 'latest' => ['format' => 'date-time']];

    /**
     * RFC 3339 timestamp for earliest expected delivery
     *
     * @return string
     */
    public function getEarliest(): string;

    /**
     * RFC 3339 timestamp for earliest expected delivery
     *
     * @param string $earliest
     * @return self
     */
    public function setEarliest(string $earliest): self;

    /**
     * RFC 3339 timestamp for latest expected delivery
     *
     * @return string
     */
    public function getLatest(): string;

    /**
     * RFC 3339 timestamp for latest expected delivery
     *
     * @param string $latest
     * @return self
     */
    public function setLatest(string $latest): self;
}
