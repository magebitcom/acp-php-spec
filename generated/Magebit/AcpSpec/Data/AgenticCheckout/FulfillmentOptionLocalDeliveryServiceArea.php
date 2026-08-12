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

use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionLocalDeliveryServiceAreaInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Geographic service area for local delivery
 */
class FulfillmentOptionLocalDeliveryServiceArea extends SpecObject implements FulfillmentOptionLocalDeliveryServiceAreaInterface
{
    /**
     * @return float|null
     */
    public function getRadiusMiles(): float|null
    {
        return $this->floatOrNull(self::KEY_RADIUS_MILES);
    }

    /**
     * @param float|null $radiusMiles
     * @return self
     */
    public function setRadiusMiles(float|null $radiusMiles): self
    {
        return $this->set(self::KEY_RADIUS_MILES, $radiusMiles);
    }

    /**
     * @return string|null
     */
    public function getCenterPostalCode(): string|null
    {
        return $this->stringOrNull(self::KEY_CENTER_POSTAL_CODE);
    }

    /**
     * @param string|null $centerPostalCode
     * @return self
     */
    public function setCenterPostalCode(string|null $centerPostalCode): self
    {
        return $this->set(self::KEY_CENTER_POSTAL_CODE, $centerPostalCode);
    }
}
