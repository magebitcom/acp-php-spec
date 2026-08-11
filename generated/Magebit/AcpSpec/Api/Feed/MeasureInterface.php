<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\Feed;

/**
 * Measured quantity paired with a unit for unit-price calculations.
 */
interface MeasureInterface
{
    public const KEY_VALUE = 'value';
    public const KEY_UNIT = 'unit';

    /**
     * Measured quantity for the package or item.
     *
     * @return float
     */
    public function getValue(): float;

    /**
     * Measured quantity for the package or item.
     *
     * @param float $value
     * @return self
     */
    public function setValue(float $value): self;

    /**
     * Unit label for the measured quantity, such as oz, ml, or kg.
     *
     * @return string
     */
    public function getUnit(): string;

    /**
     * Unit label for the measured quantity, such as oz, ml, or kg.
     *
     * @param string $unit
     * @return self
     */
    public function setUnit(string $unit): self;
}
