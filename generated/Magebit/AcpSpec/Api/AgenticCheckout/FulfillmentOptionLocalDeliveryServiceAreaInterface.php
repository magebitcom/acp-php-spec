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
 * Geographic service area for local delivery
 */
interface FulfillmentOptionLocalDeliveryServiceAreaInterface
{
    public const KEY_RADIUS_MILES = 'radius_miles';
    public const KEY_CENTER_POSTAL_CODE = 'center_postal_code';

    /**
     * Delivery radius in miles
     *
     * @return float|null
     */
    public function getRadiusMiles(): float|null;

    /**
     * Delivery radius in miles
     *
     * @param float|null $radiusMiles
     * @return self
     */
    public function setRadiusMiles(float|null $radiusMiles): self;

    /**
     * Center point postal code for delivery radius
     *
     * @return string|null
     */
    public function getCenterPostalCode(): string|null;

    /**
     * Center point postal code for delivery radius
     *
     * @param string|null $centerPostalCode
     * @return self
     */
    public function setCenterPostalCode(string|null $centerPostalCode): self;
}
