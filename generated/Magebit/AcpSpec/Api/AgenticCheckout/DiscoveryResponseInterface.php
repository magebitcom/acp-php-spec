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
 * Well-known discovery document served at /.well-known/acp.json. Describes the seller's capabilities. This is stable, deterministic information that does not vary per session. Session-specific capabilities (payment methods, payment handlers) are negotiated inline via the capabilities object on POST /checkout_sessions.
 */
interface DiscoveryResponseInterface
{
    public const KEY_PROTOCOL = 'protocol';
    public const KEY_API_BASE_URL = 'api_base_url';
    public const KEY_TRANSPORTS = 'transports';
    public const KEY_CAPABILITIES = 'capabilities';

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryProtocolInterface
     */
    public function getProtocol(): DiscoveryProtocolInterface;

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryProtocolInterface $protocol
     * @return self
     */
    public function setProtocol(DiscoveryProtocolInterface $protocol): self;

    /**
     * Base URL for the ACP REST API. Agents append resource paths to this URL (e.g., {api_base_url}/checkout_sessions).
     *
     * @return string
     */
    public function getApiBaseUrl(): string;

    /**
     * Base URL for the ACP REST API. Agents append resource paths to this URL (e.g., {api_base_url}/checkout_sessions).
     *
     * @param string $apiBaseUrl
     * @return self
     */
    public function setApiBaseUrl(string $apiBaseUrl): self;

    /**
     * Transport bindings supported by this seller. "rest" indicates the REST API at api_base_url. "mcp" indicates a Model Context Protocol server is available (see SEP #135). New values are introduced in new API versions; agents MAY treat this enum as exhaustive for a given version.
     *
     * @return string[]
     */
    public function getTransports(): array;

    /**
     * Transport bindings supported by this seller. "rest" indicates the REST API at api_base_url. "mcp" indicates a Model Context Protocol server is available (see SEP #135). New values are introduced in new API versions; agents MAY treat this enum as exhaustive for a given version.
     *
     * @param string[] $transports
     * @return self
     */
    public function setTransports(array $transports): self;

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryCapabilitiesInterface
     */
    public function getCapabilities(): DiscoveryCapabilitiesInterface;

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryCapabilitiesInterface $capabilities
     * @return self
     */
    public function setCapabilities(DiscoveryCapabilitiesInterface $capabilities): self;
}
