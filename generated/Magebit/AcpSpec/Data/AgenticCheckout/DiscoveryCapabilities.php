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

use Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryCapabilitiesInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryExtensionInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Seller capabilities advertised in the well-known discovery document. Contains feature declarations that are stable across sessions.
 */
class DiscoveryCapabilities extends SpecObject implements DiscoveryCapabilitiesInterface
{
    /**
     * @return string[]
     */
    public function getServices(): array
    {
        return $this->getArray(self::KEY_SERVICES);
    }

    /**
     * @param string[] $services
     * @return self
     */
    public function setServices(array $services): self
    {
        return $this->set(self::KEY_SERVICES, $services);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryExtensionInterface[]|null
     */
    public function getExtensions(): array|null
    {
        return $this->instanceListOrNull(self::KEY_EXTENSIONS, \Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryExtensionInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryExtensionInterface[]|null $extensions
     * @return self
     */
    public function setExtensions(array|null $extensions): self
    {
        return $this->set(self::KEY_EXTENSIONS, $extensions);
    }

    /**
     * @return string[]|null
     */
    public function getInterventionTypes(): array|null
    {
        return $this->arrayOrNull(self::KEY_INTERVENTION_TYPES);
    }

    /**
     * @param string[]|null $interventionTypes
     * @return self
     */
    public function setInterventionTypes(array|null $interventionTypes): self
    {
        return $this->set(self::KEY_INTERVENTION_TYPES, $interventionTypes);
    }

    /**
     * @return string[]|null
     */
    public function getSupportedCurrencies(): array|null
    {
        return $this->arrayOrNull(self::KEY_SUPPORTED_CURRENCIES);
    }

    /**
     * @param string[]|null $supportedCurrencies
     * @return self
     */
    public function setSupportedCurrencies(array|null $supportedCurrencies): self
    {
        return $this->set(self::KEY_SUPPORTED_CURRENCIES, $supportedCurrencies);
    }

    /**
     * @return string[]|null
     */
    public function getSupportedLocales(): array|null
    {
        return $this->arrayOrNull(self::KEY_SUPPORTED_LOCALES);
    }

    /**
     * @param string[]|null $supportedLocales
     * @return self
     */
    public function setSupportedLocales(array|null $supportedLocales): self
    {
        return $this->set(self::KEY_SUPPORTED_LOCALES, $supportedLocales);
    }
}
