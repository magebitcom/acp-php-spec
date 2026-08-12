<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\DelegateAuthentication;

use Magebit\AcpSpec\Api\DelegateAuthentication\AuthenticationResultInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * 3DS authentication result returned by the authentication provider
 */
class AuthenticationResult extends SpecObject implements AuthenticationResultInterface
{
    /**
     * @return string
     */
    public function getTransStatus(): string
    {
        return $this->requireString(self::KEY_TRANS_STATUS);
    }

    /**
     * @param string $transStatus
     * @return self
     */
    public function setTransStatus(string $transStatus): self
    {
        return $this->set(self::KEY_TRANS_STATUS, $transStatus);
    }

    /**
     * @return string|null
     */
    public function getElectronicCommerceIndicator(): string|null
    {
        return $this->stringOrNull(self::KEY_ELECTRONIC_COMMERCE_INDICATOR);
    }

    /**
     * @param string|null $electronicCommerceIndicator
     * @return self
     */
    public function setElectronicCommerceIndicator(string|null $electronicCommerceIndicator): self
    {
        return $this->set(self::KEY_ELECTRONIC_COMMERCE_INDICATOR, $electronicCommerceIndicator);
    }

    /**
     * @return string|null
     */
    public function getThreeDsCryptogram(): string|null
    {
        return $this->stringOrNull(self::KEY_THREE_DS_CRYPTOGRAM);
    }

    /**
     * @param string|null $threeDsCryptogram
     * @return self
     */
    public function setThreeDsCryptogram(string|null $threeDsCryptogram): self
    {
        return $this->set(self::KEY_THREE_DS_CRYPTOGRAM, $threeDsCryptogram);
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
    public function getThreeDsServerTransId(): string
    {
        return $this->requireString(self::KEY_THREE_DS_SERVER_TRANS_ID);
    }

    /**
     * @param string $threeDsServerTransId
     * @return self
     */
    public function setThreeDsServerTransId(string $threeDsServerTransId): self
    {
        return $this->set(self::KEY_THREE_DS_SERVER_TRANS_ID, $threeDsServerTransId);
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

    /**
     * @return string|null
     */
    public function getAuthenticationValue(): string|null
    {
        return $this->stringOrNull(self::KEY_AUTHENTICATION_VALUE);
    }

    /**
     * @param string|null $authenticationValue
     * @return self
     */
    public function setAuthenticationValue(string|null $authenticationValue): self
    {
        return $this->set(self::KEY_AUTHENTICATION_VALUE, $authenticationValue);
    }

    /**
     * @return string|null
     */
    public function getTransStatusReason(): string|null
    {
        return $this->stringOrNull(self::KEY_TRANS_STATUS_REASON);
    }

    /**
     * @param string|null $transStatusReason
     * @return self
     */
    public function setTransStatusReason(string|null $transStatusReason): self
    {
        return $this->set(self::KEY_TRANS_STATUS_REASON, $transStatusReason);
    }

    /**
     * @return string|null
     */
    public function getCardholderInfo(): string|null
    {
        return $this->stringOrNull(self::KEY_CARDHOLDER_INFO);
    }

    /**
     * @param string|null $cardholderInfo
     * @return self
     */
    public function setCardholderInfo(string|null $cardholderInfo): self
    {
        return $this->set(self::KEY_CARDHOLDER_INFO, $cardholderInfo);
    }
}
