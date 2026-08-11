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
 * Machine-readable identifier attached to a variant, such as a GTIN or UPC.
 */
interface BarcodeInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_VALUE = 'value';

    /**
     * Barcode scheme or identifier type, such as GTIN, UPC, or EAN.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Barcode scheme or identifier type, such as GTIN, UPC, or EAN.
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Raw barcode value as provided by the merchant.
     *
     * @return string
     */
    public function getValue(): string;

    /**
     * Raw barcode value as provided by the merchant.
     *
     * @param string $value
     * @return self
     */
    public function setValue(string $value): self;
}
