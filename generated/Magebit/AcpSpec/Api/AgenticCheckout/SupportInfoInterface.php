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
 * Customer support contact information including email, phone, and URL
 */
interface SupportInfoInterface
{
    public const KEY_EMAIL = 'email';
    public const KEY_PHONE = 'phone';
    public const KEY_HOURS = 'hours';
    public const KEY_HELP_CENTER_URL = 'help_center_url';
    public const CONSTRAINTS = ['email' => ['format' => 'email'], 'help_center_url' => ['format' => 'uri']];

    /**
     * Support contact email
     *
     * @return string|null
     */
    public function getEmail(): string|null;

    /**
     * Support contact email
     *
     * @param string|null $email
     * @return self
     */
    public function setEmail(string|null $email): self;

    /**
     * Support contact phone number
     *
     * @return string|null
     */
    public function getPhone(): string|null;

    /**
     * Support contact phone number
     *
     * @param string|null $phone
     * @return self
     */
    public function setPhone(string|null $phone): self;

    /**
     * Support hours of operation
     *
     * @return string|null
     */
    public function getHours(): string|null;

    /**
     * Support hours of operation
     *
     * @param string|null $hours
     * @return self
     */
    public function setHours(string|null $hours): self;

    /**
     * URL to merchant's help center
     *
     * @return string|null
     */
    public function getHelpCenterUrl(): string|null;

    /**
     * URL to merchant's help center
     *
     * @param string|null $helpCenterUrl
     * @return self
     */
    public function setHelpCenterUrl(string|null $helpCenterUrl): self;
}
