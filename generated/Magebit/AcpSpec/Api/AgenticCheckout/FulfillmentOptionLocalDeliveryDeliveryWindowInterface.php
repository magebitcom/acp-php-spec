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
 * Expected delivery time window
 */
interface FulfillmentOptionLocalDeliveryDeliveryWindowInterface
{
    public const KEY_START = 'start';
    public const KEY_END = 'end';
    public const CONSTRAINTS = ['start' => ['format' => 'date-time'], 'end' => ['format' => 'date-time']];

    /**
     * RFC 3339 timestamp for delivery window start
     *
     * @return string
     */
    public function getStart(): string;

    /**
     * RFC 3339 timestamp for delivery window start
     *
     * @param string $start
     * @return self
     */
    public function setStart(string $start): self;

    /**
     * RFC 3339 timestamp for delivery window end
     *
     * @return string
     */
    public function getEnd(): string;

    /**
     * RFC 3339 timestamp for delivery window end
     *
     * @param string $end
     * @return self
     */
    public function setEnd(string $end): self;
}
