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

use Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataAcquirerDetailsInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Details about the acquirer used for this 3DS Authentication. This object MUST be present.
 */
class AuthenticationMetadataAcquirerDetails extends SpecObject implements AuthenticationMetadataAcquirerDetailsInterface
{
    /**
     * @return string
     */
    public function getAcquirerBin(): string
    {
        return $this->requireString(self::KEY_ACQUIRER_BIN);
    }

    /**
     * @param string $acquirerBin
     * @return self
     */
    public function setAcquirerBin(string $acquirerBin): self
    {
        return $this->set(self::KEY_ACQUIRER_BIN, $acquirerBin);
    }

    /**
     * @return string
     */
    public function getAcquirerCountry(): string
    {
        return $this->requireString(self::KEY_ACQUIRER_COUNTRY);
    }

    /**
     * @param string $acquirerCountry
     * @return self
     */
    public function setAcquirerCountry(string $acquirerCountry): self
    {
        return $this->set(self::KEY_ACQUIRER_COUNTRY, $acquirerCountry);
    }

    /**
     * @return string
     */
    public function getAcquirerMerchantId(): string
    {
        return $this->requireString(self::KEY_ACQUIRER_MERCHANT_ID);
    }

    /**
     * @param string $acquirerMerchantId
     * @return self
     */
    public function setAcquirerMerchantId(string $acquirerMerchantId): self
    {
        return $this->set(self::KEY_ACQUIRER_MERCHANT_ID, $acquirerMerchantId);
    }

    /**
     * @return string
     */
    public function getMerchantName(): string
    {
        return $this->requireString(self::KEY_MERCHANT_NAME);
    }

    /**
     * @param string $merchantName
     * @return self
     */
    public function setMerchantName(string $merchantName): self
    {
        return $this->set(self::KEY_MERCHANT_NAME, $merchantName);
    }

    /**
     * @return string|null
     */
    public function getRequestorId(): string|null
    {
        return $this->stringOrNull(self::KEY_REQUESTOR_ID);
    }

    /**
     * @param string|null $requestorId
     * @return self
     */
    public function setRequestorId(string|null $requestorId): self
    {
        return $this->set(self::KEY_REQUESTOR_ID, $requestorId);
    }
}
