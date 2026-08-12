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

use Magebit\AcpSpec\Api\Feed\VariantOptionInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * One selected characteristic of a variant, such as size or color.
 */
class VariantOption extends SpecObject implements VariantOptionInterface
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->requireString(self::KEY_NAME);
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        return $this->set(self::KEY_NAME, $name);
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
