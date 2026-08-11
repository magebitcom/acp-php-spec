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

use Magebit\AcpSpec\Api\Feed\BarcodeInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Machine-readable identifier attached to a variant, such as a GTIN or UPC.
 */
class Barcode extends SpecObject implements BarcodeInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->requireString(self::KEY_TYPE);
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType(string $type): self
    {
        return $this->set(self::KEY_TYPE, $type);
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->requireString(self::KEY_VALUE);
    }

    /**
     * @param string $value
     * @return self
     */
    public function setValue(string $value): self
    {
        return $this->set(self::KEY_VALUE, $value);
    }
}
