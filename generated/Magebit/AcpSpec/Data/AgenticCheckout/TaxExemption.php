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

use Magebit\AcpSpec\Api\AgenticCheckout\TaxExemptionInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Tax exemption information including exemption type and applicable regions
 */
class TaxExemption extends SpecObject implements TaxExemptionInterface
{
    /**
     * @return string
     */
    public function getCertificateId(): string
    {
        return $this->requireString(self::KEY_CERTIFICATE_ID);
    }

    /**
     * @param string $certificateId
     * @return self
     */
    public function setCertificateId(string $certificateId): self
    {
        return $this->set(self::KEY_CERTIFICATE_ID, $certificateId);
    }

    /**
     * @return string
     */
    public function getCertificateType(): string
    {
        return $this->requireString(self::KEY_CERTIFICATE_TYPE);
    }

    /**
     * @param string $certificateType
     * @return self
     */
    public function setCertificateType(string $certificateType): self
    {
        return $this->set(self::KEY_CERTIFICATE_TYPE, $certificateType);
    }

    /**
     * @return string[]|null
     */
    public function getExemptRegions(): array|null
    {
        return $this->arrayOrNull(self::KEY_EXEMPT_REGIONS);
    }

    /**
     * @param string[]|null $exemptRegions
     * @return self
     */
    public function setExemptRegions(array|null $exemptRegions): self
    {
        return $this->set(self::KEY_EXEMPT_REGIONS, $exemptRegions);
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
}
