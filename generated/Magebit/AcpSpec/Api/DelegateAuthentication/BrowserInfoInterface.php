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
 * Browser-specific metadata required for 3DS2 fingerprinting.
 */
interface BrowserInfoInterface
{
    public const KEY_ACCEPT_HEADER = 'accept_header';
    public const KEY_IP_ADDRESS = 'ip_address';
    public const KEY_JAVASCRIPT_ENABLED = 'javascript_enabled';
    public const KEY_LANGUAGE = 'language';
    public const KEY_USER_AGENT = 'user_agent';
    public const KEY_COLOR_DEPTH = 'color_depth';
    public const KEY_JAVA_ENABLED = 'java_enabled';
    public const KEY_SCREEN_HEIGHT = 'screen_height';
    public const KEY_SCREEN_WIDTH = 'screen_width';
    public const KEY_TIMEZONE_OFFSET = 'timezone_offset';

    /**
     * HTTP Accept header from the browser
     *
     * @return string
     */
    public function getAcceptHeader(): string;

    /**
     * HTTP Accept header from the browser
     *
     * @param string $acceptHeader
     * @return self
     */
    public function setAcceptHeader(string $acceptHeader): self;

    /**
     * IP address of the browser
     *
     * @return string
     */
    public function getIpAddress(): string;

    /**
     * IP address of the browser
     *
     * @param string $ipAddress
     * @return self
     */
    public function setIpAddress(string $ipAddress): self;

    /**
     * Whether JavaScript is enabled
     *
     * @return bool
     */
    public function getJavascriptEnabled(): bool;

    /**
     * Whether JavaScript is enabled
     *
     * @param bool $javascriptEnabled
     * @return self
     */
    public function setJavascriptEnabled(bool $javascriptEnabled): self;

    /**
     * IETF BCP 47 language tag
     *
     * @return string
     */
    public function getLanguage(): string;

    /**
     * IETF BCP 47 language tag
     *
     * @param string $language
     * @return self
     */
    public function setLanguage(string $language): self;

    /**
     * Browser user agent string
     *
     * @return string
     */
    public function getUserAgent(): string;

    /**
     * Browser user agent string
     *
     * @param string $userAgent
     * @return self
     */
    public function setUserAgent(string $userAgent): self;

    /**
     * Screen color depth (required if javascript_enabled is true)
     *
     * @return int|null
     */
    public function getColorDepth(): int|null;

    /**
     * Screen color depth (required if javascript_enabled is true)
     *
     * @param int|null $colorDepth
     * @return self
     */
    public function setColorDepth(int|null $colorDepth): self;

    /**
     * Whether Java is enabled (required if javascript_enabled is true)
     *
     * @return bool|null
     */
    public function getJavaEnabled(): bool|null;

    /**
     * Whether Java is enabled (required if javascript_enabled is true)
     *
     * @param bool|null $javaEnabled
     * @return self
     */
    public function setJavaEnabled(bool|null $javaEnabled): self;

    /**
     * Screen height in pixels (required if javascript_enabled is true)
     *
     * @return int|null
     */
    public function getScreenHeight(): int|null;

    /**
     * Screen height in pixels (required if javascript_enabled is true)
     *
     * @param int|null $screenHeight
     * @return self
     */
    public function setScreenHeight(int|null $screenHeight): self;

    /**
     * Screen width in pixels (required if javascript_enabled is true)
     *
     * @return int|null
     */
    public function getScreenWidth(): int|null;

    /**
     * Screen width in pixels (required if javascript_enabled is true)
     *
     * @param int|null $screenWidth
     * @return self
     */
    public function setScreenWidth(int|null $screenWidth): self;

    /**
     * Timezone offset in minutes (required if javascript_enabled is true)
     *
     * @return int|null
     */
    public function getTimezoneOffset(): int|null;

    /**
     * Timezone offset in minutes (required if javascript_enabled is true)
     *
     * @param int|null $timezoneOffset
     * @return self
     */
    public function setTimezoneOffset(int|null $timezoneOffset): self;
}
