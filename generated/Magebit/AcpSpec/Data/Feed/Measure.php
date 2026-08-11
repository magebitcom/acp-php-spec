<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\Feed;

use Magebit\AcpSpec\Api\Feed\MeasureInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Measured quantity paired with a unit for unit-price calculations.
 */
class Measure extends SpecObject implements MeasureInterface
{
    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->requireFloat(self::KEY_VALUE);
    }

    /**
     * @param float $value
     * @return self
     */
    public function setValue(float $value): self
    {
        return $this->set(self::KEY_VALUE, $value);
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
