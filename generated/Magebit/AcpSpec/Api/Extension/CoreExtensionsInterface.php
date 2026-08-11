<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\Extension;

/**
 * Registry of core ACP extensions.
 */
interface CoreExtensionsInterface
{
    public const KEY_DISCOUNT = 'discount';

    /**
     * @return \Magebit\AcpSpec\Api\Extension\ExtensionMetadataInterface|null
     */
    public function getDiscount(): ExtensionMetadataInterface|null;

    /**
     * @param \Magebit\AcpSpec\Api\Extension\ExtensionMetadataInterface|null $discount
     * @return self
     */
    public function setDiscount(ExtensionMetadataInterface|null $discount): self;
}
