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
 * Details about how items will be fulfilled (shipping, pickup, or delivery information)
 */
interface FulfillmentDetailsInterface
{
    public const KEY_NAME = 'name';
    public const KEY_PHONE_NUMBER = 'phone_number';
    public const KEY_EMAIL = 'email';
    public const KEY_ADDRESS = 'address';
    public const CONSTRAINTS = ['email' => ['format' => 'email']];

    /**
     * Full name for fulfillment contact
     *
     * @return string|null
     */
    public function getName(): string|null;

    /**
     * Full name for fulfillment contact
     *
     * @param string|null $name
     * @return self
     */
    public function setName(string|null $name): self;

    /**
     * Contact phone number. E.164 format recommended (e.g., +15551234567) for global interoperability and SMS/delivery carrier systems.
     *
     * @return string|null
     */
    public function getPhoneNumber(): string|null;

    /**
     * Contact phone number. E.164 format recommended (e.g., +15551234567) for global interoperability and SMS/delivery carrier systems.
     *
     * @param string|null $phoneNumber
     * @return self
     */
    public function setPhoneNumber(string|null $phoneNumber): self;

    /**
     * Contact email address
     *
     * @return string|null
     */
    public function getEmail(): string|null;

    /**
     * Contact email address
     *
     * @param string|null $email
     * @return self
     */
    public function setEmail(string|null $email): self;

    /**
     * Fulfillment address
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface|null
     */
    public function getAddress(): AddressInterface|null;

    /**
     * Fulfillment address
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface|null $address
     * @return self
     */
    public function setAddress(AddressInterface|null $address): self;
}
