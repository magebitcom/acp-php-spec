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
 * Buyer's marketing consent decision for a specific channel submitted at checkout completion
 */
interface MarketingConsentInterface
{
    public const KEY_CHANNEL = 'channel';
    public const KEY_OPTED_IN = 'opted_in';

    /**
     * Channel matching the consent option channel.
     *
     * @return string
     */
    public function getChannel(): string;

    /**
     * Channel matching the consent option channel.
     *
     * @param string $channel
     * @return self
     */
    public function setChannel(string $channel): self;

    /**
     * Whether the buyer consented to receive marketing via this channel.
     *
     * @return bool
     */
    public function getOptedIn(): bool;

    /**
     * Whether the buyer consented to receive marketing via this channel.
     *
     * @param bool $optedIn
     * @return self
     */
    public function setOptedIn(bool $optedIn): self;
}
