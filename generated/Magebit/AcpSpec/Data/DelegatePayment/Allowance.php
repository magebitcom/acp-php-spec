<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\DelegatePayment;

use Magebit\AcpSpec\Api\DelegatePayment\AllowanceInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Constraints on how the delegated payment method can be used (amount limit, expiration, merchant)
 */
class Allowance extends SpecObject implements AllowanceInterface
{
    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->requireString(self::KEY_REASON);
    }

    /**
     * @param string $reason
     * @return self
     */
    public function setReason(string $reason): self
    {
        return $this->set(self::KEY_REASON, $reason);
    }

    /**
     * @return int
     */
    public function getMaxAmount(): int
    {
        return $this->requireInt(self::KEY_MAX_AMOUNT);
    }

    /**
     * @param int $maxAmount
     * @return self
     */
    public function setMaxAmount(int $maxAmount): self
    {
        return $this->set(self::KEY_MAX_AMOUNT, $maxAmount);
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->requireString(self::KEY_CURRENCY);
    }

    /**
     * @param string $currency
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        return $this->set(self::KEY_CURRENCY, $currency);
    }

    /**
     * @return string
     */
    public function getCheckoutSessionId(): string
    {
        return $this->requireString(self::KEY_CHECKOUT_SESSION_ID);
    }

    /**
     * @param string $checkoutSessionId
     * @return self
     */
    public function setCheckoutSessionId(string $checkoutSessionId): self
    {
        return $this->set(self::KEY_CHECKOUT_SESSION_ID, $checkoutSessionId);
    }

    /**
     * @return string
     */
    public function getMerchantId(): string
    {
        return $this->requireString(self::KEY_MERCHANT_ID);
    }

    /**
     * @param string $merchantId
     * @return self
     */
    public function setMerchantId(string $merchantId): self
    {
        return $this->set(self::KEY_MERCHANT_ID, $merchantId);
    }

    /**
     * @return string
     */
    public function getExpiresAt(): string
    {
        return $this->requireString(self::KEY_EXPIRES_AT);
    }

    /**
     * @param string $expiresAt
     * @return self
     */
    public function setExpiresAt(string $expiresAt): self
    {
        return $this->set(self::KEY_EXPIRES_AT, $expiresAt);
    }
}
