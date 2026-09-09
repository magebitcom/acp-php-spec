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
 * Normalized unit price for products sold by weight, volume, or measure.
 */
interface UnitPriceInterface
{
    public const KEY_AMOUNT = 'amount';
    public const KEY_CURRENCY = 'currency';
    public const KEY_MEASURE = 'measure';
    public const KEY_REFERENCE = 'reference';
    public const CONSTRAINTS = ['amount' => ['minimum' => 0], 'currency' => ['pattern' => '^[A-Z]{3}$']];

    /**
     * Normalized price amount expressed in ISO 4217 minor units.
     *
     * @return int
     */
    public function getAmount(): int;

    /**
     * Normalized price amount expressed in ISO 4217 minor units.
     *
     * @param int $amount
     * @return self
     */
    public function setAmount(int $amount): self;

    /**
     * Three-letter ISO 4217 currency identifier.
     *
     * @return string
     */
    public function getCurrency(): string;

    /**
     * Three-letter ISO 4217 currency identifier.
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency(string $currency): self;

    /**
     * Actual packaged measure associated with the sale item.
     *
     * @return \Magebit\AcpSpec\Api\Feed\MeasureInterface
     */
    public function getMeasure(): MeasureInterface;

    /**
     * Actual packaged measure associated with the sale item.
     *
     * @param \Magebit\AcpSpec\Api\Feed\MeasureInterface $measure
     * @return self
     */
    public function setMeasure(MeasureInterface $measure): self;

    /**
     * Reference measure used to display the normalized unit price.
     *
     * @return \Magebit\AcpSpec\Api\Feed\ReferenceMeasureInterface
     */
    public function getReference(): ReferenceMeasureInterface;

    /**
     * Reference measure used to display the normalized unit price.
     *
     * @param \Magebit\AcpSpec\Api\Feed\ReferenceMeasureInterface $reference
     * @return self
     */
    public function setReference(ReferenceMeasureInterface $reference): self;
}
