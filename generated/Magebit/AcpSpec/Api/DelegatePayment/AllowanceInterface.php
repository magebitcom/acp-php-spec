<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\DelegatePayment;

/**
 * Constraints on how the delegated payment method can be used (amount limit, expiration, merchant)
 */
interface AllowanceInterface
{
    public const KEY_REASON = 'reason';
    public const KEY_MAX_AMOUNT = 'max_amount';
    public const KEY_CURRENCY = 'currency';
    public const KEY_CHECKOUT_SESSION_ID = 'checkout_session_id';
    public const KEY_MERCHANT_ID = 'merchant_id';
    public const KEY_EXPIRES_AT = 'expires_at';
    public const REASON_ONE_TIME = 'one_time';

    public const CONSTRAINTS = [
        'currency' => ['pattern' => '^[a-z]{3}$'],
        'merchant_id' => ['maxLength' => 256],
        'expires_at' => ['format' => 'date-time'],
    ];

    /**
     * Usage pattern for this allowance; currently only one_time is supported
     *
     * @return string
     */
    public function getReason(): string;

    /**
     * Usage pattern for this allowance; currently only one_time is supported
     *
     * @param string $reason
     * @return self
     */
    public function setReason(string $reason): self;

    /**
     * Maximum charge amount in minor units (e.g. 100 cents for $1.00 or 100 for ¥100)
     *
     * @return int
     */
    public function getMaxAmount(): int;

    /**
     * Maximum charge amount in minor units (e.g. 100 cents for $1.00 or 100 for ¥100)
     *
     * @param int $maxAmount
     * @return self
     */
    public function setMaxAmount(int $maxAmount): self;

    /**
     * ISO-4217 three-letter lowercase currency code (e.g., usd)
     *
     * @return string
     */
    public function getCurrency(): string;

    /**
     * ISO-4217 three-letter lowercase currency code (e.g., usd)
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency(string $currency): self;

    /**
     * Identifier of the checkout session this payment is for
     *
     * @return string
     */
    public function getCheckoutSessionId(): string;

    /**
     * Identifier of the checkout session this payment is for
     *
     * @param string $checkoutSessionId
     * @return self
     */
    public function setCheckoutSessionId(string $checkoutSessionId): self;

    /**
     * Unique identifier for the merchant authorized to use this token
     *
     * @return string
     */
    public function getMerchantId(): string;

    /**
     * Unique identifier for the merchant authorized to use this token
     *
     * @param string $merchantId
     * @return self
     */
    public function setMerchantId(string $merchantId): self;

    /**
     * ISO 8601 timestamp when this allowance expires
     *
     * @return string
     */
    public function getExpiresAt(): string;

    /**
     * ISO 8601 timestamp when this allowance expires
     *
     * @param string $expiresAt
     * @return self
     */
    public function setExpiresAt(string $expiresAt): self;
}
