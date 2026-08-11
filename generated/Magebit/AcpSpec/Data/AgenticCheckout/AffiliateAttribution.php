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

use Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionSourceInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Optional affiliate attribution data for crediting third-party publishers. Write-only: not returned in responses. Forward compatibility: Servers SHOULD ignore unknown fields to support future extensions (per RFC §8.2).
 */
class AffiliateAttribution extends SpecObject implements AffiliateAttributionInterface
{
    /**
     * @return string
     */
    public function getProvider(): string
    {
        return $this->requireString(self::KEY_PROVIDER);
    }

    /**
     * @param string $provider
     * @return self
     */
    public function setProvider(string $provider): self
    {
        return $this->set(self::KEY_PROVIDER, $provider);
    }

    /**
     * @return string|null
     */
    public function getToken(): string|null
    {
        return $this->stringOrNull(self::KEY_TOKEN);
    }

    /**
     * @param string|null $token
     * @return self
     */
    public function setToken(string|null $token): self
    {
        return $this->set(self::KEY_TOKEN, $token);
    }

    /**
     * @return string|null
     */
    public function getPublisherId(): string|null
    {
        return $this->stringOrNull(self::KEY_PUBLISHER_ID);
    }

    /**
     * @param string|null $publisherId
     * @return self
     */
    public function setPublisherId(string|null $publisherId): self
    {
        return $this->set(self::KEY_PUBLISHER_ID, $publisherId);
    }

    /**
     * @return string|null
     */
    public function getCampaignId(): string|null
    {
        return $this->stringOrNull(self::KEY_CAMPAIGN_ID);
    }

    /**
     * @param string|null $campaignId
     * @return self
     */
    public function setCampaignId(string|null $campaignId): self
    {
        return $this->set(self::KEY_CAMPAIGN_ID, $campaignId);
    }

    /**
     * @return string|null
     */
    public function getCreativeId(): string|null
    {
        return $this->stringOrNull(self::KEY_CREATIVE_ID);
    }

    /**
     * @param string|null $creativeId
     * @return self
     */
    public function setCreativeId(string|null $creativeId): self
    {
        return $this->set(self::KEY_CREATIVE_ID, $creativeId);
    }

    /**
     * @return string|null
     */
    public function getSubId(): string|null
    {
        return $this->stringOrNull(self::KEY_SUB_ID);
    }

    /**
     * @param string|null $subId
     * @return self
     */
    public function setSubId(string|null $subId): self
    {
        return $this->set(self::KEY_SUB_ID, $subId);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionSourceInterface|null
     */
    public function getSource(): AffiliateAttributionSourceInterface|null
    {
        return $this->instanceOrNull(self::KEY_SOURCE, \Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionSourceInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionSourceInterface|null $source
     * @return self
     */
    public function setSource(AffiliateAttributionSourceInterface|null $source): self
    {
        return $this->set(self::KEY_SOURCE, $source);
    }

    /**
     * @return string|null
     */
    public function getIssuedAt(): string|null
    {
        return $this->stringOrNull(self::KEY_ISSUED_AT);
    }

    /**
     * @param string|null $issuedAt
     * @return self
     */
    public function setIssuedAt(string|null $issuedAt): self
    {
        return $this->set(self::KEY_ISSUED_AT, $issuedAt);
    }

    /**
     * @return string|null
     */
    public function getExpiresAt(): string|null
    {
        return $this->stringOrNull(self::KEY_EXPIRES_AT);
    }

    /**
     * @param string|null $expiresAt
     * @return self
     */
    public function setExpiresAt(string|null $expiresAt): self
    {
        return $this->set(self::KEY_EXPIRES_AT, $expiresAt);
    }

    /**
     * @return array<string, string|float|bool>|null
     */
    public function getMetadata(): array|null
    {
        return $this->arrayOrNull(self::KEY_METADATA);
    }

    /**
     * @param array<string, string|float|bool>|null $metadata
     * @return self
     */
    public function setMetadata(array|null $metadata): self
    {
        return $this->set(self::KEY_METADATA, $metadata);
    }

    /**
     * @return string|null
     */
    public function getTouchpoint(): string|null
    {
        return $this->stringOrNull(self::KEY_TOUCHPOINT);
    }

    /**
     * @param string|null $touchpoint
     * @return self
     */
    public function setTouchpoint(string|null $touchpoint): self
    {
        return $this->set(self::KEY_TOUCHPOINT, $touchpoint);
    }
}
