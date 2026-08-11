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
 * Reference unit used when normalizing a unit price for display.
 */
interface ReferenceMeasureInterface
{
    public const KEY_VALUE = 'value';
    public const KEY_UNIT = 'unit';

    /**
     * Reference quantity used to normalize the unit price.
     *
     * @return int
     */
    public function getValue(): int;

    /**
     * Reference quantity used to normalize the unit price.
     *
     * @param int $value
     * @return self
     */
    public function setValue(int $value): self;

    /**
     * Reference unit label, such as ml, g, or oz.
     *
     * @return string
     */
    public function getUnit(): string;

    /**
     * Reference unit label, such as ml, g, or oz.
     *
     * @param string $unit
     * @return self
     */
    public function setUnit(string $unit): self;
}
