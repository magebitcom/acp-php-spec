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
 * Request body for completing authentication after action.
 */
interface DelegateAuthenticationAuthenticateRequestInterface
{
    public const KEY_FINGERPRINT_COMPLETION = 'fingerprint_completion';
    public const KEY_CHANNEL = 'channel';
    public const KEY_CHECKOUT_SESSION_ID = 'checkout_session_id';
    public const KEY_CHALLENGE_NOTIFICATION_URL = 'challenge_notification_url';
    public const KEY_SHOPPER_DETAILS = 'shopper_details';
    public const FINGERPRINT_COMPLETION_Y = 'Y';
    public const FINGERPRINT_COMPLETION_N = 'N';
    public const FINGERPRINT_COMPLETION_U = 'U';

    /**
     * Result of the 3DS Method fingerprint: Y = Completed successfully, N = Timeout/not completed, U = Unavailable/not performed
     *
     * @return string
     */
    public function getFingerprintCompletion(): string;

    /**
     * Result of the 3DS Method fingerprint: Y = Completed successfully, N = Timeout/not completed, U = Unavailable/not performed
     *
     * @param string $fingerprintCompletion
     * @return self
     */
    public function setFingerprintCompletion(string $fingerprintCompletion): self;

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
