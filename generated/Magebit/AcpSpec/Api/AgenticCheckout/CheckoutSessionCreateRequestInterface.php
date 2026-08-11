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
 * Request to create a new checkout session
 */
interface CheckoutSessionCreateRequestInterface
{
    public const KEY_BUYER = 'buyer';
    public const KEY_LINE_ITEMS = 'line_items';
    public const KEY_CURRENCY = 'currency';
    public const KEY_FULFILLMENT_DETAILS = 'fulfillment_details';
    public const KEY_CAPABILITIES = 'capabilities';
    public const KEY_FULFILLMENT_GROUPS = 'fulfillment_groups';
    public const KEY_AFFILIATE_ATTRIBUTION = 'affiliate_attribution';
    public const KEY_COUPONS = 'coupons';
    public const KEY_DISCOUNTS = 'discounts';
    public const KEY_LOCALE = 'locale';
    public const KEY_TIMEZONE = 'timezone';
    public const KEY_QUOTE_ID = 'quote_id';
    public const KEY_METADATA = 'metadata';
    public const KEY_ORDER_NOTES = 'order_notes';

    /**
     * Buyer information
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface|null
     */
    public function getBuyer(): BuyerInterface|null;

    /**
     * Buyer information
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface|null $buyer
     * @return self
     */
    public function setBuyer(BuyerInterface|null $buyer): self;

    /**
     * Items to add to the checkout session
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface[]
     */
    public function getLineItems(): array;

    /**
     * Items to add to the checkout session
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface[] $lineItems
     * @return self
     */
    public function setLineItems(array $lineItems): self;

    /**
     * ISO 4217 currency code
     *
     * @return string
     */
    public function getCurrency(): string;

    /**
     * ISO 4217 currency code
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency(string $currency): self;

    /**
     * Fulfillment contact and address details
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDetailsInterface|null
     */
    public function getFulfillmentDetails(): FulfillmentDetailsInterface|null;

    /**
     * Fulfillment contact and address details
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDetailsInterface|null $fulfillmentDetails
     * @return self
     */
    public function setFulfillmentDetails(FulfillmentDetailsInterface|null $fulfillmentDetails): self;

    /**
     * Agent capabilities and supported features
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\CapabilitiesInterface
     */
    public function getCapabilities(): CapabilitiesInterface;

    /**
     * Agent capabilities and supported features
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\CapabilitiesInterface $capabilities
     * @return self
     */
    public function setCapabilities(CapabilitiesInterface $capabilities): self;

    /**
     * Grouping of items by fulfillment method
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentGroupInterface[]|null
     */
    public function getFulfillmentGroups(): array|null;

    /**
     * Grouping of items by fulfillment method
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentGroupInterface[]|null $fulfillmentGroups
     * @return self
     */
    public function setFulfillmentGroups(array|null $fulfillmentGroups): self;

    /**
     * Affiliate attribution data for first-touch tracking
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionInterface|null
     */
    public function getAffiliateAttribution(): AffiliateAttributionInterface|null;

    /**
     * Affiliate attribution data for first-touch tracking
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionInterface|null $affiliateAttribution
     * @return self
     */
    public function setAffiliateAttribution(AffiliateAttributionInterface|null $affiliateAttribution): self;

    /**
     * DEPRECATED: Use discounts.codes instead. Discount codes to apply.
     *
     * @return string[]|null
     */
    public function getCoupons(): array|null;

    /**
     * DEPRECATED: Use discounts.codes instead. Discount codes to apply.
     *
     * @param string[]|null $coupons
     * @return self
     */
    public function setCoupons(array|null $coupons): self;

    /**
     * Discount codes to apply to the checkout session.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\DiscountsRequestInterface|null
     */
    public function getDiscounts(): DiscountsRequestInterface|null;

    /**
     * Discount codes to apply to the checkout session.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\DiscountsRequestInterface|null $discounts
     * @return self
     */
    public function setDiscounts(DiscountsRequestInterface|null $discounts): self;

    /**
     * Locale code for localizing content (e.g., 'en-US')
     *
     * @return string|null
     */
    public function getLocale(): string|null;

    /**
     * Locale code for localizing content (e.g., 'en-US')
     *
     * @param string|null $locale
     * @return self
     */
    public function setLocale(string|null $locale): self;

    /**
     * IANA timezone identifier (e.g., 'America/New_York')
     *
     * @return string|null
     */
    public function getTimezone(): string|null;

    /**
     * IANA timezone identifier (e.g., 'America/New_York')
     *
     * @param string|null $timezone
     * @return self
     */
    public function setTimezone(string|null $timezone): self;

    /**
     * Quote identifier if this session is based on a quote
     *
     * @return string|null
     */
    public function getQuoteId(): string|null;

    /**
     * Quote identifier if this session is based on a quote
     *
     * @param string|null $quoteId
     * @return self
     */
    public function setQuoteId(string|null $quoteId): self;

    /**
     * Arbitrary metadata for merchant use
     *
     * @return array<string, mixed>|null
     */
    public function getMetadata(): array|null;

    /**
     * Arbitrary metadata for merchant use
     *
     * @param array<string, mixed>|null $metadata
     * @return self
     */
    public function setMetadata(array|null $metadata): self;

    /**
     * Optional customer/order notes (e.g., delivery instructions, gift message).
     *
     * @return string|null
     */
    public function getOrderNotes(): string|null;

    /**
     * Optional customer/order notes (e.g., delivery instructions, gift message).
     *
     * @param string|null $orderNotes
     * @return self
     */
    public function setOrderNotes(string|null $orderNotes): self;
}
