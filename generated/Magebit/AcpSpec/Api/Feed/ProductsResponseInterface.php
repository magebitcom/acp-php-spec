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
 * Response envelope containing the current product set for a feed.
 */
interface ProductsResponseInterface
{
    public const KEY_PRODUCTS = 'products';

    /**
     * Full list of products currently associated with the feed.
     *
     * @return \Magebit\AcpSpec\Api\Feed\ProductInterface[]
     */
    public function getProducts(): array;

    /**
     * Full list of products currently associated with the feed.
     *
     * @param \Magebit\AcpSpec\Api\Feed\ProductInterface[] $products
     * @return self
     */
    public function setProducts(array $products): self;
}
