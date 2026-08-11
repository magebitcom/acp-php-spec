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
 * Risk and fraud detection signals for the checkout session
 */
interface RiskSignalsInterface
{
    public const KEY_IP_ADDRESS = 'ip_address';
    public const KEY_USER_AGENT = 'user_agent';
    public const KEY_ACCEPT_LANGUAGE = 'accept_language';
    public const KEY_SESSION_ID = 'session_id';
    public const KEY_DEVICE_FINGERPRINT = 'device_fingerprint';

    /**
     * IP address of the buyer
     *
     * @return string|null
     */
    public function getIpAddress(): string|null;

    /**
     * IP address of the buyer
     *
     * @param string|null $ipAddress
     * @return self
     */
    public function setIpAddress(string|null $ipAddress): self;

    /**
     * User agent string of the buyer's browser
     *
     * @return string|null
     */
    public function getUserAgent(): string|null;

    /**
     * User agent string of the buyer's browser
     *
     * @param string|null $userAgent
     * @return self
     */
    public function setUserAgent(string|null $userAgent): self;

    /**
     * Accept-Language header from the buyer's browser
     *
     * @return string|null
     */
    public function getAcceptLanguage(): string|null;

    /**
     * Accept-Language header from the buyer's browser
     *
     * @param string|null $acceptLanguage
     * @return self
     */
    public function setAcceptLanguage(string|null $acceptLanguage): self;

    /**
     * Session identifier for the buyer
     *
     * @return string|null
     */
    public function getSessionId(): string|null;

    /**
     * Session identifier for the buyer
     *
     * @param string|null $sessionId
     * @return self
     */
    public function setSessionId(string|null $sessionId): self;

    /**
     * Device fingerprint for fraud detection
     *
     * @return string|null
     */
    public function getDeviceFingerprint(): string|null;

    /**
     * Device fingerprint for fraud detection
     *
     * @param string|null $deviceFingerprint
     * @return self
     */
    public function setDeviceFingerprint(string|null $deviceFingerprint): self;
}
