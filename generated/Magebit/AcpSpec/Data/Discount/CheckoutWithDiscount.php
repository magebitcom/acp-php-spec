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

use Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\CapabilitiesInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDetailsInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentGroupInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionDigitalInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionLocalDeliveryInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionPickupInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionShippingInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\LineItemInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\LinkInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\MarketingConsentOptionInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\MessageErrorInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\MessageInfoInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\MessageWarningInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\OrderInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\ProtocolVersionInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\SelectedFulfillmentOptionInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface;
use Magebit\AcpSpec\Api\Discount\CheckoutWithDiscountInterface;
use Magebit\AcpSpec\Api\Discount\DiscountsResponseInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Checkout session extended with discount capability.
 */
class CheckoutWithDiscount extends SpecObject implements CheckoutWithDiscountInterface
{
    /** @var string[] */
    protected array $jsonObjectKeys = ['metadata'];

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
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\ProtocolVersionInterface|null
     */
    public function getProtocol(): ProtocolVersionInterface|null
    {
        return $this->instanceOrNull(self::KEY_PROTOCOL, \Magebit\AcpSpec\Api\AgenticCheckout\ProtocolVersionInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\ProtocolVersionInterface|null $protocol
     * @return self
     */
    public function setProtocol(ProtocolVersionInterface|null $protocol): self
    {
        return $this->set(self::KEY_PROTOCOL, $protocol);
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
     * @return string
     */
    public function getStatus(): string
    {
        return $this->requireString(self::KEY_STATUS);
    }

    /**
     * @param string $status
     * @return self
     */
    public function setStatus(string $status): self
    {
        return $this->set(self::KEY_STATUS, $status);
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
     * @return string|null
     */
    public function getPresentmentCurrency(): string|null
    {
        return $this->stringOrNull(self::KEY_PRESENTMENT_CURRENCY);
    }

    /**
     * @param string|null $presentmentCurrency
     * @return self
     */
    public function setPresentmentCurrency(string|null $presentmentCurrency): self
    {
        return $this->set(self::KEY_PRESENTMENT_CURRENCY, $presentmentCurrency);
    }

    /**
     * @return float|null
     */
    public function getExchangeRate(): float|null
    {
        return $this->floatOrNull(self::KEY_EXCHANGE_RATE);
    }

    /**
     * @param float|null $exchangeRate
     * @return self
     */
    public function setExchangeRate(float|null $exchangeRate): self
    {
        return $this->set(self::KEY_EXCHANGE_RATE, $exchangeRate);
    }

    /**
     * @return string|null
     */
    public function getExchangeRateTimestamp(): string|null
    {
        return $this->stringOrNull(self::KEY_EXCHANGE_RATE_TIMESTAMP);
    }

    /**
     * @param string|null $exchangeRateTimestamp
     * @return self
     */
    public function setExchangeRateTimestamp(string|null $exchangeRateTimestamp): self
    {
        return $this->set(self::KEY_EXCHANGE_RATE_TIMESTAMP, $exchangeRateTimestamp);
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
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\LineItemInterface[]
     */
    public function getLineItems(): array
    {
        return $this->instanceList(self::KEY_LINE_ITEMS, \Magebit\AcpSpec\Api\AgenticCheckout\LineItemInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\LineItemInterface[] $lineItems
     * @return self
     */
    public function setLineItems(array $lineItems): self
    {
        return $this->set(self::KEY_LINE_ITEMS, $lineItems);
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
     * @return array<\Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionShippingInterface|\Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionDigitalInterface|\Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionPickupInterface|\Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionLocalDeliveryInterface>
     */
    public function getFulfillmentOptions(): array
    {
        return $this->getArray(self::KEY_FULFILLMENT_OPTIONS);
    }

    /**
     * @param array<\Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionShippingInterface|\Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionDigitalInterface|\Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionPickupInterface|\Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionLocalDeliveryInterface> $fulfillmentOptions
     * @return self
     */
    public function setFulfillmentOptions(array $fulfillmentOptions): self
    {
        return $this->set(self::KEY_FULFILLMENT_OPTIONS, $fulfillmentOptions);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\SelectedFulfillmentOptionInterface[]|null
     */
    public function getSelectedFulfillmentOptions(): array|null
    {
        return $this->instanceListOrNull(self::KEY_SELECTED_FULFILLMENT_OPTIONS, \Magebit\AcpSpec\Api\AgenticCheckout\SelectedFulfillmentOptionInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\SelectedFulfillmentOptionInterface[]|null $selectedFulfillmentOptions
     * @return self
     */
    public function setSelectedFulfillmentOptions(array|null $selectedFulfillmentOptions): self
    {
        return $this->set(self::KEY_SELECTED_FULFILLMENT_OPTIONS, $selectedFulfillmentOptions);
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

    /**
     * @return array<\Magebit\AcpSpec\Api\AgenticCheckout\MessageInfoInterface|\Magebit\AcpSpec\Api\AgenticCheckout\MessageWarningInterface|\Magebit\AcpSpec\Api\AgenticCheckout\MessageErrorInterface>
     */
    public function getMessages(): array
    {
        return $this->getArray(self::KEY_MESSAGES);
    }

    /**
     * @param array<\Magebit\AcpSpec\Api\AgenticCheckout\MessageInfoInterface|\Magebit\AcpSpec\Api\AgenticCheckout\MessageWarningInterface|\Magebit\AcpSpec\Api\AgenticCheckout\MessageErrorInterface> $messages
     * @return self
     */
    public function setMessages(array $messages): self
    {
        return $this->set(self::KEY_MESSAGES, $messages);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\LinkInterface[]
     */
    public function getLinks(): array
    {
        return $this->instanceList(self::KEY_LINKS, \Magebit\AcpSpec\Api\AgenticCheckout\LinkInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\LinkInterface[] $links
     * @return self
     */
    public function setLinks(array $links): self
    {
        return $this->set(self::KEY_LINKS, $links);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataInterface|null
     */
    public function getAuthenticationMetadata(): AuthenticationMetadataInterface|null
    {
        return $this->instanceOrNull(self::KEY_AUTHENTICATION_METADATA, \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataInterface|null $authenticationMetadata
     * @return self
     */
    public function setAuthenticationMetadata(AuthenticationMetadataInterface|null $authenticationMetadata): self
    {
        return $this->set(self::KEY_AUTHENTICATION_METADATA, $authenticationMetadata);
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): string|null
    {
        return $this->stringOrNull(self::KEY_CREATED_AT);
    }

    /**
     * @param string|null $createdAt
     * @return self
     */
    public function setCreatedAt(string|null $createdAt): self
    {
        return $this->set(self::KEY_CREATED_AT, $createdAt);
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): string|null
    {
        return $this->stringOrNull(self::KEY_UPDATED_AT);
    }

    /**
     * @param string|null $updatedAt
     * @return self
     */
    public function setUpdatedAt(string|null $updatedAt): self
    {
        return $this->set(self::KEY_UPDATED_AT, $updatedAt);
    }

    /**
     * @return string|null
     */
    public function getExpiresAt(): string|null
    {
        return $this->stringOrNull(self::KEY_EXPIRES_AT);
    }

    /**
     * @param string|null $expiresAt
     * @return self
     */
    public function setExpiresAt(string|null $expiresAt): self
    {
        return $this->set(self::KEY_EXPIRES_AT, $expiresAt);
    }

    /**
     * @return string|null
     */
    public function getContinueUrl(): string|null
    {
        return $this->stringOrNull(self::KEY_CONTINUE_URL);
    }

    /**
     * @param string|null $continueUrl
     * @return self
     */
    public function setContinueUrl(string|null $continueUrl): self
    {
        return $this->set(self::KEY_CONTINUE_URL, $continueUrl);
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
     * @return string|null
     */
    public function getQuoteExpiresAt(): string|null
    {
        return $this->stringOrNull(self::KEY_QUOTE_EXPIRES_AT);
    }

    /**
     * @param string|null $quoteExpiresAt
     * @return self
     */
    public function setQuoteExpiresAt(string|null $quoteExpiresAt): self
    {
        return $this->set(self::KEY_QUOTE_EXPIRES_AT, $quoteExpiresAt);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Discount\DiscountsResponseInterface|null
     */
    public function getDiscounts(): DiscountsResponseInterface|null
    {
        return $this->instanceOrNull(self::KEY_DISCOUNTS, \Magebit\AcpSpec\Api\Discount\DiscountsResponseInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Discount\DiscountsResponseInterface|null $discounts
     * @return self
     */
    public function setDiscounts(DiscountsResponseInterface|null $discounts): self
    {
        return $this->set(self::KEY_DISCOUNTS, $discounts);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\MarketingConsentOptionInterface[]|null
     */
    public function getMarketingConsentOptions(): array|null
    {
        return $this->instanceListOrNull(self::KEY_MARKETING_CONSENT_OPTIONS, \Magebit\AcpSpec\Api\AgenticCheckout\MarketingConsentOptionInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\MarketingConsentOptionInterface[]|null $marketingConsentOptions
     * @return self
     */
    public function setMarketingConsentOptions(array|null $marketingConsentOptions): self
    {
        return $this->set(self::KEY_MARKETING_CONSENT_OPTIONS, $marketingConsentOptions);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\OrderInterface|null
     */
    public function getOrder(): OrderInterface|null
    {
        return $this->instanceOrNull(self::KEY_ORDER, \Magebit\AcpSpec\Api\AgenticCheckout\OrderInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\OrderInterface|null $order
     * @return self
     */
    public function setOrder(OrderInterface|null $order): self
    {
        return $this->set(self::KEY_ORDER, $order);
    }
}
