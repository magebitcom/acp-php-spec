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

use Magebit\AcpSpec\Api\Feed\ReferenceMeasureInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Reference unit used when normalizing a unit price for display.
 */
class ReferenceMeasure extends SpecObject implements ReferenceMeasureInterface
{
    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->requireInt(self::KEY_VALUE);
    }

    /**
     * @param int $value
     * @return self
     */
    public function setValue(int $value): self
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
