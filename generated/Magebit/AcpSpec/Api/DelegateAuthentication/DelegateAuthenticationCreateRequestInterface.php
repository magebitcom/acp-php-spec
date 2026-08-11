<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\DelegateAuthentication;

/**
 * Request body for creating an authentication session.
 */
interface DelegateAuthenticationCreateRequestInterface
{
    public const KEY_MERCHANT_ID = 'merchant_id';
    public const KEY_ACQUIRER_DETAILS = 'acquirer_details';
    public const KEY_PAYMENT_METHOD = 'payment_method';
    public const KEY_AMOUNT = 'amount';
    public const KEY_CHANNEL = 'channel';
    public const KEY_CHECKOUT_SESSION_ID = 'checkout_session_id';
    public const KEY_FLOW_PREFERENCE = 'flow_preference';
    public const KEY_CHALLENGE_NOTIFICATION_URL = 'challenge_notification_url';
    public const KEY_SHOPPER_DETAILS = 'shopper_details';

    /**
     * Merchant identifier
     *
     * @return string
     */
    public function getMerchantId(): string;

    /**
     * Merchant identifier
     *
     * @param string $merchantId
     * @return self
     */
    public function setMerchantId(string $merchantId): self;

    /**
     * Object containing acquirer data used for AReq construction. Recommended to ensure the authentication matches the final authorization.
     *
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\DelegateAuthenticationCreateRequestAcquirerDetailsInterface|null
     */
    public function getAcquirerDetails(): DelegateAuthenticationCreateRequestAcquirerDetailsInterface|null;

    /**
     * Object containing acquirer data used for AReq construction. Recommended to ensure the authentication matches the final authorization.
     *
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\DelegateAuthenticationCreateRequestAcquirerDetailsInterface|null $acquirerDetails
     * @return self
     */
    public function setAcquirerDetails(
        DelegateAuthenticationCreateRequestAcquirerDetailsInterface|null $acquirerDetails,
    ): self;

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\PaymentMethodInterface
     */
    public function getPaymentMethod(): PaymentMethodInterface;

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\PaymentMethodInterface $paymentMethod
     * @return self
     */
    public function setPaymentMethod(PaymentMethodInterface $paymentMethod): self;

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\AmountInterface
     */
    public function getAmount(): AmountInterface;

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\AmountInterface $amount
     * @return self
     */
    public function setAmount(AmountInterface $amount): self;

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\ChannelInterface|null
     */
    public function getChannel(): ChannelInterface|null;

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\ChannelInterface|null $channel
     * @return self
     */
    public function setChannel(ChannelInterface|null $channel): self;

    /**
     * Checkout session identifier
     *
     * @return string|null
     */
    public function getCheckoutSessionId(): string|null;

    /**
     * Checkout session identifier
     *
     * @param string|null $checkoutSessionId
     * @return self
     */
    public function setCheckoutSessionId(string|null $checkoutSessionId): self;

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\FlowPreferenceInterface|null
     */
    public function getFlowPreference(): FlowPreferenceInterface|null;

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\FlowPreferenceInterface|null $flowPreference
     * @return self
     */
    public function setFlowPreference(FlowPreferenceInterface|null $flowPreference): self;

    /**
     * URL for challenge result callback
     *
     * @return string|null
     */
    public function getChallengeNotificationUrl(): string|null;

    /**
     * URL for challenge result callback
     *
     * @param string|null $challengeNotificationUrl
     * @return self
     */
    public function setChallengeNotificationUrl(string|null $challengeNotificationUrl): self;

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\ShopperDetailsInterface|null
     */
    public function getShopperDetails(): ShopperDetailsInterface|null;

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\ShopperDetailsInterface|null $shopperDetails
     * @return self
     */
    public function setShopperDetails(ShopperDetailsInterface|null $shopperDetails): self;
}
