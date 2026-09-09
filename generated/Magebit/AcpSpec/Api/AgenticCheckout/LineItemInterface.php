<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\AgenticCheckout;

/**
 * A line item in the checkout representing a product with pricing, discounts, and fulfillment details
 */
interface LineItemInterface
{
    public const KEY_ID = 'id';
    public const KEY_ITEM = 'item';
    public const KEY_QUANTITY = 'quantity';
    public const KEY_NAME = 'name';
    public const KEY_DESCRIPTION = 'description';
    public const KEY_IMAGES = 'images';
    public const KEY_UNIT_AMOUNT = 'unit_amount';
    public const KEY_DISCLOSURES = 'disclosures';
    public const KEY_CUSTOM_ATTRIBUTES = 'custom_attributes';
    public const KEY_MARKETPLACE_SELLER_DETAILS = 'marketplace_seller_details';
    public const KEY_PRODUCT_ID = 'product_id';
    public const KEY_SKU = 'sku';
    public const KEY_VARIANT_ID = 'variant_id';
    public const KEY_CATEGORY = 'category';
    public const KEY_TAGS = 'tags';
    public const KEY_WEIGHT = 'weight';
    public const KEY_DIMENSIONS = 'dimensions';
    public const KEY_AVAILABILITY_STATUS = 'availability_status';
    public const KEY_AVAILABLE_QUANTITY = 'available_quantity';
    public const KEY_MAX_QUANTITY_PER_ORDER = 'max_quantity_per_order';
    public const KEY_FULFILLABLE_ON = 'fulfillable_on';
    public const KEY_VARIANT_OPTIONS = 'variant_options';
    public const KEY_DISCOUNT_DETAILS = 'discount_details';
    public const KEY_TAX_EXEMPT = 'tax_exempt';
    public const KEY_TAX_EXEMPTION_REASON = 'tax_exemption_reason';
    public const KEY_PARENT_ID = 'parent_id';
    public const KEY_TOTALS = 'totals';
    public const AVAILABILITY_STATUS_IN_STOCK = 'in_stock';
    public const AVAILABILITY_STATUS_LOW_STOCK = 'low_stock';
    public const AVAILABILITY_STATUS_OUT_OF_STOCK = 'out_of_stock';
    public const AVAILABILITY_STATUS_BACKORDER = 'backorder';
    public const AVAILABILITY_STATUS_PRE_ORDER = 'pre_order';

    public const CONSTRAINTS = [
        'quantity' => ['minimum' => 1],
        'images' => ['items' => ['format' => 'uri']],
        'available_quantity' => ['minimum' => 0],
        'max_quantity_per_order' => ['minimum' => 1],
        'fulfillable_on' => ['format' => 'date-time'],
    ];

    /**
     * Unique identifier for the line item
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Unique identifier for the line item
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * Reference to the item being purchased
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface
     */
    public function getItem(): ItemInterface;

    /**
     * Reference to the item being purchased
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface $item
     * @return self
     */
    public function setItem(ItemInterface $item): self;

    /**
     * Number of units for this line item
     *
     * @return int
     */
    public function getQuantity(): int;

    /**
     * Number of units for this line item
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity(int $quantity): self;

    /**
     * Display name of the line item
     *
     * @return string|null
     */
    public function getName(): string|null;

    /**
     * Display name of the line item
     *
     * @param string|null $name
     * @return self
     */
    public function setName(string|null $name): self;

    /**
     * Detailed description of the line item
     *
     * @return string|null
     */
    public function getDescription(): string|null;

    /**
     * Detailed description of the line item
     *
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self;

    /**
     * Array of image URLs for this line item
     *
     * @return string[]|null
     */
    public function getImages(): array|null;

    /**
     * Array of image URLs for this line item
     *
     * @param string[]|null $images
     * @return self
     */
    public function setImages(array|null $images): self;

    /**
     * The unit price of the line item in the smallest currency unit (e.g., cents for USD)
     *
     * @return int|null
     */
    public function getUnitAmount(): int|null;

    /**
     * The unit price of the line item in the smallest currency unit (e.g., cents for USD)
     *
     * @param int|null $unitAmount
     * @return self
     */
    public function setUnitAmount(int|null $unitAmount): self;

    /**
     * Legal disclosures or disclaimers for this item
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\DisclosureInterface[]|null
     */
    public function getDisclosures(): array|null;

    /**
     * Legal disclosures or disclaimers for this item
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\DisclosureInterface[]|null $disclosures
     * @return self
     */
    public function setDisclosures(array|null $disclosures): self;

    /**
     * Custom attributes specific to this line item
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\CustomAttributeInterface[]|null
     */
    public function getCustomAttributes(): array|null;

    /**
     * Custom attributes specific to this line item
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\CustomAttributeInterface[]|null $customAttributes
     * @return self
     */
    public function setCustomAttributes(array|null $customAttributes): self;

    /**
     * Seller details for marketplace items
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\MarketplaceSellerDetailsInterface|null
     */
    public function getMarketplaceSellerDetails(): MarketplaceSellerDetailsInterface|null;

    /**
     * Seller details for marketplace items
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\MarketplaceSellerDetailsInterface|null $marketplaceSellerDetails
     * @return self
     */
    public function setMarketplaceSellerDetails(
        MarketplaceSellerDetailsInterface|null $marketplaceSellerDetails,
    ): self;

