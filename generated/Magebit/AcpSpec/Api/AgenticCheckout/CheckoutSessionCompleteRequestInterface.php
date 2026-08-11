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
 * Request to complete a checkout session and create an order
 */
interface CheckoutSessionCompleteRequestInterface
{
    public const KEY_BUYER = 'buyer';
    public const KEY_PAYMENT_DATA = 'payment_data';
    public const KEY_AUTHENTICATION_RESULT = 'authentication_result';
    public const KEY_AFFILIATE_ATTRIBUTION = 'affiliate_attribution';
    public const KEY_RISK_SIGNALS = 'risk_signals';
    public const KEY_MARKETING_CONSENTS = 'marketing_consents';
    public const KEY_ORDER_NOTES = 'order_notes';

    /**
     * Final buyer information
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface|null
     */
    public function getBuyer(): BuyerInterface|null;

    /**
     * Final buyer information
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface|null $buyer
     * @return self
     */
    public function setBuyer(BuyerInterface|null $buyer): self;

    /**
     * Payment method and details
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInterface
     */
    public function getPaymentData(): PaymentDataInterface;

    /**
     * Payment method and details
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInterface $paymentData
     * @return self
     */
    public function setPaymentData(PaymentDataInterface $paymentData): self;

    /**
     * Authentication result for 3DS flows
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationResultInterface|null
     */
    public function getAuthenticationResult(): AuthenticationResultInterface|null;

    /**
     * Authentication result for 3DS flows
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationResultInterface|null $authenticationResult
     * @return self
     */
    public function setAuthenticationResult(AuthenticationResultInterface|null $authenticationResult): self;

    /**
     * Affiliate attribution data for last-touch tracking
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionInterface|null
     */
    public function getAffiliateAttribution(): AffiliateAttributionInterface|null;

    /**
     * Affiliate attribution data for last-touch tracking
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionInterface|null $affiliateAttribution
     * @return self
     */
    public function setAffiliateAttribution(AffiliateAttributionInterface|null $affiliateAttribution): self;

    /**
     * Risk and fraud signals
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\RiskSignalsInterface|null
     */
    public function getRiskSignals(): RiskSignalsInterface|null;

    /**
     * Risk and fraud signals
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\RiskSignalsInterface|null $riskSignals
     * @return self
     */
    public function setRiskSignals(RiskSignalsInterface|null $riskSignals): self;

    /**
     * Buyer's marketing consent decisions. Agents SHOULD include an entry for each consent option surfaced to the buyer. Options not surfaced MUST be omitted — omission preserves existing subscription state. Sellers SHOULD ignore entries in marketing_consents that do not correspond to a channel in marketing_consent_options.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\MarketingConsentInterface[]|null
     */
    public function getMarketingConsents(): array|null;

    /**
     * Buyer's marketing consent decisions. Agents SHOULD include an entry for each consent option surfaced to the buyer. Options not surfaced MUST be omitted — omission preserves existing subscription state. Sellers SHOULD ignore entries in marketing_consents that do not correspond to a channel in marketing_consent_options.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\MarketingConsentInterface[]|null $marketingConsents
     * @return self
     */
    public function setMarketingConsents(array|null $marketingConsents): self;

    /**
     * Optional customer/order notes (delivery instructions, gift message).
     *
     * @return string|null
     */
    public function getOrderNotes(): string|null;

    /**
     * Optional customer/order notes (delivery instructions, gift message).
     *
     * @param string|null $orderNotes
     * @return self
     */
    public function setOrderNotes(string|null $orderNotes): self;
}
