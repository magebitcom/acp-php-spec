<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\AgenticCheckout;

use Magebit\AcpSpec\Api\AgenticCheckout\CustomAttributeInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\DimensionsInfoInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\DisclosureInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\DiscountDetailInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\LineItemInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\MarketplaceSellerDetailsInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\VariantOptionInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\WeightInfoInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * A line item in the checkout representing a product with pricing, discounts, and fulfillment details
 */
class LineItem extends SpecObject implements LineItemInterface
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
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface
     */
    public function getItem(): ItemInterface
    {
        return $this->requireInstance(self::KEY_ITEM, \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface $item
     * @return self
     */
    public function setItem(ItemInterface $item): self
    {
        return $this->set(self::KEY_ITEM, $item);
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->requireInt(self::KEY_QUANTITY);
    }

    /**
     * @param int $quantity
     * @return self
     */
    public function setQuantity(int $quantity): self
    {
        return $this->set(self::KEY_QUANTITY, $quantity);
    }

    /**
     * @return string|null
     */
    public function getName(): string|null
    {
        return $this->stringOrNull(self::KEY_NAME);
    }

    /**
     * @param string|null $name
     * @return self
     */
    public function setName(string|null $name): self
    {
        return $this->set(self::KEY_NAME, $name);
    }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
        return $this->stringOrNull(self::KEY_DESCRIPTION);
    }

    /**
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self
    {
        return $this->set(self::KEY_DESCRIPTION, $description);
    }

    /**
     * @return string[]|null
     */
    public function getImages(): array|null
    {
        return $this->arrayOrNull(self::KEY_IMAGES);
    }

    /**
     * @param string[]|null $images
     * @return self
     */
    public function setImages(array|null $images): self
    {
        return $this->set(self::KEY_IMAGES, $images);
    }

    /**
     * @return int|null
     */
    public function getUnitAmount(): int|null
    {
        return $this->intOrNull(self::KEY_UNIT_AMOUNT);
    }

    /**
     * @param int|null $unitAmount
     * @return self
     */
    public function setUnitAmount(int|null $unitAmount): self
    {
        return $this->set(self::KEY_UNIT_AMOUNT, $unitAmount);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\DisclosureInterface[]|null
     */
    public function getDisclosures(): array|null
    {
        return $this->instanceListOrNull(self::KEY_DISCLOSURES, \Magebit\AcpSpec\Api\AgenticCheckout\DisclosureInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\DisclosureInterface[]|null $disclosures
     * @return self
     */
    public function setDisclosures(array|null $disclosures): self
    {
        return $this->set(self::KEY_DISCLOSURES, $disclosures);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\CustomAttributeInterface[]|null
     */
    public function getCustomAttributes(): array|null
    {
        return $this->instanceListOrNull(self::KEY_CUSTOM_ATTRIBUTES, \Magebit\AcpSpec\Api\AgenticCheckout\CustomAttributeInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\CustomAttributeInterface[]|null $customAttributes
     * @return self
     */
    public function setCustomAttributes(array|null $customAttributes): self
    {
        return $this->set(self::KEY_CUSTOM_ATTRIBUTES, $customAttributes);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\MarketplaceSellerDetailsInterface|null
     */
    public function getMarketplaceSellerDetails(): MarketplaceSellerDetailsInterface|null
    {
        return $this->instanceOrNull(self::KEY_MARKETPLACE_SELLER_DETAILS, \Magebit\AcpSpec\Api\AgenticCheckout\MarketplaceSellerDetailsInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\MarketplaceSellerDetailsInterface|null $marketplaceSellerDetails
     * @return self
     */
    public function setMarketplaceSellerDetails(
        MarketplaceSellerDetailsInterface|null $marketplaceSellerDetails,
    ): self {
        return $this->set(self::KEY_MARKETPLACE_SELLER_DETAILS, $marketplaceSellerDetails);
    }

    /**
     * @return string|null
     */
    public function getProductId(): string|null
    {
        return $this->stringOrNull(self::KEY_PRODUCT_ID);
    }

    /**
     * @param string|null $productId
     * @return self
     */
    public function setProductId(string|null $productId): self
    {
        return $this->set(self::KEY_PRODUCT_ID, $productId);
    }

    /**
     * @return string|null
     */
    public function getSku(): string|null
    {
        return $this->stringOrNull(self::KEY_SKU);
    }

    /**
     * @param string|null $sku
     * @return self
     */
    public function setSku(string|null $sku): self
    {
        return $this->set(self::KEY_SKU, $sku);
    }

    /**
     * @return string|null
     */
    public function getVariantId(): string|null
    {
        return $this->stringOrNull(self::KEY_VARIANT_ID);
    }

    /**
     * @param string|null $variantId
     * @return self
     */
    public function setVariantId(string|null $variantId): self
    {
        return $this->set(self::KEY_VARIANT_ID, $variantId);
    }

    /**
     * @return string|null
     */
    public function getCategory(): string|null
    {
        return $this->stringOrNull(self::KEY_CATEGORY);
    }

    /**
     * @param string|null $category
     * @return self
     */
    public function setCategory(string|null $category): self
    {
        return $this->set(self::KEY_CATEGORY, $category);
    }

    /**
     * @return string[]|null
     */
    public function getTags(): array|null
    {
        return $this->arrayOrNull(self::KEY_TAGS);
    }

    /**
     * @param string[]|null $tags
     * @return self
     */
    public function setTags(array|null $tags): self
    {
        return $this->set(self::KEY_TAGS, $tags);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\WeightInfoInterface|null
     */
    public function getWeight(): WeightInfoInterface|null
    {
        return $this->instanceOrNull(self::KEY_WEIGHT, \Magebit\AcpSpec\Api\AgenticCheckout\WeightInfoInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\WeightInfoInterface|null $weight
     * @return self
     */
    public function setWeight(WeightInfoInterface|null $weight): self
    {
        return $this->set(self::KEY_WEIGHT, $weight);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\DimensionsInfoInterface|null
     */
    public function getDimensions(): DimensionsInfoInterface|null
    {
        return $this->instanceOrNull(self::KEY_DIMENSIONS, \Magebit\AcpSpec\Api\AgenticCheckout\DimensionsInfoInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\DimensionsInfoInterface|null $dimensions
     * @return self
     */
    public function setDimensions(DimensionsInfoInterface|null $dimensions): self
    {
        return $this->set(self::KEY_DIMENSIONS, $dimensions);
    }

    /**
     * @return string|null
     */
    public function getAvailabilityStatus(): string|null
    {
        return $this->stringOrNull(self::KEY_AVAILABILITY_STATUS);
    }

    /**
     * @param string|null $availabilityStatus
     * @return self
     */
    public function setAvailabilityStatus(string|null $availabilityStatus): self
    {
        return $this->set(self::KEY_AVAILABILITY_STATUS, $availabilityStatus);
    }

    /**
     * @return int|null
     */
    public function getAvailableQuantity(): int|null
    {
        return $this->intOrNull(self::KEY_AVAILABLE_QUANTITY);
    }

    /**
     * @param int|null $availableQuantity
     * @return self
     */
    public function setAvailableQuantity(int|null $availableQuantity): self
    {
        return $this->set(self::KEY_AVAILABLE_QUANTITY, $availableQuantity);
    }

    /**
     * @return int|null
     */
    public function getMaxQuantityPerOrder(): int|null
    {
        return $this->intOrNull(self::KEY_MAX_QUANTITY_PER_ORDER);
    }

    /**
     * @param int|null $maxQuantityPerOrder
     * @return self
     */
    public function setMaxQuantityPerOrder(int|null $maxQuantityPerOrder): self
    {
        return $this->set(self::KEY_MAX_QUANTITY_PER_ORDER, $maxQuantityPerOrder);
    }

    /**
     * @return string|null
     */
    public function getFulfillableOn(): string|null
    {
        return $this->stringOrNull(self::KEY_FULFILLABLE_ON);
    }

    /**
     * @param string|null $fulfillableOn
     * @return self
     */
    public function setFulfillableOn(string|null $fulfillableOn): self
    {
        return $this->set(self::KEY_FULFILLABLE_ON, $fulfillableOn);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\VariantOptionInterface[]|null
     */
    public function getVariantOptions(): array|null
    {
        return $this->instanceListOrNull(self::KEY_VARIANT_OPTIONS, \Magebit\AcpSpec\Api\AgenticCheckout\VariantOptionInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\VariantOptionInterface[]|null $variantOptions
     * @return self
     */
    public function setVariantOptions(array|null $variantOptions): self
    {
        return $this->set(self::KEY_VARIANT_OPTIONS, $variantOptions);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\DiscountDetailInterface[]|null
     */
    public function getDiscountDetails(): array|null
    {
        return $this->instanceListOrNull(self::KEY_DISCOUNT_DETAILS, \Magebit\AcpSpec\Api\AgenticCheckout\DiscountDetailInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\DiscountDetailInterface[]|null $discountDetails
     * @return self
     */
    public function setDiscountDetails(array|null $discountDetails): self
    {
        return $this->set(self::KEY_DISCOUNT_DETAILS, $discountDetails);
    }

    /**
     * @return bool|null
     */
    public function getTaxExempt(): bool|null
    {
        return $this->boolOrNull(self::KEY_TAX_EXEMPT);
    }

    /**
     * @param bool|null $taxExempt
     * @return self
     */
    public function setTaxExempt(bool|null $taxExempt): self
    {
        return $this->set(self::KEY_TAX_EXEMPT, $taxExempt);
    }

    /**
     * @return string|null
     */
    public function getTaxExemptionReason(): string|null
    {
        return $this->stringOrNull(self::KEY_TAX_EXEMPTION_REASON);
    }

    /**
     * @param string|null $taxExemptionReason
     * @return self
     */
    public function setTaxExemptionReason(string|null $taxExemptionReason): self
    {
        return $this->set(self::KEY_TAX_EXEMPTION_REASON, $taxExemptionReason);
    }

    /**
     * @return string|null
     */
    public function getParentId(): string|null
    {
        return $this->stringOrNull(self::KEY_PARENT_ID);
    }

    /**
     * @param string|null $parentId
     * @return self
     */
    public function setParentId(string|null $parentId): self
    {
        return $this->set(self::KEY_PARENT_ID, $parentId);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[]
     */
    public function getTotals(): array
    {
        return $this->instanceList(self::KEY_TOTALS, \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[] $totals
     * @return self
     */
    public function setTotals(array $totals): self
    {
        return $this->set(self::KEY_TOTALS, $totals);
    }
}
