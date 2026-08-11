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
 * Physical address for shipping, billing, or pickup locations
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
    public const KEY_COMPANY = 'company';

    /**
     * Recipient name for this address
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Recipient name for this address
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;

    /**
     * Primary street address line
     *
     * @return string
     */
    public function getLineOne(): string;

    /**
     * Primary street address line
     *
     * @param string $lineOne
     * @return self
     */
    public function setLineOne(string $lineOne): self;

    /**
     * Secondary address line (apartment, suite, etc.)
     *
     * @return string|null
     */
    public function getLineTwo(): string|null;

    /**
     * Secondary address line (apartment, suite, etc.)
     *
     * @param string|null $lineTwo
     * @return self
     */
    public function setLineTwo(string|null $lineTwo): self;

    /**
     * City name
     *
     * @return string
     */
    public function getCity(): string;

    /**
     * City name
     *
     * @param string $city
     * @return self
     */
    public function setCity(string $city): self;

    /**
     * State or province code
     *
     * @return string
     */
    public function getState(): string;

    /**
     * State or province code
     *
     * @param string $state
     * @return self
     */
    public function setState(string $state): self;

    /**
     * ISO 3166-1 alpha-2 country code
     *
     * @return string
     */
    public function getCountry(): string;

    /**
     * ISO 3166-1 alpha-2 country code
     *
     * @param string $country
     * @return self
     */
    public function setCountry(string $country): self;

    /**
     * Postal or ZIP code
     *
     * @return string
     */
    public function getPostalCode(): string;

    /**
     * Postal or ZIP code
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode(string $postalCode): self;

    /**
     * Postal or ZIP code
     *
     * @return string|null
     */
    public function getCompany(): string|null;

    /**
     * Postal or ZIP code
     *
     * @param string|null $company
     * @return self
     */
    public function setCompany(string|null $company): self;
}
