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
 * Seller capabilities advertised in the well-known discovery document. Contains feature declarations that are stable across sessions.
 */
interface DiscoveryCapabilitiesInterface
{
    public const KEY_SERVICES = 'services';
    public const KEY_EXTENSIONS = 'extensions';
    public const KEY_INTERVENTION_TYPES = 'intervention_types';
    public const KEY_SUPPORTED_CURRENCIES = 'supported_currencies';
    public const KEY_SUPPORTED_LOCALES = 'supported_locales';

    /**
     * Services available from this seller. Indicates which ACP operations are implemented. This enum is closed per API version; new values are introduced in new API versions. Agents MAY treat the set as exhaustive for a given version.
     *
     * @return string[]
     */
    public function getServices(): array;

    /**
     * Services available from this seller. Indicates which ACP operations are implemented. This enum is closed per API version; new values are introduced in new API versions. Agents MAY treat the set as exhaustive for a given version.
     *
     * @param string[] $services
     * @return self
     */
    public function setServices(array $services): self;

    /**
     * Extensions the seller supports. Whether a specific extension is active for a given session is determined during checkout session creation.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryExtensionInterface[]|null
     */
    public function getExtensions(): array|null;

    /**
     * Extensions the seller supports. Whether a specific extension is active for a given session is determined during checkout session creation.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryExtensionInterface[]|null $extensions
     * @return self
     */
    public function setExtensions(array|null $extensions): self;

    /**
     * Intervention types the seller supports. Actual availability for a specific session is negotiated via the capabilities object on POST /checkout_sessions. This enum is closed per API version; new values are introduced in new API versions. Agents MAY treat the set as exhaustive for a given version.
     *
     * @return string[]|null
     */
    public function getInterventionTypes(): array|null;

    /**
     * Intervention types the seller supports. Actual availability for a specific session is negotiated via the capabilities object on POST /checkout_sessions. This enum is closed per API version; new values are introduced in new API versions. Agents MAY treat the set as exhaustive for a given version.
     *
     * @param string[]|null $interventionTypes
     * @return self
     */
    public function setInterventionTypes(array|null $interventionTypes): self;

    /**
     * ISO 4217 currency codes supported by the seller.
     *
     * @return string[]|null
     */
    public function getSupportedCurrencies(): array|null;

    /**
     * ISO 4217 currency codes supported by the seller.
     *
     * @param string[]|null $supportedCurrencies
     * @return self
     */
    public function setSupportedCurrencies(array|null $supportedCurrencies): self;

    /**
     * BCP 47 locale tags supported by the seller for localized responses.
     *
     * @return string[]|null
     */
    public function getSupportedLocales(): array|null;

    /**
     * BCP 47 locale tags supported by the seller for localized responses.
     *
     * @param string[]|null $supportedLocales
     * @return self
     */
    public function setSupportedLocales(array|null $supportedLocales): self;
}
