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
 * Card payment method details including card number, expiration, and verification data
 */
interface PaymentMethodCardInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_CARD_NUMBER_TYPE = 'card_number_type';
    public const KEY_NUMBER = 'number';
    public const KEY_EXP_MONTH = 'exp_month';
    public const KEY_EXP_YEAR = 'exp_year';
    public const KEY_NAME = 'name';
    public const KEY_CVC = 'cvc';
    public const KEY_CRYPTOGRAM = 'cryptogram';
    public const KEY_ECI_VALUE = 'eci_value';
    public const KEY_CHECKS_PERFORMED = 'checks_performed';
    public const KEY_IIN = 'iin';
    public const KEY_DISPLAY_CARD_FUNDING_TYPE = 'display_card_funding_type';
    public const KEY_DISPLAY_WALLET_TYPE = 'display_wallet_type';
    public const KEY_DISPLAY_BRAND = 'display_brand';
    public const KEY_DISPLAY_LAST4 = 'display_last4';
    public const KEY_METADATA = 'metadata';
    public const KEY_VIRTUAL = 'virtual';
    public const TYPE_CARD = 'card';
    public const CARD_NUMBER_TYPE_FPAN = 'fpan';
    public const CARD_NUMBER_TYPE_NETWORK_TOKEN = 'network_token';
    public const DISPLAY_CARD_FUNDING_TYPE_CREDIT = 'credit';
    public const DISPLAY_CARD_FUNDING_TYPE_DEBIT = 'debit';
    public const DISPLAY_CARD_FUNDING_TYPE_PREPAID = 'prepaid';

    public const CONSTRAINTS = [
        'exp_month' => ['maxLength' => 2],
        'exp_year' => ['maxLength' => 4],
        'cvc' => ['maxLength' => 4],
        'eci_value' => ['maxLength' => 2],
        'iin' => ['maxLength' => 8],
        'display_last4' => ['minLength' => 4, 'maxLength' => 4, 'pattern' => '^[0-9]{4}$'],
    ];

    /**
     * Payment method type, always 'card'
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Payment method type, always 'card'
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Whether the number is a raw card number (fpan) or a network token
     *
     * @return string
     */
    public function getCardNumberType(): string;

    /**
     * Whether the number is a raw card number (fpan) or a network token
     *
     * @param string $cardNumberType
     * @return self
     */
    public function setCardNumberType(string $cardNumberType): self;

    /**
     * network token or fallback fpan value
     *
     * @return string
     */
    public function getNumber(): string;

    /**
     * network token or fallback fpan value
     *
     * @param string $number
     * @return self
     */
    public function setNumber(string $number): self;

    /**
     * Two-digit expiration month (01-12)
     *
     * @return string|null
     */
    public function getExpMonth(): string|null;

    /**
     * Two-digit expiration month (01-12)
     *
     * @param string|null $expMonth
     * @return self
     */
    public function setExpMonth(string|null $expMonth): self;

    /**
     * Four-digit expiration year (e.g., 2026)
     *
     * @return string|null
     */
    public function getExpYear(): string|null;

    /**
     * Four-digit expiration year (e.g., 2026)
     *
     * @param string|null $expYear
     * @return self
     */
    public function setExpYear(string|null $expYear): self;

    /**
     * Cardholder name as it appears on the card
     *
     * @return string|null
     */
    public function getName(): string|null;

    /**
     * Cardholder name as it appears on the card
     *
     * @param string|null $name
     * @return self
     */
    public function setName(string|null $name): self;

    /**
     * Card verification code (3 or 4 digits)
     *
     * @return string|null
     */
    public function getCvc(): string|null;

    /**
     * Card verification code (3 or 4 digits)
     *
     * @param string|null $cvc
     * @return self
     */
    public function setCvc(string|null $cvc): self;

    /**
     * Dynamic cryptogram for tokenized card transactions
     *
     * @return string|null
     */
    public function getCryptogram(): string|null;

    /**
     * Dynamic cryptogram for tokenized card transactions
     *
     * @param string|null $cryptogram
     * @return self
     */
    public function setCryptogram(string|null $cryptogram): self;

    /**
     * Electronic Commerce Indicator for 3DS authentication status
     *
     * @return string|null
     */
    public function getEciValue(): string|null;

    /**
     * Electronic Commerce Indicator for 3DS authentication status
     *
     * @param string|null $eciValue
     * @return self
     */
    public function setEciValue(string|null $eciValue): self;

    /**
     * List of verification checks performed on the card
     *
     * @return string[]|null
     */
    public function getChecksPerformed(): array|null;

    /**
     * List of verification checks performed on the card
     *
     * @param string[]|null $checksPerformed
     * @return self
     */
    public function setChecksPerformed(array|null $checksPerformed): self;

    /**
     * Issuer Identification Number (first 6 digits of card)
     *
     * @return string|null
     */
    public function getIin(): string|null;

    /**
     * Issuer Identification Number (first 6 digits of card)
     *
     * @param string|null $iin
     * @return self
     */
    public function setIin(string|null $iin): self;

    /**
     * Card funding type for display purposes
     *
     * @return string
     */
    public function getDisplayCardFundingType(): string;

    /**
     * Card funding type for display purposes
     *
     * @param string $displayCardFundingType
     * @return self
     */
    public function setDisplayCardFundingType(string $displayCardFundingType): self;

    /**
     * Digital wallet provider if card is from a wallet (e.g., Apple Pay, Google Pay)
     *
     * @return string|null
     */
    public function getDisplayWalletType(): string|null;

    /**
     * Digital wallet provider if card is from a wallet (e.g., Apple Pay, Google Pay)
     *
     * @param string|null $displayWalletType
     * @return self
     */
    public function setDisplayWalletType(string|null $displayWalletType): self;

    /**
     * Card brand for display purposes (e.g., visa, mastercard)
     *
     * @return string|null
     */
    public function getDisplayBrand(): string|null;

    /**
     * Card brand for display purposes (e.g., visa, mastercard)
     *
     * @param string|null $displayBrand
     * @return self
     */
    public function setDisplayBrand(string|null $displayBrand): self;

    /**
     * Last 4 digits of card number for display purposes
     *
     * @return string|null
     */
    public function getDisplayLast4(): string|null;

    /**
     * Last 4 digits of card number for display purposes
     *
     * @param string|null $displayLast4
     * @return self
     */
    public function setDisplayLast4(string|null $displayLast4): self;

    /**
     * Additional metadata about the payment method
     *
     * @return array<string, string>
     */
    public function getMetadata(): array;

    /**
     * Additional metadata about the payment method
     *
     * @param array<string, string> $metadata
     * @return self
     */
    public function setMetadata(array $metadata): self;

    /**
     * Whether this is a virtual card number
     *
     * @return bool|null
     */
    public function getVirtual(): bool|null;

    /**
     * Whether this is a virtual card number
     *
     * @param bool|null $virtual
     * @return self
     */
    public function setVirtual(bool|null $virtual): self;
}
