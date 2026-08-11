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
 * Optional affiliate attribution data for crediting third-party publishers. Write-only: not returned in responses. Forward compatibility: Servers SHOULD ignore unknown fields to support future extensions (per RFC §8.2).
 */
interface AffiliateAttributionInterface
{
    public const KEY_PROVIDER = 'provider';
    public const KEY_TOKEN = 'token';
    public const KEY_PUBLISHER_ID = 'publisher_id';
    public const KEY_CAMPAIGN_ID = 'campaign_id';
    public const KEY_CREATIVE_ID = 'creative_id';
    public const KEY_SUB_ID = 'sub_id';
    public const KEY_SOURCE = 'source';
    public const KEY_ISSUED_AT = 'issued_at';
    public const KEY_EXPIRES_AT = 'expires_at';
    public const KEY_METADATA = 'metadata';
    public const KEY_TOUCHPOINT = 'touchpoint';
    public const TOUCHPOINT_FIRST = 'first';
    public const TOUCHPOINT_LAST = 'last';

    /**
     * Identifier for the attribution provider / affiliate network namespace (e.g., 'impact.com').
     *
     * @return string
     */
    public function getProvider(): string;

    /**
     * Identifier for the attribution provider / affiliate network namespace (e.g., 'impact.com').
     *
     * @param string $provider
     * @return self
     */
    public function setProvider(string $provider): self;

    /**
     * Opaque provider-issued token for fraud-resistant validation. Treat as secret.
     *
     * @return string|null
     */
    public function getToken(): string|null;

    /**
     * Opaque provider-issued token for fraud-resistant validation. Treat as secret.
     *
     * @param string|null $token
     * @return self
     */
    public function setToken(string|null $token): self;

    /**
     * Provider-scoped affiliate/publisher identifier. Required if token is omitted.
     *
     * @return string|null
     */
    public function getPublisherId(): string|null;

    /**
     * Provider-scoped affiliate/publisher identifier. Required if token is omitted.
     *
     * @param string|null $publisherId
     * @return self
     */
    public function setPublisherId(string|null $publisherId): self;

    /**
     * Provider-scoped campaign identifier.
     *
     * @return string|null
     */
    public function getCampaignId(): string|null;

    /**
     * Provider-scoped campaign identifier.
     *
     * @param string|null $campaignId
     * @return self
     */
    public function setCampaignId(string|null $campaignId): self;

    /**
     * Provider-scoped creative identifier.
     *
     * @return string|null
     */
    public function getCreativeId(): string|null;

    /**
     * Provider-scoped creative identifier.
     *
     * @param string|null $creativeId
     * @return self
     */
    public function setCreativeId(string|null $creativeId): self;

    /**
     * Provider-scoped sub-tracking identifier.
     *
     * @return string|null
     */
    public function getSubId(): string|null;

    /**
     * Provider-scoped sub-tracking identifier.
     *
     * @param string|null $subId
     * @return self
     */
    public function setSubId(string|null $subId): self;

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionSourceInterface|null
     */
    public function getSource(): AffiliateAttributionSourceInterface|null;

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionSourceInterface|null $source
     * @return self
     */
    public function setSource(AffiliateAttributionSourceInterface|null $source): self;

    /**
     * RFC3339 timestamp when the attribution token was issued.
     *
     * @return string|null
     */
    public function getIssuedAt(): string|null;

    /**
     * RFC3339 timestamp when the attribution token was issued.
     *
     * @param string|null $issuedAt
     * @return self
     */
    public function setIssuedAt(string|null $issuedAt): self;

    /**
     * RFC3339 timestamp when the attribution token expires.
     *
     * @return string|null
     */
    public function getExpiresAt(): string|null;

    /**
     * RFC3339 timestamp when the attribution token expires.
     *
     * @param string|null $expiresAt
     * @return self
     */
    public function setExpiresAt(string|null $expiresAt): self;

    /**
     * @return array<string, string|float|bool>|null
     */
    public function getMetadata(): array|null;

    /**
     * @param array<string, string|float|bool>|null $metadata
     * @return self
     */
    public function setMetadata(array|null $metadata): self;

    /**
     * Attribution touchpoint type. Use 'first' when capturing at session creation, 'last' when capturing at completion. Enables multi-touch attribution models.
     *
     * @return string|null
     */
    public function getTouchpoint(): string|null;

    /**
     * Attribution touchpoint type. Use 'first' when capturing at session creation, 'last' when capturing at completion. Enables multi-touch attribution models.
     *
     * @param string|null $touchpoint
     * @return self
     */
    public function setTouchpoint(string|null $touchpoint): self;
}
