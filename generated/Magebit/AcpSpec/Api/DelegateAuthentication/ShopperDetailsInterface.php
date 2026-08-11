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
 * Information about the shopper performing the transaction.
 */
interface ShopperDetailsInterface
{
    public const KEY_NAME = 'name';
    public const KEY_EMAIL = 'email';
    public const KEY_PHONE_NUMBER = 'phone_number';
    public const KEY_ADDRESS = 'address';

    /**
     * Shopper name
     *
     * @return string|null
     */
    public function getName(): string|null;

    /**
     * Shopper name
     *
     * @param string|null $name
     * @return self
     */
    public function setName(string|null $name): self;

    /**
     * Shopper email
     *
     * @return string|null
     */
    public function getEmail(): string|null;

    /**
     * Shopper email
     *
     * @param string|null $email
     * @return self
     */
    public function setEmail(string|null $email): self;

    /**
     * Shopper phone number
     *
     * @return string|null
     */
    public function getPhoneNumber(): string|null;

    /**
     * Shopper phone number
     *
     * @param string|null $phoneNumber
     * @return self
     */
    public function setPhoneNumber(string|null $phoneNumber): self;

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\AddressInterface|null
     */
    public function getAddress(): AddressInterface|null;

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\AddressInterface|null $address
     * @return self
     */
    public function setAddress(AddressInterface|null $address): self;
}
