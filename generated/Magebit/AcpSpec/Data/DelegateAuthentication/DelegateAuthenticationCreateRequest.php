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

use Magebit\AcpSpec\Api\DelegateAuthentication\AmountInterface;
use Magebit\AcpSpec\Api\DelegateAuthentication\ChannelInterface;
use Magebit\AcpSpec\Api\DelegateAuthentication\DelegateAuthenticationCreateRequestAcquirerDetailsInterface;
use Magebit\AcpSpec\Api\DelegateAuthentication\DelegateAuthenticationCreateRequestInterface;
use Magebit\AcpSpec\Api\DelegateAuthentication\FlowPreferenceInterface;
use Magebit\AcpSpec\Api\DelegateAuthentication\PaymentMethodInterface;
use Magebit\AcpSpec\Api\DelegateAuthentication\ShopperDetailsInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Request body for creating an authentication session.
 */
class DelegateAuthenticationCreateRequest extends SpecObject implements DelegateAuthenticationCreateRequestInterface
{
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
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\DelegateAuthenticationCreateRequestAcquirerDetailsInterface|null
     */
    public function getAcquirerDetails(): DelegateAuthenticationCreateRequestAcquirerDetailsInterface|null
    {
        return $this->instanceOrNull(self::KEY_ACQUIRER_DETAILS, \Magebit\AcpSpec\Api\DelegateAuthentication\DelegateAuthenticationCreateRequestAcquirerDetailsInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\DelegateAuthenticationCreateRequestAcquirerDetailsInterface|null $acquirerDetails
     * @return self
     */
    public function setAcquirerDetails(
        DelegateAuthenticationCreateRequestAcquirerDetailsInterface|null $acquirerDetails,
    ): self {
        return $this->set(self::KEY_ACQUIRER_DETAILS, $acquirerDetails);
    }

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\PaymentMethodInterface
     */
    public function getPaymentMethod(): PaymentMethodInterface
    {
        return $this->requireInstance(self::KEY_PAYMENT_METHOD, \Magebit\AcpSpec\Api\DelegateAuthentication\PaymentMethodInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\PaymentMethodInterface $paymentMethod
     * @return self
     */
    public function setPaymentMethod(PaymentMethodInterface $paymentMethod): self
    {
        return $this->set(self::KEY_PAYMENT_METHOD, $paymentMethod);
    }

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\AmountInterface
     */
    public function getAmount(): AmountInterface
    {
        return $this->requireInstance(self::KEY_AMOUNT, \Magebit\AcpSpec\Api\DelegateAuthentication\AmountInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\AmountInterface $amount
     * @return self
     */
    public function setAmount(AmountInterface $amount): self
    {
        return $this->set(self::KEY_AMOUNT, $amount);
    }

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\ChannelInterface|null
     */
    public function getChannel(): ChannelInterface|null
    {
        return $this->instanceOrNull(self::KEY_CHANNEL, \Magebit\AcpSpec\Api\DelegateAuthentication\ChannelInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\ChannelInterface|null $channel
     * @return self
     */
    public function setChannel(ChannelInterface|null $channel): self
    {
        return $this->set(self::KEY_CHANNEL, $channel);
    }

    /**
     * @return string|null
     */
    public function getCheckoutSessionId(): string|null
    {
        return $this->stringOrNull(self::KEY_CHECKOUT_SESSION_ID);
    }

    /**
     * @param string|null $checkoutSessionId
     * @return self
     */
    public function setCheckoutSessionId(string|null $checkoutSessionId): self
    {
        return $this->set(self::KEY_CHECKOUT_SESSION_ID, $checkoutSessionId);
    }

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\FlowPreferenceInterface|null
     */
    public function getFlowPreference(): FlowPreferenceInterface|null
    {
        return $this->instanceOrNull(self::KEY_FLOW_PREFERENCE, \Magebit\AcpSpec\Api\DelegateAuthentication\FlowPreferenceInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\FlowPreferenceInterface|null $flowPreference
     * @return self
     */
    public function setFlowPreference(FlowPreferenceInterface|null $flowPreference): self
    {
        return $this->set(self::KEY_FLOW_PREFERENCE, $flowPreference);
    }

    /**
     * @return string|null
     */
    public function getChallengeNotificationUrl(): string|null
    {
        return $this->stringOrNull(self::KEY_CHALLENGE_NOTIFICATION_URL);
    }

    /**
     * @param string|null $challengeNotificationUrl
     * @return self
     */
    public function setChallengeNotificationUrl(string|null $challengeNotificationUrl): self
    {
        return $this->set(self::KEY_CHALLENGE_NOTIFICATION_URL, $challengeNotificationUrl);
    }

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\ShopperDetailsInterface|null
     */
    public function getShopperDetails(): ShopperDetailsInterface|null
    {
        return $this->instanceOrNull(self::KEY_SHOPPER_DETAILS, \Magebit\AcpSpec\Api\DelegateAuthentication\ShopperDetailsInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\ShopperDetailsInterface|null $shopperDetails
     * @return self
     */
    public function setShopperDetails(ShopperDetailsInterface|null $shopperDetails): self
    {
        return $this->set(self::KEY_SHOPPER_DETAILS, $shopperDetails);
    }
}
