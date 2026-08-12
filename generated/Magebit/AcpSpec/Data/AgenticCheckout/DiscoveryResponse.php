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

use Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryCapabilitiesInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryProtocolInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryResponseInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Well-known discovery document served at /.well-known/acp.json. Describes the seller's capabilities. This is stable, deterministic information that does not vary per session. Session-specific capabilities (payment methods, payment handlers) are negotiated inline via the capabilities object on POST /checkout_sessions.
 */
class DiscoveryResponse extends SpecObject implements DiscoveryResponseInterface
{
    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryProtocolInterface
     */
    public function getProtocol(): DiscoveryProtocolInterface
    {
        return $this->requireInstance(self::KEY_PROTOCOL, \Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryProtocolInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryProtocolInterface $protocol
     * @return self
     */
    public function setProtocol(DiscoveryProtocolInterface $protocol): self
    {
        return $this->set(self::KEY_PROTOCOL, $protocol);
    }

    /**
     * @return string
     */
    public function getApiBaseUrl(): string
    {
        return $this->requireString(self::KEY_API_BASE_URL);
    }

    /**
     * @param string $apiBaseUrl
     * @return self
     */
    public function setApiBaseUrl(string $apiBaseUrl): self
    {
        return $this->set(self::KEY_API_BASE_URL, $apiBaseUrl);
    }

    /**
     * @return string[]
     */
    public function getTransports(): array
    {
        return $this->getArray(self::KEY_TRANSPORTS);
    }

    /**
     * @param string[] $transports
     * @return self
     */
    public function setTransports(array $transports): self
    {
        return $this->set(self::KEY_TRANSPORTS, $transports);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryCapabilitiesInterface
     */
    public function getCapabilities(): DiscoveryCapabilitiesInterface
    {
        return $this->requireInstance(self::KEY_CAPABILITIES, \Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryCapabilitiesInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryCapabilitiesInterface $capabilities
     * @return self
     */
    public function setCapabilities(DiscoveryCapabilitiesInterface $capabilities): self
    {
        return $this->set(self::KEY_CAPABILITIES, $capabilities);
    }
}
