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

use Magebit\AcpSpec\Api\AgenticCheckout\DimensionsInfoInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Physical dimensions of a product with unit of measurement
 */
class DimensionsInfo extends SpecObject implements DimensionsInfoInterface
{
    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->requireFloat(self::KEY_LENGTH);
    }

    /**
     * @param float $length
     * @return self
     */
    public function setLength(float $length): self
    {
        return $this->set(self::KEY_LENGTH, $length);
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->requireFloat(self::KEY_WIDTH);
    }

    /**
     * @param float $width
     * @return self
     */
    public function setWidth(float $width): self
    {
        return $this->set(self::KEY_WIDTH, $width);
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->requireFloat(self::KEY_HEIGHT);
    }

    /**
     * @param float $height
     * @return self
     */
    public function setHeight(float $height): self
    {
        return $this->set(self::KEY_HEIGHT, $height);
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->requireString(self::KEY_UNIT);
    }

    /**
     * @param string $unit
     * @return self
     */
    public function setUnit(string $unit): self
    {
        return $this->set(self::KEY_UNIT, $unit);
    }
}
