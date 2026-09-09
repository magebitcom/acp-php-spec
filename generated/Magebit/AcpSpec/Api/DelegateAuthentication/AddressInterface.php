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
 * The physical address details for the shopper.
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

    public const CONSTRAINTS = [
        'name' => ['maxLength' => 256],
        'line_one' => ['maxLength' => 60],
        'line_two' => ['maxLength' => 60],
        'city' => ['maxLength' => 60],
        'country' => ['minLength' => 2, 'maxLength' => 2],
        'postal_code' => ['maxLength' => 20],
    ];

    /**
     * Full name of the recipient
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Full name of the recipient
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;

    /**
     * First line of the address
     *
     * @return string
     */
    public function getLineOne(): string;

    /**
     * First line of the address
     *
     * @param string $lineOne
     * @return self
     */
    public function setLineOne(string $lineOne): self;

    /**
     * Second line of the address
     *
     * @return string|null
     */
    public function getLineTwo(): string|null;

    /**
     * Second line of the address
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
     * ISO-3166-2 where applicable
     *
     * @return string
     */
    public function getState(): string;

    /**
     * ISO-3166-2 where applicable
     *
     * @param string $state
     * @return self
     */
    public function setState(string $state): self;

    /**
     * ISO-3166-1 alpha-2
     *
     * @return string
     */
    public function getCountry(): string;

    /**
     * ISO-3166-1 alpha-2
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
}
