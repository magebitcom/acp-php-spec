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

use Magebit\AcpSpec\Api\DelegateAuthentication\AddressInterface;
use Magebit\AcpSpec\Api\DelegateAuthentication\ShopperDetailsInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Information about the shopper performing the transaction.
 */
class ShopperDetails extends SpecObject implements ShopperDetailsInterface
{
    /**
     * @return string|null
     */
    public function getName(): string|null
    {
        return $this->stringOrNull(self::KEY_NAME);
    }

    /**
     * @param string|null $name
     * @return self
     */
    public function setName(string|null $name): self
    {
        return $this->set(self::KEY_NAME, $name);
    }

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
    public function getPhoneNumber(): string|null
    {
        return $this->stringOrNull(self::KEY_PHONE_NUMBER);
    }

    /**
     * @param string|null $phoneNumber
     * @return self
     */
    public function setPhoneNumber(string|null $phoneNumber): self
    {
        return $this->set(self::KEY_PHONE_NUMBER, $phoneNumber);
    }

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\AddressInterface|null
     */
    public function getAddress(): AddressInterface|null
    {
        return $this->instanceOrNull(self::KEY_ADDRESS, \Magebit\AcpSpec\Api\DelegateAuthentication\AddressInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\AddressInterface|null $address
     * @return self
     */
    public function setAddress(AddressInterface|null $address): self
    {
        return $this->set(self::KEY_ADDRESS, $address);
    }
}
