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
 * Pickup location details
 */
interface FulfillmentOptionPickupLocationInterface
{
    public const KEY_NAME = 'name';
    public const KEY_ADDRESS = 'address';
    public const KEY_PHONE = 'phone';
    public const KEY_INSTRUCTIONS = 'instructions';

    /**
     * Location name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Location name
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;

    /**
     * Pickup address
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface
     */
    public function getAddress(): AddressInterface;

    /**
     * Pickup address
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface $address
     * @return self
     */
    public function setAddress(AddressInterface $address): self;

    /**
     * Location phone number
     *
     * @return string|null
     */
    public function getPhone(): string|null;

    /**
     * Location phone number
     *
     * @param string|null $phone
     * @return self
     */
    public function setPhone(string|null $phone): self;

    /**
     * Special pickup instructions
     *
     * @return string|null
     */
    public function getInstructions(): string|null;

    /**
     * Special pickup instructions
     *
     * @param string|null $instructions
     * @return self
     */
    public function setInstructions(string|null $instructions): self;
}
