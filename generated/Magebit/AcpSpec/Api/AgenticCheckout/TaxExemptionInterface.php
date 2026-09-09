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
 * Tax exemption information including exemption type and applicable regions
 */
interface TaxExemptionInterface
{
    public const KEY_CERTIFICATE_ID = 'certificate_id';
    public const KEY_CERTIFICATE_TYPE = 'certificate_type';
    public const KEY_EXEMPT_REGIONS = 'exempt_regions';
    public const KEY_EXPIRES_AT = 'expires_at';
    public const CERTIFICATE_TYPE_RESALE = 'resale';
    public const CERTIFICATE_TYPE_EXEMPT_ORGANIZATION = 'exempt_organization';
    public const CERTIFICATE_TYPE_GOVERNMENT = 'government';
    public const CONSTRAINTS = ['expires_at' => ['format' => 'date-time']];

    /**
     * Unique identifier for the tax exemption certificate
     *
     * @return string
     */
    public function getCertificateId(): string;

    /**
     * Unique identifier for the tax exemption certificate
     *
     * @param string $certificateId
     * @return self
     */
    public function setCertificateId(string $certificateId): self;

    /**
     * Type of tax exemption certificate
     *
     * @return string
     */
    public function getCertificateType(): string;

    /**
     * Type of tax exemption certificate
     *
     * @param string $certificateType
     * @return self
     */
    public function setCertificateType(string $certificateType): self;

    /**
     * List of regions where the exemption applies (e.g., state codes)
     *
     * @return string[]|null
     */
    public function getExemptRegions(): array|null;

    /**
     * List of regions where the exemption applies (e.g., state codes)
     *
     * @param string[]|null $exemptRegions
     * @return self
     */
    public function setExemptRegions(array|null $exemptRegions): self;

    /**
     * RFC 3339 timestamp when the exemption certificate expires
     *
     * @return string|null
     */
    public function getExpiresAt(): string|null;

    /**
     * RFC 3339 timestamp when the exemption certificate expires
     *
     * @param string|null $expiresAt
     * @return self
     */
    public function setExpiresAt(string|null $expiresAt): self;
}
