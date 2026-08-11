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
 * Product weight with unit of measurement
 */
interface WeightInfoInterface
{
    public const KEY_VALUE = 'value';
    public const KEY_UNIT = 'unit';
    public const UNIT_G = 'g';
    public const UNIT_KG = 'kg';
    public const UNIT_OZ = 'oz';
    public const UNIT_LB = 'lb';

    /**
     * Numeric weight value
     *
     * @return float
     */
    public function getValue(): float;

    /**
     * Numeric weight value
     *
     * @param float $value
     * @return self
     */
    public function setValue(float $value): self;

    /**
     * Unit of measurement for weight
     *
     * @return string
     */
    public function getUnit(): string;

    /**
     * Unit of measurement for weight
     *
     * @param string $unit
     * @return self
     */
    public function setUnit(string $unit): self;
}
