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

use Magebit\AcpSpec\Api\AgenticCheckout\SupportInfoInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Customer support contact information including email, phone, and URL
 */
class SupportInfo extends SpecObject implements SupportInfoInterface
{
    /**
     * @return string|null
     */
    public function getEmail(): string|null
    {
        return $this->stringOrNull(self::KEY_EMAIL);
    }

    /**
     * @param string|null $email
     * @return self
     */
    public function setEmail(string|null $email): self
    {
        return $this->set(self::KEY_EMAIL, $email);
    }

    /**
     * @return string|null
     */
    public function getPhone(): string|null
    {
        return $this->stringOrNull(self::KEY_PHONE);
    }

    /**
     * @param string|null $phone
     * @return self
     */
    public function setPhone(string|null $phone): self
    {
        return $this->set(self::KEY_PHONE, $phone);
    }

    /**
     * @return string|null
     */
    public function getHours(): string|null
    {
        return $this->stringOrNull(self::KEY_HOURS);
    }

    /**
     * @param string|null $hours
     * @return self
     */
    public function setHours(string|null $hours): self
    {
        return $this->set(self::KEY_HOURS, $hours);
    }

    /**
     * @return string|null
     */
    public function getHelpCenterUrl(): string|null
    {
        return $this->stringOrNull(self::KEY_HELP_CENTER_URL);
    }

    /**
     * @param string|null $helpCenterUrl
     * @return self
     */
    public function setHelpCenterUrl(string|null $helpCenterUrl): self
    {
        return $this->set(self::KEY_HELP_CENTER_URL, $helpCenterUrl);
    }
}
