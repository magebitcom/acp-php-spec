<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\AgenticCheckout;

use Magebit\AcpSpec\Api\AgenticCheckout\RiskSignalsInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Risk and fraud detection signals for the checkout session
 */
class RiskSignals extends SpecObject implements RiskSignalsInterface
{
    /**
     * @return string|null
     */
    public function getIpAddress(): string|null
    {
        return $this->stringOrNull(self::KEY_IP_ADDRESS);
    }

    /**
     * @param string|null $ipAddress
     * @return self
     */
    public function setIpAddress(string|null $ipAddress): self
    {
        return $this->set(self::KEY_IP_ADDRESS, $ipAddress);
    }

    /**
     * @return string|null
     */
    public function getUserAgent(): string|null
    {
        return $this->stringOrNull(self::KEY_USER_AGENT);
    }

    /**
     * @param string|null $userAgent
     * @return self
     */
    public function setUserAgent(string|null $userAgent): self
    {
        return $this->set(self::KEY_USER_AGENT, $userAgent);
    }

    /**
     * @return string|null
     */
    public function getAcceptLanguage(): string|null
    {
        return $this->stringOrNull(self::KEY_ACCEPT_LANGUAGE);
    }

    /**
     * @param string|null $acceptLanguage
     * @return self
     */
    public function setAcceptLanguage(string|null $acceptLanguage): self
    {
        return $this->set(self::KEY_ACCEPT_LANGUAGE, $acceptLanguage);
    }

    /**
     * @return string|null
     */
    public function getSessionId(): string|null
    {
        return $this->stringOrNull(self::KEY_SESSION_ID);
    }

    /**
     * @param string|null $sessionId
     * @return self
     */
    public function setSessionId(string|null $sessionId): self
    {
        return $this->set(self::KEY_SESSION_ID, $sessionId);
    }

    /**
     * @return string|null
     */
    public function getDeviceFingerprint(): string|null
    {
        return $this->stringOrNull(self::KEY_DEVICE_FINGERPRINT);
    }

    /**
     * @param string|null $deviceFingerprint
     * @return self
     */
    public function setDeviceFingerprint(string|null $deviceFingerprint): self
    {
        return $this->set(self::KEY_DEVICE_FINGERPRINT, $deviceFingerprint);
    }
}
