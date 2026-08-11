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
 * Category assignment for a product or variant within a specific taxonomy.
 */
interface CategoryInterface
{
    public const KEY_VALUE = 'value';
    public const KEY_TAXONOMY = 'taxonomy';

    /**
     * Category label or hierarchical path, for example Mens > Sweaters > Crewnecks.
     *
     * @return string
     */
    public function getValue(): string;

    /**
     * Category label or hierarchical path, for example Mens > Sweaters > Crewnecks.
     *
     * @param string $value
     * @return self
     */
    public function setValue(string $value): self;

    /**
     * Names the taxonomy system used for the category value, such as google_product_category, shopify, or merchant.
     *
     * @return string|null
     */
    public function getTaxonomy(): string|null;

    /**
     * Names the taxonomy system used for the category value, such as google_product_category, shopify, or merchant.
     *
     * @param string|null $taxonomy
     * @return self
     */
    public function setTaxonomy(string|null $taxonomy): self;
}
