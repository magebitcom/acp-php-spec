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

use Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionPickupLocationInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Pickup location details
 */
class FulfillmentOptionPickupLocation extends SpecObject implements FulfillmentOptionPickupLocationInterface
{
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

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface
     */
    public function getAddress(): AddressInterface
    {
        return $this->requireInstance(self::KEY_ADDRESS, \Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface $address
     * @return self
     */
    public function setAddress(AddressInterface $address): self
    {
        return $this->set(self::KEY_ADDRESS, $address);
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
    public function getInstructions(): string|null
    {
        return $this->stringOrNull(self::KEY_INSTRUCTIONS);
    }

    /**
     * @param string|null $instructions
     * @return self
     */
    public function setInstructions(string|null $instructions): self
    {
        return $this->set(self::KEY_INSTRUCTIONS, $instructions);
    }
}