    /**
     * Merchant's product identifier
     *
     * @return string|null
     */
    public function getProductId(): string|null;

    /**
     * Merchant's product identifier
     *
     * @param string|null $productId
     * @return self
     */
    public function setProductId(string|null $productId): self;

    /**
     * Stock keeping unit identifier
     *
     * @return string|null
     */
    public function getSku(): string|null;

    /**
     * Stock keeping unit identifier
     *
     * @param string|null $sku
     * @return self
     */
    public function setSku(string|null $sku): self;

    /**
     * Product variant identifier
     *
     * @return string|null
     */
    public function getVariantId(): string|null;

    /**
     * Product variant identifier
     *
     * @param string|null $variantId
     * @return self
     */
    public function setVariantId(string|null $variantId): self;

    /**
     * Product category
     *
     * @return string|null
     */
    public function getCategory(): string|null;

    /**
     * Product category
     *
     * @param string|null $category
     * @return self
     */
    public function setCategory(string|null $category): self;

    /**
     * Product tags or labels
     *
     * @return string[]|null
     */
    public function getTags(): array|null;

    /**
     * Product tags or labels
     *
     * @param string[]|null $tags
     * @return self
     */
    public function setTags(array|null $tags): self;

    /**
     * Weight information for the item
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\WeightInfoInterface|null
     */
    public function getWeight(): WeightInfoInterface|null;

    /**
     * Weight information for the item
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\WeightInfoInterface|null $weight
     * @return self
     */
    public function setWeight(WeightInfoInterface|null $weight): self;

    /**
     * Dimensions for the item
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\DimensionsInfoInterface|null
     */
    public function getDimensions(): DimensionsInfoInterface|null;

    /**
     * Dimensions for the item
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\DimensionsInfoInterface|null $dimensions
     * @return self
     */
    public function setDimensions(DimensionsInfoInterface|null $dimensions): self;

    /**
     * Current availability status of the item
     *
     * @return string|null
     */
    public function getAvailabilityStatus(): string|null;

    /**
     * Current availability status of the item
     *
     * @param string|null $availabilityStatus
     * @return self
     */
    public function setAvailabilityStatus(string|null $availabilityStatus): self;

    /**
     * Quantity currently available for purchase
     *
     * @return int|null
     */
    public function getAvailableQuantity(): int|null;

    /**
     * Quantity currently available for purchase
     *
     * @param int|null $availableQuantity
     * @return self
     */
    public function setAvailableQuantity(int|null $availableQuantity): self;

    /**
     * Maximum quantity allowed per order
     *
     * @return int|null
     */
    public function getMaxQuantityPerOrder(): int|null;

    /**
     * Maximum quantity allowed per order
     *
     * @param int|null $maxQuantityPerOrder
     * @return self
     */
    public function setMaxQuantityPerOrder(int|null $maxQuantityPerOrder): self;

    /**
     * RFC 3339 timestamp when item becomes available for fulfillment
     *
     * @return string|null
     */
    public function getFulfillableOn(): string|null;

    /**
     * RFC 3339 timestamp when item becomes available for fulfillment
     *
     * @param string|null $fulfillableOn
     * @return self
     */
    public function setFulfillableOn(string|null $fulfillableOn): self;

    /**
     * Selected product variant options (e.g., size, color)
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\VariantOptionInterface[]|null
     */
    public function getVariantOptions(): array|null;

    /**
     * Selected product variant options (e.g., size, color)
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\VariantOptionInterface[]|null $variantOptions
     * @return self
     */
    public function setVariantOptions(array|null $variantOptions): self;

    /**
     * Line-item level discount details
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\DiscountDetailInterface[]|null
     */
    public function getDiscountDetails(): array|null;

    /**
     * Line-item level discount details
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\DiscountDetailInterface[]|null $discountDetails
     * @return self
     */
    public function setDiscountDetails(array|null $discountDetails): self;

    /**
     * Whether this line item is tax exempt
     *
     * @return bool|null
     */
    public function getTaxExempt(): bool|null;

    /**
     * Whether this line item is tax exempt
     *
     * @param bool|null $taxExempt
     * @return self
     */
    public function setTaxExempt(bool|null $taxExempt): self;

    /**
     * Reason for tax exemption if applicable
     *
     * @return string|null
     */
    public function getTaxExemptionReason(): string|null;

    /**
     * Reason for tax exemption if applicable
     *
     * @param string|null $taxExemptionReason
     * @return self
     */
    public function setTaxExemptionReason(string|null $taxExemptionReason): self;

    /**
     * Reference to parent line item for bundled products
     *
     * @return string|null
     */
    public function getParentId(): string|null;

    /**
     * Reference to parent line item for bundled products
     *
     * @param string|null $parentId
     * @return self
     */
    public function setParentId(string|null $parentId): self;

    /**
     * Line-item level totals breakdown including base_amount, discount, subtotal, tax, and total
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[]
     */
    public function getTotals(): array;

    /**
     * Line-item level totals breakdown including base_amount, discount, subtotal, tax, and total
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[] $totals
     * @return self
     */
    public function setTotals(array $totals): self;
}
