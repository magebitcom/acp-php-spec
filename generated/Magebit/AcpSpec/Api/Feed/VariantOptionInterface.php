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
 * One selected characteristic of a variant, such as size or color.
 */
interface VariantOptionInterface
{
    public const KEY_NAME = 'name';
    public const KEY_VALUE = 'value';

    /**
     * Display name of the option dimension, such as Color or Size.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Display name of the option dimension, such as Color or Size.
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;

    /**
     * Selected option value for this variant.
     *
     * @return string
     */
    public function getValue(): string;

    /**
     * Selected option value for this variant.
     *
     * @param string $value
     * @return self
     */
    public function setValue(string $value): self;
}
