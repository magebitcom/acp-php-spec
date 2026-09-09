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
 * Digital delivery details. Applies to type: digital.
 */
interface FulfillmentDigitalDeliveryInterface
{
    public const KEY_ACCESS_URL = 'access_url';
    public const KEY_LICENSE_KEY = 'license_key';
    public const KEY_EXPIRES_AT = 'expires_at';
    public const CONSTRAINTS = ['access_url' => ['format' => 'uri'], 'expires_at' => ['format' => 'date-time']];

    /**
     * URL to access digital content (download link, streaming page, etc.)
     *
     * @return string|null
     */
    public function getAccessUrl(): string|null;

    /**
     * URL to access digital content (download link, streaming page, etc.)
     *
     * @param string|null $accessUrl
     * @return self
     */
    public function setAccessUrl(string|null $accessUrl): self;

    /**
     * License or activation key
     *
     * @return string|null
     */
    public function getLicenseKey(): string|null;

    /**
     * License or activation key
     *
     * @param string|null $licenseKey
     * @return self
     */
    public function setLicenseKey(string|null $licenseKey): self;

    /**
     * When access expires (RFC 3339 timestamp)
     *
     * @return string|null
     */
    public function getExpiresAt(): string|null;

    /**
     * When access expires (RFC 3339 timestamp)
     *
     * @param string|null $expiresAt
     * @return self
     */
    public function setExpiresAt(string|null $expiresAt): self;
}
