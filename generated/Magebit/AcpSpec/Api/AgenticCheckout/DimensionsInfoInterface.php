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
 * Physical dimensions of a product with unit of measurement
 */
interface DimensionsInfoInterface
{
    public const KEY_LENGTH = 'length';
    public const KEY_WIDTH = 'width';
    public const KEY_HEIGHT = 'height';
    public const KEY_UNIT = 'unit';
    public const UNIT_CM = 'cm';
    public const UNIT_IN = 'in';

    /**
     * Length dimension
     *
     * @return float
     */
    public function getLength(): float;

    /**
     * Length dimension
     *
     * @param float $length
     * @return self
     */
    public function setLength(float $length): self;

    /**
     * Width dimension
     *
     * @return float
     */
    public function getWidth(): float;

    /**
     * Width dimension
     *
     * @param float $width
     * @return self
     */
    public function setWidth(float $width): self;

    /**
     * Height dimension
     *
     * @return float
     */
    public function getHeight(): float;

    /**
     * Height dimension
     *
     * @param float $height
     * @return self
     */
    public function setHeight(float $height): self;

    /**
     * Unit of measurement for dimensions
     *
     * @return string
     */
    public function getUnit(): string;

    /**
     * Unit of measurement for dimensions
     *
     * @param string $unit
     * @return self
     */
    public function setUnit(string $unit): self;
}
