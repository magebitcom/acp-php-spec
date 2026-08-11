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
 * Request payload that partially upserts products into a feed. Products omitted from the request remain unchanged.
 */
interface UpsertProductsRequestInterface
{
    public const KEY_PRODUCTS = 'products';

    /**
     * Subset of products to create or update within the feed, matched by Product.id.
     *
     * @return \Magebit\AcpSpec\Api\Feed\ProductInterface[]
     */
    public function getProducts(): array;

    /**
     * Subset of products to create or update within the feed, matched by Product.id.
     *
     * @param \Magebit\AcpSpec\Api\Feed\ProductInterface[] $products
     * @return self
     */
    public function setProducts(array $products): self;
}
