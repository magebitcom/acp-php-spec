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

use Magebit\AcpSpec\Api\AgenticCheckout\PaymentMethodObjectInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Payment method with additional constraints (e.g., card brands, PSP routing)
 */
class PaymentMethodObject extends SpecObject implements PaymentMethodObjectInterface
{
    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->requireString(self::KEY_METHOD);
    }

    /**
     * @param string $method
     * @return self
     */
    public function setMethod(string $method): self
    {
        return $this->set(self::KEY_METHOD, $method);
    }

    /**
     * @return string[]|null
     */
    public function getBrands(): array|null
    {
        return $this->arrayOrNull(self::KEY_BRANDS);
    }

    /**
     * @param string[]|null $brands
     * @return self
     */
    public function setBrands(array|null $brands): self
    {
        return $this->set(self::KEY_BRANDS, $brands);
    }

    /**
     * @return string[]|null
     */
    public function getFundingTypes(): array|null
    {
        return $this->arrayOrNull(self::KEY_FUNDING_TYPES);
    }

    /**
     * @param string[]|null $fundingTypes
     * @return self
     */
    public function setFundingTypes(array|null $fundingTypes): self
    {
        return $this->set(self::KEY_FUNDING_TYPES, $fundingTypes);
    }

    /**
     * @return string[]|null
     */
    public function getProviders(): array|null
    {
        return $this->arrayOrNull(self::KEY_PROVIDERS);
    }

    /**
     * @param string[]|null $providers
     * @return self
     */
    public function setProviders(array|null $providers): self
    {
        return $this->set(self::KEY_PROVIDERS, $providers);
    }
}
