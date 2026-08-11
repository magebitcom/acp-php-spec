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
 * Payment method with additional constraints (e.g., card brands, PSP routing)
 */
interface PaymentMethodObjectInterface
{
    public const KEY_METHOD = 'method';
    public const KEY_BRANDS = 'brands';
    public const KEY_FUNDING_TYPES = 'funding_types';
    public const KEY_PROVIDERS = 'providers';

    /**
     * The payment method identifier
     *
     * @return string
     */
    public function getMethod(): string;

    /**
     * The payment method identifier
     *
     * @param string $method
     * @return self
     */
    public function setMethod(string $method): self;

    /**
     * Specific card brands/networks accepted
     *
     * @return string[]|null
     */
    public function getBrands(): array|null;

    /**
     * Specific card brands/networks accepted
     *
     * @param string[]|null $brands
     * @return self
     */
    public function setBrands(array|null $brands): self;

    /**
     * For card methods, funding types accepted
     *
     * @return string[]|null
     */
    public function getFundingTypes(): array|null;

    /**
     * For card methods, funding types accepted
     *
     * @param string[]|null $fundingTypes
     * @return self
     */
    public function setFundingTypes(array|null $fundingTypes): self;

    /**
     * Optional PSP routing information
     *
     * @return string[]|null
     */
    public function getProviders(): array|null;

    /**
     * Optional PSP routing information
     *
     * @param string[]|null $providers
     * @return self
     */
    public function setProviders(array|null $providers): self;
}
