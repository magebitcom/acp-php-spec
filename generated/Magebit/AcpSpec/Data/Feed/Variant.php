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

use Magebit\AcpSpec\Api\Feed\AvailabilityInterface;
use Magebit\AcpSpec\Api\Feed\BarcodeInterface;
use Magebit\AcpSpec\Api\Feed\CategoryInterface;
use Magebit\AcpSpec\Api\Feed\DescriptionInterface;
use Magebit\AcpSpec\Api\Feed\MediaInterface;
use Magebit\AcpSpec\Api\Feed\PriceInterface;
use Magebit\AcpSpec\Api\Feed\SellerInterface;
use Magebit\AcpSpec\Api\Feed\UnitPriceInterface;
use Magebit\AcpSpec\Api\Feed\VariantInterface;
use Magebit\AcpSpec\Api\Feed\VariantOptionInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Purchasable variant of a product within a feed.
 */
class Variant extends SpecObject implements VariantInterface
{
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->requireString(self::KEY_ID);
    }

    /**
     * @param string $id
     * @return self
     */
    public function setId(string $id): self
    {
        return $this->set(self::KEY_ID, $id);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->requireString(self::KEY_TITLE);
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(string $title): self
    {
        return $this->set(self::KEY_TITLE, $title);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Feed\DescriptionInterface|null
     */
    public function getDescription(): DescriptionInterface|null
    {
        return $this->instanceOrNull(self::KEY_DESCRIPTION, \Magebit\AcpSpec\Api\Feed\DescriptionInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\DescriptionInterface|null $description
     * @return self
     */
    public function setDescription(DescriptionInterface|null $description): self
    {
        return $this->set(self::KEY_DESCRIPTION, $description);
    }

    /**
     * @return string|null
     */
    public function getUrl(): string|null
    {
        return $this->stringOrNull(self::KEY_URL);
    }

    /**
     * @param string|null $url
     * @return self
     */
    public function setUrl(string|null $url): self
    {
        return $this->set(self::KEY_URL, $url);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Feed\BarcodeInterface[]|null
     */
    public function getBarcodes(): array|null
    {
        return $this->instanceListOrNull(self::KEY_BARCODES, \Magebit\AcpSpec\Api\Feed\BarcodeInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\BarcodeInterface[]|null $barcodes
     * @return self
     */
    public function setBarcodes(array|null $barcodes): self
    {
        return $this->set(self::KEY_BARCODES, $barcodes);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Feed\PriceInterface|null
     */
    public function getPrice(): PriceInterface|null
    {
        return $this->instanceOrNull(self::KEY_PRICE, \Magebit\AcpSpec\Api\Feed\PriceInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\PriceInterface|null $price
     * @return self
     */
    public function setPrice(PriceInterface|null $price): self
    {
        return $this->set(self::KEY_PRICE, $price);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Feed\PriceInterface|null
     */
    public function getListPrice(): PriceInterface|null
    {
        return $this->instanceOrNull(self::KEY_LIST_PRICE, \Magebit\AcpSpec\Api\Feed\PriceInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\PriceInterface|null $listPrice
     * @return self
     */
    public function setListPrice(PriceInterface|null $listPrice): self
    {
        return $this->set(self::KEY_LIST_PRICE, $listPrice);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Feed\UnitPriceInterface|null
     */
    public function getUnitPrice(): UnitPriceInterface|null
    {
        return $this->instanceOrNull(self::KEY_UNIT_PRICE, \Magebit\AcpSpec\Api\Feed\UnitPriceInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\UnitPriceInterface|null $unitPrice
     * @return self
     */
    public function setUnitPrice(UnitPriceInterface|null $unitPrice): self
    {
        return $this->set(self::KEY_UNIT_PRICE, $unitPrice);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Feed\AvailabilityInterface|null
     */
    public function getAvailability(): AvailabilityInterface|null
    {
        return $this->instanceOrNull(self::KEY_AVAILABILITY, \Magebit\AcpSpec\Api\Feed\AvailabilityInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\AvailabilityInterface|null $availability
     * @return self
     */
    public function setAvailability(AvailabilityInterface|null $availability): self
    {
        return $this->set(self::KEY_AVAILABILITY, $availability);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Feed\CategoryInterface[]|null
     */
    public function getCategories(): array|null
    {
        return $this->instanceListOrNull(self::KEY_CATEGORIES, \Magebit\AcpSpec\Api\Feed\CategoryInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\CategoryInterface[]|null $categories
     * @return self
     */
    public function setCategories(array|null $categories): self
    {
        return $this->set(self::KEY_CATEGORIES, $categories);
    }

    /**
     * @return string[]|null
     */
    public function getCondition(): array|null
    {
        return $this->arrayOrNull(self::KEY_CONDITION);
    }

    /**
     * @param string[]|null $condition
     * @return self
     */
    public function setCondition(array|null $condition): self
    {
        return $this->set(self::KEY_CONDITION, $condition);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Feed\VariantOptionInterface[]|null
     */
    public function getVariantOptions(): array|null
    {
        return $this->instanceListOrNull(self::KEY_VARIANT_OPTIONS, \Magebit\AcpSpec\Api\Feed\VariantOptionInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\VariantOptionInterface[]|null $variantOptions
     * @return self
     */
    public function setVariantOptions(array|null $variantOptions): self
    {
        return $this->set(self::KEY_VARIANT_OPTIONS, $variantOptions);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Feed\MediaInterface[]|null
     */
    public function getMedia(): array|null
    {
        return $this->instanceListOrNull(self::KEY_MEDIA, \Magebit\AcpSpec\Api\Feed\MediaInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\MediaInterface[]|null $media
     * @return self
     */
    public function setMedia(array|null $media): self
    {
        return $this->set(self::KEY_MEDIA, $media);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Feed\SellerInterface|null
     */
    public function getSeller(): SellerInterface|null
    {
        return $this->instanceOrNull(self::KEY_SELLER, \Magebit\AcpSpec\Api\Feed\SellerInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\SellerInterface|null $seller
     * @return self
     */
    public function setSeller(SellerInterface|null $seller): self
    {
        return $this->set(self::KEY_SELLER, $seller);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Feed\SellerInterface|null
     */
    public function getMarketplace(): SellerInterface|null
    {
        return $this->instanceOrNull(self::KEY_MARKETPLACE, \Magebit\AcpSpec\Api\Feed\SellerInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\SellerInterface|null $marketplace
     * @return self
     */
    public function setMarketplace(SellerInterface|null $marketplace): self
    {
        return $this->set(self::KEY_MARKETPLACE, $marketplace);
    }
}
