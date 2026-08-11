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

use Magebit\AcpSpec\Api\DelegateAuthentication\PaymentMethodInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Payment instrument details used for authentication.
 */
class PaymentMethod extends SpecObject implements PaymentMethodInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->requireString(self::KEY_TYPE);
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType(string $type): self
    {
        return $this->set(self::KEY_TYPE, $type);
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->requireString(self::KEY_NUMBER);
    }

    /**
     * @param string $number
     * @return self
     */
    public function setNumber(string $number): self
    {
        return $this->set(self::KEY_NUMBER, $number);
    }

    /**
     * @return string
     */
    public function getExpMonth(): string
    {
        return $this->requireString(self::KEY_EXP_MONTH);
    }

    /**
     * @param string $expMonth
     * @return self
     */
    public function setExpMonth(string $expMonth): self
    {
        return $this->set(self::KEY_EXP_MONTH, $expMonth);
    }

    /**
     * @return string
     */
    public function getExpYear(): string
    {
        return $this->requireString(self::KEY_EXP_YEAR);
    }

    /**
     * @param string $expYear
     * @return self
     */
    public function setExpYear(string $expYear): self
    {
        return $this->set(self::KEY_EXP_YEAR, $expYear);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->requireString(self::KEY_NAME);
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        return $this->set(self::KEY_NAME, $name);
    }
}
