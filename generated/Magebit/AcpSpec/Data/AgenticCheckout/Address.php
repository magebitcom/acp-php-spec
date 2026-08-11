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
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Physical address for shipping, billing, or pickup locations
 */
class Address extends SpecObject implements AddressInterface
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
     * @return string
     */
    public function getLineOne(): string
    {
        return $this->requireString(self::KEY_LINE_ONE);
    }

    /**
     * @param string $lineOne
     * @return self
     */
    public function setLineOne(string $lineOne): self
    {
        return $this->set(self::KEY_LINE_ONE, $lineOne);
    }

    /**
     * @return string|null
     */
    public function getLineTwo(): string|null
    {
        return $this->stringOrNull(self::KEY_LINE_TWO);
    }

    /**
     * @param string|null $lineTwo
     * @return self
     */
    public function setLineTwo(string|null $lineTwo): self
    {
        return $this->set(self::KEY_LINE_TWO, $lineTwo);
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->requireString(self::KEY_CITY);
    }

    /**
     * @param string $city
     * @return self
     */
    public function setCity(string $city): self
    {
        return $this->set(self::KEY_CITY, $city);
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->requireString(self::KEY_STATE);
    }

    /**
     * @param string $state
     * @return self
     */
    public function setState(string $state): self
    {
        return $this->set(self::KEY_STATE, $state);
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->requireString(self::KEY_COUNTRY);
    }

    /**
     * @param string $country
     * @return self
     */
    public function setCountry(string $country): self
    {
        return $this->set(self::KEY_COUNTRY, $country);
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->requireString(self::KEY_POSTAL_CODE);
    }

    /**
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode(string $postalCode): self
    {
        return $this->set(self::KEY_POSTAL_CODE, $postalCode);
    }

    /**
     * @return string|null
     */
    public function getCompany(): string|null
    {
        return $this->stringOrNull(self::KEY_COMPANY);
    }

    /**
     * @param string|null $company
     * @return self
     */
    public function setCompany(string|null $company): self
    {
        return $this->set(self::KEY_COMPANY, $company);
    }
}
