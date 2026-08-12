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

use Magebit\AcpSpec\Api\DelegateAuthentication\ChannelInterface;
use Magebit\AcpSpec\Api\DelegateAuthentication\DelegateAuthenticationAuthenticateRequestInterface;
use Magebit\AcpSpec\Api\DelegateAuthentication\ShopperDetailsInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Request body for completing authentication after action.
 */
class DelegateAuthenticationAuthenticateRequest extends SpecObject implements DelegateAuthenticationAuthenticateRequestInterface
{
    /**
     * @return string
     */
    public function getFingerprintCompletion(): string
    {
        return $this->requireString(self::KEY_FINGERPRINT_COMPLETION);
    }

    /**
     * @param string $fingerprintCompletion
     * @return self
     */
    public function setFingerprintCompletion(string $fingerprintCompletion): self
    {
        return $this->set(self::KEY_FINGERPRINT_COMPLETION, $fingerprintCompletion);
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
