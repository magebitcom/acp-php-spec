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
 * Catalog product grouping one or more purchasable variants within a feed.
 */
interface ProductInterface
{
    public const KEY_ID = 'id';
    public const KEY_TITLE = 'title';
    public const KEY_DESCRIPTION = 'description';
    public const KEY_URL = 'url';
    public const KEY_MEDIA = 'media';
    public const KEY_VARIANTS = 'variants';
    public const CONSTRAINTS = ['url' => ['format' => 'uri']];

    /**
     * Stable global identifier for this product.
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Stable global identifier for this product.
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * Display title for the product.
     *
     * @return string|null
     */
    public function getTitle(): string|null;

    /**
     * Display title for the product.
     *
     * @param string|null $title
     * @return self
     */
    public function setTitle(string|null $title): self;

    /**
     * Structured description content for the product.
     *
     * @return \Magebit\AcpSpec\Api\Feed\DescriptionInterface|null
     */
    public function getDescription(): DescriptionInterface|null;

    /**
     * Structured description content for the product.
     *
     * @param \Magebit\AcpSpec\Api\Feed\DescriptionInterface|null $description
     * @return self
     */
    public function setDescription(DescriptionInterface|null $description): self;

    /**
     * Canonical URL for the product detail page.
     *
     * @return string|null
     */
    public function getUrl(): string|null;

    /**
     * Canonical URL for the product detail page.
     *
     * @param string|null $url
     * @return self
     */
    public function setUrl(string|null $url): self;

    /**
     * Media assets associated with the product.
     *
     * @return \Magebit\AcpSpec\Api\Feed\MediaInterface[]|null
     */
    public function getMedia(): array|null;

    /**
     * Media assets associated with the product.
     *
     * @param \Magebit\AcpSpec\Api\Feed\MediaInterface[]|null $media
     * @return self
     */
    public function setMedia(array|null $media): self;

    /**
     * Purchasable variants grouped under this product.
     *
     * @return \Magebit\AcpSpec\Api\Feed\VariantInterface[]
     */
    public function getVariants(): array;

    /**
     * Purchasable variants grouped under this product.
     *
     * @param \Magebit\AcpSpec\Api\Feed\VariantInterface[] $variants
     * @return self
     */
    public function setVariants(array $variants): self;
}
