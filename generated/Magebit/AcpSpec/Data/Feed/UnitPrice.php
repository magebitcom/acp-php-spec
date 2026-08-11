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
use Magebit\AcpSpec\Api\Feed\ReferenceMeasureInterface;
use Magebit\AcpSpec\Api\Feed\UnitPriceInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Normalized unit price for products sold by weight, volume, or measure.
 */
class UnitPrice extends SpecObject implements UnitPriceInterface
{
    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->requireInt(self::KEY_AMOUNT);
    }

    /**
     * @param int $amount
     * @return self
     */
    public function setAmount(int $amount): self
    {
        return $this->set(self::KEY_AMOUNT, $amount);
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->requireString(self::KEY_CURRENCY);
    }

    /**
     * @param string $currency
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        return $this->set(self::KEY_CURRENCY, $currency);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Feed\MeasureInterface
     */
    public function getMeasure(): MeasureInterface
    {
        return $this->requireInstance(self::KEY_MEASURE, \Magebit\AcpSpec\Api\Feed\MeasureInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\MeasureInterface $measure
     * @return self
     */
    public function setMeasure(MeasureInterface $measure): self
    {
        return $this->set(self::KEY_MEASURE, $measure);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Feed\ReferenceMeasureInterface
     */
    public function getReference(): ReferenceMeasureInterface
    {
        return $this->requireInstance(self::KEY_REFERENCE, \Magebit\AcpSpec\Api\Feed\ReferenceMeasureInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\ReferenceMeasureInterface $reference
     * @return self
     */
    public function setReference(ReferenceMeasureInterface $reference): self
    {
        return $this->set(self::KEY_REFERENCE, $reference);
    }
}
