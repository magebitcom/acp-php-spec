<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\Discount;

use Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\CapabilitiesInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDetailsInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentGroupInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface;
use Magebit\AcpSpec\Api\Discount\CheckoutCreateRequestWithDiscountInterface;
use Magebit\AcpSpec\Api\Discount\DiscountsRequestInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Checkout session create request extended with discount codes.
 */
class CheckoutCreateRequestWithDiscount extends SpecObject implements CheckoutCreateRequestWithDiscountInterface
{
    /** @var string[] */
    protected array $jsonObjectKeys = ['metadata'];

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface|null
     */
    public function getBuyer(): BuyerInterface|null
    {
        return $this->instanceOrNull(self::KEY_BUYER, \Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface|null $buyer
     * @return self
     */
    public function setBuyer(BuyerInterface|null $buyer): self
    {
        return $this->set(self::KEY_BUYER, $buyer);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface[]
     */
    public function getLineItems(): array
    {
        return $this->instanceList(self::KEY_LINE_ITEMS, \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface[] $lineItems
     * @return self
     */
    public function setLineItems(array $lineItems): self
    {
        return $this->set(self::KEY_LINE_ITEMS, $lineItems);
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->requireString(self::KEY_CURRENCY);
    }

    /**
     * @param string $currency
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        return $this->set(self::KEY_CURRENCY, $currency);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDetailsInterface|null
     */
    public function getFulfillmentDetails(): FulfillmentDetailsInterface|null
    {
        return $this->instanceOrNull(self::KEY_FULFILLMENT_DETAILS, \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDetailsInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDetailsInterface|null $fulfillmentDetails
     * @return self
     */
    public function setFulfillmentDetails(FulfillmentDetailsInterface|null $fulfillmentDetails): self
    {
        return $this->set(self::KEY_FULFILLMENT_DETAILS, $fulfillmentDetails);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\CapabilitiesInterface
     */
    public function getCapabilities(): CapabilitiesInterface
    {
        return $this->requireInstance(self::KEY_CAPABILITIES, \Magebit\AcpSpec\Api\AgenticCheckout\CapabilitiesInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\CapabilitiesInterface $capabilities
     * @return self
     */
    public function setCapabilities(CapabilitiesInterface $capabilities): self
    {
        return $this->set(self::KEY_CAPABILITIES, $capabilities);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentGroupInterface[]|null
     */
    public function getFulfillmentGroups(): array|null
    {
        return $this->instanceListOrNull(self::KEY_FULFILLMENT_GROUPS, \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentGroupInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentGroupInterface[]|null $fulfillmentGroups
     * @return self
     */
    public function setFulfillmentGroups(array|null $fulfillmentGroups): self
    {
        return $this->set(self::KEY_FULFILLMENT_GROUPS, $fulfillmentGroups);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionInterface|null
     */
    public function getAffiliateAttribution(): AffiliateAttributionInterface|null
    {
        return $this->instanceOrNull(self::KEY_AFFILIATE_ATTRIBUTION, \Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionInterface|null $affiliateAttribution
     * @return self
     */
    public function setAffiliateAttribution(AffiliateAttributionInterface|null $affiliateAttribution): self
    {
        return $this->set(self::KEY_AFFILIATE_ATTRIBUTION, $affiliateAttribution);
    }

    /**
     * @return string[]|null
     */
    public function getCoupons(): array|null
    {
        return $this->arrayOrNull(self::KEY_COUPONS);
    }

    /**
     * @param string[]|null $coupons
     * @return self
     */
    public function setCoupons(array|null $coupons): self
    {
        return $this->set(self::KEY_COUPONS, $coupons);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Discount\DiscountsRequestInterface|null
     */
    public function getDiscounts(): DiscountsRequestInterface|null
    {
        return $this->instanceOrNull(self::KEY_DISCOUNTS, \Magebit\AcpSpec\Api\Discount\DiscountsRequestInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Discount\DiscountsRequestInterface|null $discounts
     * @return self
     */
    public function setDiscounts(DiscountsRequestInterface|null $discounts): self
    {
        return $this->set(self::KEY_DISCOUNTS, $discounts);
    }

    /**
     * @return string|null
     */
    public function getLocale(): string|null
    {
        return $this->stringOrNull(self::KEY_LOCALE);
    }

    /**
     * @param string|null $locale
     * @return self
     */
    public function setLocale(string|null $locale): self
    {
        return $this->set(self::KEY_LOCALE, $locale);
    }

    /**
     * @return string|null
     */
    public function getTimezone(): string|null
    {
        return $this->stringOrNull(self::KEY_TIMEZONE);
    }

    /**
     * @param string|null $timezone
     * @return self
     */
    public function setTimezone(string|null $timezone): self
    {
        return $this->set(self::KEY_TIMEZONE, $timezone);
    }

    /**
     * @return string|null
     */
    public function getQuoteId(): string|null
    {
        return $this->stringOrNull(self::KEY_QUOTE_ID);
    }

    /**
     * @param string|null $quoteId
     * @return self
     */
    public function setQuoteId(string|null $quoteId): self
    {
        return $this->set(self::KEY_QUOTE_ID, $quoteId);
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getMetadata(): array|null
    {
        return $this->arrayOrNull(self::KEY_METADATA);
    }

    /**
     * @param array<string, mixed>|null $metadata
     * @return self
     */
    public function setMetadata(array|null $metadata): self
    {
        return $this->set(self::KEY_METADATA, $metadata);
    }

    /**
     * @return string|null
     */
    public function getOrderNotes(): string|null
    {
        return $this->stringOrNull(self::KEY_ORDER_NOTES);
    }

    /**
     * @param string|null $orderNotes
     * @return self
     */
    public function setOrderNotes(string|null $orderNotes): self
    {
        return $this->set(self::KEY_ORDER_NOTES, $orderNotes);
    }
}
