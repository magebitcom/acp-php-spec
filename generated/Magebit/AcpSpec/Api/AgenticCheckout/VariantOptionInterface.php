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
 * Represents a single variant option for a product (e.g., size, color, material)
 */
interface VariantOptionInterface
{
    public const KEY_NAME = 'name';
    public const KEY_VALUE = 'value';

    /**
     * Variant attribute name (e.g., 'Size', 'Color')
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Variant attribute name (e.g., 'Size', 'Color')
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;

    /**
     * Variant attribute value (e.g., 'Large', 'Blue')
     *
     * @return string
     */
    public function getValue(): string;

    /**
     * Variant attribute value (e.g., 'Large', 'Blue')
     *
     * @param string $value
     * @return self
     */
    public function setValue(string $value): self;
}
