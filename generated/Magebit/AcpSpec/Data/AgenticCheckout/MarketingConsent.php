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

use Magebit\AcpSpec\Api\AgenticCheckout\MarketingConsentInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Buyer's marketing consent decision for a specific channel submitted at checkout completion
 */
class MarketingConsent extends SpecObject implements MarketingConsentInterface
{
    /**
     * @return string
     */
    public function getChannel(): string
    {
        return $this->requireString(self::KEY_CHANNEL);
    }

    /**
     * @param string $channel
     * @return self
     */
    public function setChannel(string $channel): self
    {
        return $this->set(self::KEY_CHANNEL, $channel);
    }

    /**
     * @return bool
     */
    public function getOptedIn(): bool
    {
        return $this->requireBool(self::KEY_OPTED_IN);
    }

    /**
     * @param bool $optedIn
     * @return self
     */
    public function setOptedIn(bool $optedIn): self
    {
        return $this->set(self::KEY_OPTED_IN, $optedIn);
    }
}
