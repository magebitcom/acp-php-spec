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
 * Purchasable variant of a product within a feed.
 */
interface VariantInterface
{
    public const KEY_ID = 'id';
    public const KEY_TITLE = 'title';
    public const KEY_DESCRIPTION = 'description';
    public const KEY_URL = 'url';
    public const KEY_BARCODES = 'barcodes';
    public const KEY_PRICE = 'price';
    public const KEY_LIST_PRICE = 'list_price';
    public const KEY_UNIT_PRICE = 'unit_price';
    public const KEY_AVAILABILITY = 'availability';
    public const KEY_CATEGORIES = 'categories';
    public const KEY_CONDITION = 'condition';
    public const KEY_VARIANT_OPTIONS = 'variant_options';
    public const KEY_MEDIA = 'media';
    public const KEY_SELLER = 'seller';
    public const KEY_MARKETPLACE = 'marketplace';

    /**
     * Stable global identifier for this variant.
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Stable global identifier for this variant.
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * Display title for the variant.
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Display title for the variant.
     *
     * @param string $title
     * @return self
     */
    public function setTitle(string $title): self;

    /**
     * Structured description content for the variant.
     *
     * @return \Magebit\AcpSpec\Api\Feed\DescriptionInterface|null
     */
    public function getDescription(): DescriptionInterface|null;

    /**
     * Structured description content for the variant.
     *
     * @param \Magebit\AcpSpec\Api\Feed\DescriptionInterface|null $description
     * @return self
     */
    public function setDescription(DescriptionInterface|null $description): self;

    /**
     * Canonical URL for the variant detail page.
     *
     * @return string|null
     */
    public function getUrl(): string|null;

    /**
     * Canonical URL for the variant detail page.
     *
     * @param string|null $url
     * @return self
     */
    public function setUrl(string|null $url): self;

    /**
     * Machine-readable identifiers associated with this variant.
     *
     * @return \Magebit\AcpSpec\Api\Feed\BarcodeInterface[]|null
     */
    public function getBarcodes(): array|null;

    /**
     * Machine-readable identifiers associated with this variant.
     *
     * @param \Magebit\AcpSpec\Api\Feed\BarcodeInterface[]|null $barcodes
     * @return self
     */
    public function setBarcodes(array|null $barcodes): self;

    /**
     * Active selling price for the variant.
     *
     * @return \Magebit\AcpSpec\Api\Feed\PriceInterface|null
     */
    public function getPrice(): PriceInterface|null;

    /**
     * Active selling price for the variant.
     *
     * @param \Magebit\AcpSpec\Api\Feed\PriceInterface|null $price
     * @return self
     */
    public function setPrice(PriceInterface|null $price): self;

    /**
     * Reference or pre-discount price for the variant.
     *
     * @return \Magebit\AcpSpec\Api\Feed\PriceInterface|null
     */
    public function getListPrice(): PriceInterface|null;

    /**
     * Reference or pre-discount price for the variant.
     *
     * @param \Magebit\AcpSpec\Api\Feed\PriceInterface|null $listPrice
     * @return self
     */
    public function setListPrice(PriceInterface|null $listPrice): self;

    /**
     * Normalized unit price, when applicable.
     *
     * @return \Magebit\AcpSpec\Api\Feed\UnitPriceInterface|null
     */
    public function getUnitPrice(): UnitPriceInterface|null;

    /**
     * Normalized unit price, when applicable.
     *
     * @param \Magebit\AcpSpec\Api\Feed\UnitPriceInterface|null $unitPrice
     * @return self
     */
    public function setUnitPrice(UnitPriceInterface|null $unitPrice): self;

    /**
     * Purchasability and fulfillment state for the variant.
     *
     * @return \Magebit\AcpSpec\Api\Feed\AvailabilityInterface|null
     */
    public function getAvailability(): AvailabilityInterface|null;

    /**
     * Purchasability and fulfillment state for the variant.
     *
     * @param \Magebit\AcpSpec\Api\Feed\AvailabilityInterface|null $availability
     * @return self
     */
    public function setAvailability(AvailabilityInterface|null $availability): self;

    /**
     * Category assignments associated with this variant.
     *
     * @return \Magebit\AcpSpec\Api\Feed\CategoryInterface[]|null
     */
    public function getCategories(): array|null;

    /**
     * Category assignments associated with this variant.
     *
     * @param \Magebit\AcpSpec\Api\Feed\CategoryInterface[]|null $categories
     * @return self
     */
    public function setCategories(array|null $categories): self;

    /**
     * Extensible list of conditions applicable to this variant.
     *
     * @return string[]|null
     */
    public function getCondition(): array|null;

    /**
     * Extensible list of conditions applicable to this variant.
     *
     * @param string[]|null $condition
     * @return self
     */
    public function setCondition(array|null $condition): self;

    /**
     * Option selections that distinguish this variant, such as Color: Red or Size: Small.
     *
     * @return \Magebit\AcpSpec\Api\Feed\VariantOptionInterface[]|null
     */
    public function getVariantOptions(): array|null;

    /**
     * Option selections that distinguish this variant, such as Color: Red or Size: Small.
     *
     * @param \Magebit\AcpSpec\Api\Feed\VariantOptionInterface[]|null $variantOptions
     * @return self
     */
    public function setVariantOptions(array|null $variantOptions): self;

    /**
     * Media assets specific to this variant. The first item is the primary listing asset.
     *
     * @return \Magebit\AcpSpec\Api\Feed\MediaInterface[]|null
     */
    public function getMedia(): array|null;

    /**
     * Media assets specific to this variant. The first item is the primary listing asset.
     *
     * @param \Magebit\AcpSpec\Api\Feed\MediaInterface[]|null $media
     * @return self
     */
    public function setMedia(array|null $media): self;

    /**
     * Seller or merchant of record for this variant.
     *
     * @return \Magebit\AcpSpec\Api\Feed\SellerInterface|null
     */
    public function getSeller(): SellerInterface|null;

    /**
     * Seller or merchant of record for this variant.
     *
     * @param \Magebit\AcpSpec\Api\Feed\SellerInterface|null $seller
     * @return self
     */
    public function setSeller(SellerInterface|null $seller): self;

    /**
     * Marketplace or intermediary platform through which this variant is offered, if applicable.
     *
     * @return \Magebit\AcpSpec\Api\Feed\SellerInterface|null
     */
    public function getMarketplace(): SellerInterface|null;

    /**
     * Marketplace or intermediary platform through which this variant is offered, if applicable.
     *
     * @param \Magebit\AcpSpec\Api\Feed\SellerInterface|null $marketplace
     * @return self
     */
    public function setMarketplace(SellerInterface|null $marketplace): self;
}
