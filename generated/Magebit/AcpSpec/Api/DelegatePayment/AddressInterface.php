<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\DelegatePayment;

/**
 * Physical address for billing or shipping purposes
 */
interface AddressInterface
{
    public const KEY_NAME = 'name';
    public const KEY_LINE_ONE = 'line_one';
    public const KEY_LINE_TWO = 'line_two';
    public const KEY_CITY = 'city';
    public const KEY_STATE = 'state';
    public const KEY_COUNTRY = 'country';
    public const KEY_POSTAL_CODE = 'postal_code';

    /**
     * Full name of the person at this address
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Full name of the person at this address
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;

    /**
     * Street address line 1 (e.g., street and number)
     *
     * @return string
     */
    public function getLineOne(): string;

    /**
     * Street address line 1 (e.g., street and number)
     *
     * @param string $lineOne
     * @return self
     */
    public function setLineOne(string $lineOne): self;

    /**
     * Street address line 2 (e.g., apartment, suite, unit)
     *
     * @return string|null
     */
    public function getLineTwo(): string|null;

    /**
     * Street address line 2 (e.g., apartment, suite, unit)
     *
     * @param string|null $lineTwo
     * @return self
     */
    public function setLineTwo(string|null $lineTwo): self;

    /**
     * City or locality
     *
     * @return string
     */
    public function getCity(): string;

    /**
     * City or locality
     *
     * @param string $city
     * @return self
     */
    public function setCity(string $city): self;

    /**
     * State, province, or region
     *
     * @return string
     */
    public function getState(): string;

    /**
     * State, province, or region
     *
     * @param string $state
     * @return self
     */
    public function setState(string $state): self;

    /**
     * ISO-3166-1 alpha-2 country code
     *
     * @return string
     */
    public function getCountry(): string;

    /**
     * ISO-3166-1 alpha-2 country code
     *
     * @param string $country
     * @return self
     */
    public function setCountry(string $country): self;

    /**
     * ZIP or postal code
     *
     * @return string
     */
    public function getPostalCode(): string;

    /**
     * ZIP or postal code
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode(string $postalCode): self;
}
