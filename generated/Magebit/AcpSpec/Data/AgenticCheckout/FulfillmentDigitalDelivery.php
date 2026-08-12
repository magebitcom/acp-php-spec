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

use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDigitalDeliveryInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Digital delivery details. Applies to type: digital.
 */
class FulfillmentDigitalDelivery extends SpecObject implements FulfillmentDigitalDeliveryInterface
{
    /**
     * @return string|null
     */
    public function getAccessUrl(): string|null
    {
        return $this->stringOrNull(self::KEY_ACCESS_URL);
    }

    /**
     * @param string|null $accessUrl
     * @return self
     */
    public function setAccessUrl(string|null $accessUrl): self
    {
        return $this->set(self::KEY_ACCESS_URL, $accessUrl);
    }

    /**
     * @return string|null
     */
    public function getLicenseKey(): string|null
    {
        return $this->stringOrNull(self::KEY_LICENSE_KEY);
    }

    /**
     * @param string|null $licenseKey
     * @return self
     */
    public function setLicenseKey(string|null $licenseKey): self
    {
        return $this->set(self::KEY_LICENSE_KEY, $licenseKey);
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
