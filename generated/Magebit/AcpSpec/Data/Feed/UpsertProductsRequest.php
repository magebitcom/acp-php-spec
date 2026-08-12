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

use Magebit\AcpSpec\Api\Feed\ProductInterface;
use Magebit\AcpSpec\Api\Feed\UpsertProductsRequestInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Request payload that partially upserts products into a feed. Products omitted from the request remain unchanged.
 */
class UpsertProductsRequest extends SpecObject implements UpsertProductsRequestInterface
{
    /**
     * @return \Magebit\AcpSpec\Api\Feed\ProductInterface[]
     */
    public function getProducts(): array
    {
        return $this->instanceList(self::KEY_PRODUCTS, \Magebit\AcpSpec\Api\Feed\ProductInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\ProductInterface[] $products
     * @return self
     */
    public function setProducts(array $products): self
    {
        return $this->set(self::KEY_PRODUCTS, $products);
    }
}
