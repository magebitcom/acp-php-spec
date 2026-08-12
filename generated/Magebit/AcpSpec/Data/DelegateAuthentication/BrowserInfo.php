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

use Magebit\AcpSpec\Api\DelegateAuthentication\BrowserInfoInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Browser-specific metadata required for 3DS2 fingerprinting.
 */
class BrowserInfo extends SpecObject implements BrowserInfoInterface
{
    /**
     * @return string
     */
    public function getAcceptHeader(): string
    {
        return $this->requireString(self::KEY_ACCEPT_HEADER);
    }

    /**
     * @param string $acceptHeader
     * @return self
     */
    public function setAcceptHeader(string $acceptHeader): self
    {
        return $this->set(self::KEY_ACCEPT_HEADER, $acceptHeader);
    }

    /**
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->requireString(self::KEY_IP_ADDRESS);
    }

    /**
     * @param string $ipAddress
     * @return self
     */
    public function setIpAddress(string $ipAddress): self
    {
        return $this->set(self::KEY_IP_ADDRESS, $ipAddress);
    }

    /**
     * @return bool
     */
    public function getJavascriptEnabled(): bool
    {
        return $this->requireBool(self::KEY_JAVASCRIPT_ENABLED);
    }

    /**
     * @param bool $javascriptEnabled
     * @return self
     */
    public function setJavascriptEnabled(bool $javascriptEnabled): self
    {
        return $this->set(self::KEY_JAVASCRIPT_ENABLED, $javascriptEnabled);
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->requireString(self::KEY_LANGUAGE);
    }

    /**
     * @param string $language
     * @return self
     */
    public function setLanguage(string $language): self
    {
        return $this->set(self::KEY_LANGUAGE, $language);
    }

    /**
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->requireString(self::KEY_USER_AGENT);
    }

    /**
     * @param string $userAgent
     * @return self
     */
    public function setUserAgent(string $userAgent): self
    {
        return $this->set(self::KEY_USER_AGENT, $userAgent);
    }

    /**
     * @return int|null
     */
    public function getColorDepth(): int|null
    {
        return $this->intOrNull(self::KEY_COLOR_DEPTH);
    }

    /**
     * @param int|null $colorDepth
     * @return self
     */
    public function setColorDepth(int|null $colorDepth): self
    {
        return $this->set(self::KEY_COLOR_DEPTH, $colorDepth);
    }

    /**
     * @return bool|null
     */
    public function getJavaEnabled(): bool|null
    {
        return $this->boolOrNull(self::KEY_JAVA_ENABLED);
    }

    /**
     * @param bool|null $javaEnabled
     * @return self
     */
    public function setJavaEnabled(bool|null $javaEnabled): self
    {
        return $this->set(self::KEY_JAVA_ENABLED, $javaEnabled);
    }

    /**
     * @return int|null
     */
    public function getScreenHeight(): int|null
    {
        return $this->intOrNull(self::KEY_SCREEN_HEIGHT);
    }

    /**
     * @param int|null $screenHeight
     * @return self
     */
    public function setScreenHeight(int|null $screenHeight): self
    {
        return $this->set(self::KEY_SCREEN_HEIGHT, $screenHeight);
    }

    /**
     * @return int|null
     */
    public function getScreenWidth(): int|null
    {
        return $this->intOrNull(self::KEY_SCREEN_WIDTH);
    }

    /**
     * @param int|null $screenWidth
     * @return self
     */
    public function setScreenWidth(int|null $screenWidth): self
    {
        return $this->set(self::KEY_SCREEN_WIDTH, $screenWidth);
    }

    /**
     * @return int|null
     */
    public function getTimezoneOffset(): int|null
    {
        return $this->intOrNull(self::KEY_TIMEZONE_OFFSET);
    }

    /**
     * @param int|null $timezoneOffset
     * @return self
     */
    public function setTimezoneOffset(int|null $timezoneOffset): self
    {
        return $this->set(self::KEY_TIMEZONE_OFFSET, $timezoneOffset);
    }
}
