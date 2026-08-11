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

use Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationResultOutcomeDetailsInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Detailed authentication data. This field is required when the outcome is 'authenticated', 'informational', or 'attempt_acknowledged'.
 */
class AuthenticationResultOutcomeDetails extends SpecObject implements AuthenticationResultOutcomeDetailsInterface
{
    /**
     * @return string
     */
    public function getThreeDsCryptogram(): string
    {
        return $this->requireString(self::KEY_THREE_DS_CRYPTOGRAM);
    }

    /**
     * @param string $threeDsCryptogram
     * @return self
     */
    public function setThreeDsCryptogram(string $threeDsCryptogram): self
    {
        return $this->set(self::KEY_THREE_DS_CRYPTOGRAM, $threeDsCryptogram);
    }

    /**
     * @return string
     */
    public function getElectronicCommerceIndicator(): string
    {
        return $this->requireString(self::KEY_ELECTRONIC_COMMERCE_INDICATOR);
    }

    /**
     * @param string $electronicCommerceIndicator
     * @return self
     */
    public function setElectronicCommerceIndicator(string $electronicCommerceIndicator): self
    {
        return $this->set(self::KEY_ELECTRONIC_COMMERCE_INDICATOR, $electronicCommerceIndicator);
    }

    /**
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->requireString(self::KEY_TRANSACTION_ID);
    }

    /**
     * @param string $transactionId
     * @return self
     */
    public function setTransactionId(string $transactionId): self
    {
        return $this->set(self::KEY_TRANSACTION_ID, $transactionId);
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->requireString(self::KEY_VERSION);
    }

    /**
     * @param string $version
     * @return self
     */
    public function setVersion(string $version): self
    {
        return $this->set(self::KEY_VERSION, $version);
    }
}
