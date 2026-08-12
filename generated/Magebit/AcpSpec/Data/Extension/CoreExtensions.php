<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\Extension;

use Magebit\AcpSpec\Api\Extension\CoreExtensionsInterface;
use Magebit\AcpSpec\Api\Extension\ExtensionMetadataInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Registry of core ACP extensions.
 */
class CoreExtensions extends SpecObject implements CoreExtensionsInterface
{
    /**
     * @return \Magebit\AcpSpec\Api\Extension\ExtensionMetadataInterface|null
     */
    public function getDiscount(): ExtensionMetadataInterface|null
    {
        return $this->instanceOrNull(self::KEY_DISCOUNT, \Magebit\AcpSpec\Api\Extension\ExtensionMetadataInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Extension\ExtensionMetadataInterface|null $discount
     * @return self
     */
    public function setDiscount(ExtensionMetadataInterface|null $discount): self
    {
        return $this->set(self::KEY_DISCOUNT, $discount);
    }
}
