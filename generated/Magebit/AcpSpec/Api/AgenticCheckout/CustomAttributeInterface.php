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
 * Custom key-value attribute for merchant-specific metadata on line items
 */
interface CustomAttributeInterface
{
    public const KEY_DISPLAY_NAME = 'display_name';
    public const KEY_VALUE = 'value';

    /**
     * Human-readable label for the attribute
     *
     * @return string
     */
    public function getDisplayName(): string;

    /**
     * Human-readable label for the attribute
     *
     * @param string $displayName
     * @return self
     */
    public function setDisplayName(string $displayName): self;

    /**
     * Attribute value
     *
     * @return string
     */
    public function getValue(): string;

    /**
     * Attribute value
     *
     * @param string $value
     * @return self
     */
    public function setValue(string $value): self;
}
