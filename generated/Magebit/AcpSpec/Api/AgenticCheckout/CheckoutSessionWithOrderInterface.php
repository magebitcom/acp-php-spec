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
 * Checkout session response after completion, includes the created order
 */
interface CheckoutSessionWithOrderInterface
{
    public const KEY_ID = 'id';
    public const KEY_PROTOCOL = 'protocol';
    public const KEY_CAPABILITIES = 'capabilities';
    public const KEY_BUYER = 'buyer';
    public const KEY_STATUS = 'status';
    public const KEY_CURRENCY = 'currency';
    public const KEY_PRESENTMENT_CURRENCY = 'presentment_currency';
    public const KEY_EXCHANGE_RATE = 'exchange_rate';
    public const KEY_EXCHANGE_RATE_TIMESTAMP = 'exchange_rate_timestamp';
    public const KEY_LOCALE = 'locale';
    public const KEY_TIMEZONE = 'timezone';
    public const KEY_LINE_ITEMS = 'line_items';
    public const KEY_FULFILLMENT_DETAILS = 'fulfillment_details';
    public const KEY_FULFILLMENT_OPTIONS = 'fulfillment_options';
    public const KEY_SELECTED_FULFILLMENT_OPTIONS = 'selected_fulfillment_options';
    public const KEY_FULFILLMENT_GROUPS = 'fulfillment_groups';
    public const KEY_TOTALS = 'totals';
    public const KEY_MESSAGES = 'messages';
    public const KEY_LINKS = 'links';
    public const KEY_AUTHENTICATION_METADATA = 'authentication_metadata';
    public const KEY_CREATED_AT = 'created_at';
    public const KEY_UPDATED_AT = 'updated_at';
    public const KEY_EXPIRES_AT = 'expires_at';
    public const KEY_CONTINUE_URL = 'continue_url';
    public const KEY_METADATA = 'metadata';
    public const KEY_QUOTE_ID = 'quote_id';
    public const KEY_QUOTE_EXPIRES_AT = 'quote_expires_at';
    public const KEY_DISCOUNTS = 'discounts';
    public const KEY_MARKETING_CONSENT_OPTIONS = 'marketing_consent_options';
    public const KEY_ORDER = 'order';
    public const STATUS_INCOMPLETE = 'incomplete';
    public const STATUS_NOT_READY_FOR_PAYMENT = 'not_ready_for_payment';
    public const STATUS_REQUIRES_ESCALATION = 'requires_escalation';
    public const STATUS_AUTHENTICATION_REQUIRED = 'authentication_required';
    public const STATUS_READY_FOR_PAYMENT = 'ready_for_payment';
    public const STATUS_PENDING_APPROVAL = 'pending_approval';
    public const STATUS_COMPLETE_IN_PROGRESS = 'complete_in_progress';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_CANCELED = 'canceled';
    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_EXPIRED = 'expired';

    public const CONSTRAINTS = [
        'exchange_rate_timestamp' => ['format' => 'date-time'],
        'created_at' => ['format' => 'date-time'],
        'updated_at' => ['format' => 'date-time'],
        'expires_at' => ['format' => 'date-time'],
        'continue_url' => ['format' => 'uri'],
        'quote_expires_at' => ['format' => 'date-time'],
    ];

    /**
     * Unique identifier for the checkout session
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Unique identifier for the checkout session
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * Protocol version metadata
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\ProtocolVersionInterface|null
     */
    public function getProtocol(): ProtocolVersionInterface|null;

    /**
     * Protocol version metadata
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\ProtocolVersionInterface|null $protocol
     * @return self
     */
    public function setProtocol(ProtocolVersionInterface|null $protocol): self;

    /**
     * Negotiated capabilities between agent and seller
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\CapabilitiesInterface
     */
    public function getCapabilities(): CapabilitiesInterface;

    /**
     * Negotiated capabilities between agent and seller
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\CapabilitiesInterface $capabilities
     * @return self
     */
    public function setCapabilities(CapabilitiesInterface $capabilities): self;

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
     * Current status of the checkout session
     *
     * @return string
     */
    public function getStatus(): string;

    /**
     * Current status of the checkout session
     *
     * @param string $status
     * @return self
     */
    public function setStatus(string $status): self;

    /**
     * ISO 4217 settlement currency code
     *
     * @return string
     */
    public function getCurrency(): string;

    /**
     * ISO 4217 settlement currency code
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency(string $currency): self;

    /**
     * ISO 4217 presentment currency code if different from settlement currency
     *
     * @return string|null
     */
    public function getPresentmentCurrency(): string|null;

    /**
     * ISO 4217 presentment currency code if different from settlement currency
     *
     * @param string|null $presentmentCurrency
     * @return self
     */
    public function setPresentmentCurrency(string|null $presentmentCurrency): self;

    /**
     * Exchange rate from presentment to settlement currency
     *
     * @return float|null
     */
    public function getExchangeRate(): float|null;

    /**
     * Exchange rate from presentment to settlement currency
     *
     * @param float|null $exchangeRate
     * @return self
     */
    public function setExchangeRate(float|null $exchangeRate): self;

    /**
     * RFC 3339 timestamp when exchange rate was determined
     *
     * @return string|null
     */
    public function getExchangeRateTimestamp(): string|null;

    /**
     * RFC 3339 timestamp when exchange rate was determined
     *
     * @param string|null $exchangeRateTimestamp
     * @return self
     */
    public function setExchangeRateTimestamp(string|null $exchangeRateTimestamp): self;

    /**
     * Locale code (e.g., 'en-US') for localizing content
     *
     * @return string|null
     */
    public function getLocale(): string|null;

    /**
     * Locale code (e.g., 'en-US') for localizing content
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
     * Line items in the checkout session
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\LineItemInterface[]
     */
    public function getLineItems(): array;

    /**
     * Line items in the checkout session
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\LineItemInterface[] $lineItems
     * @return self
     */
    public function setLineItems(array $lineItems): self;

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
     * Available fulfillment options
     *
     * @return array<\Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionShippingInterface|\Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionDigitalInterface|\Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionPickupInterface|\Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionLocalDeliveryInterface>
     */
    public function getFulfillmentOptions(): array;

    /**
     * Available fulfillment options
     *
     * @param array<\Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionShippingInterface|\Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionDigitalInterface|\Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionPickupInterface|\Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionLocalDeliveryInterface> $fulfillmentOptions
     * @return self
     */
    public function setFulfillmentOptions(array $fulfillmentOptions): self;

    /**
     * Currently selected fulfillment options
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\SelectedFulfillmentOptionInterface[]|null
     */
    public function getSelectedFulfillmentOptions(): array|null;

    /**
     * Currently selected fulfillment options
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\SelectedFulfillmentOptionInterface[]|null $selectedFulfillmentOptions
     * @return self
     */
    public function setSelectedFulfillmentOptions(array|null $selectedFulfillmentOptions): self;

    /**
     * Optional grouping of line items by fulfillment method
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentGroupInterface[]|null
     */
    public function getFulfillmentGroups(): array|null;

    /**
     * Optional grouping of line items by fulfillment method
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentGroupInterface[]|null $fulfillmentGroups
     * @return self
     */
    public function setFulfillmentGroups(array|null $fulfillmentGroups): self;

    /**
     * Cart-level totals breakdown
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[]
     */
    public function getTotals(): array;

    /**
     * Cart-level totals breakdown
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[] $totals
     * @return self
     */
    public function setTotals(array $totals): self;

    /**
     * Messages to communicate with the buyer (info, warnings, errors)
     *
     * @return array<\Magebit\AcpSpec\Api\AgenticCheckout\MessageInfoInterface|\Magebit\AcpSpec\Api\AgenticCheckout\MessageWarningInterface|\Magebit\AcpSpec\Api\AgenticCheckout\MessageErrorInterface>
     */
    public function getMessages(): array;

    /**
     * Messages to communicate with the buyer (info, warnings, errors)
     *
     * @param array<\Magebit\AcpSpec\Api\AgenticCheckout\MessageInfoInterface|\Magebit\AcpSpec\Api\AgenticCheckout\MessageWarningInterface|\Magebit\AcpSpec\Api\AgenticCheckout\MessageErrorInterface> $messages
     * @return self
     */
    public function setMessages(array $messages): self;

    /**
     * Relevant links (terms, policies, support)
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\LinkInterface[]
     */
    public function getLinks(): array;

    /**
     * Relevant links (terms, policies, support)
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\LinkInterface[] $links
     * @return self
     */
    public function setLinks(array $links): self;

    /**
     * Authentication metadata for payment interventions (e.g., 3DS)
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataInterface|null
     */
    public function getAuthenticationMetadata(): AuthenticationMetadataInterface|null;

    /**
     * Authentication metadata for payment interventions (e.g., 3DS)
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataInterface|null $authenticationMetadata
     * @return self
     */
    public function setAuthenticationMetadata(AuthenticationMetadataInterface|null $authenticationMetadata): self;

    /**
     * RFC 3339 timestamp when the session was created
     *
     * @return string|null
     */
    public function getCreatedAt(): string|null;

    /**
     * RFC 3339 timestamp when the session was created
     *
     * @param string|null $createdAt
     * @return self
     */
    public function setCreatedAt(string|null $createdAt): self;

    /**
     * RFC 3339 timestamp of last update
     *
     * @return string|null
     */
    public function getUpdatedAt(): string|null;

    /**
     * RFC 3339 timestamp of last update
     *
     * @param string|null $updatedAt
     * @return self
     */
    public function setUpdatedAt(string|null $updatedAt): self;

    /**
     * RFC 3339 timestamp when the session expires
     *
     * @return string|null
     */
    public function getExpiresAt(): string|null;

    /**
     * RFC 3339 timestamp when the session expires
     *
     * @param string|null $expiresAt
     * @return self
     */
    public function setExpiresAt(string|null $expiresAt): self;

    /**
     * URL to continue or resume the checkout session
     *
     * @return string|null
     */
    public function getContinueUrl(): string|null;

    /**
     * URL to continue or resume the checkout session
     *
     * @param string|null $continueUrl
     * @return self
     */
    public function setContinueUrl(string|null $continueUrl): self;

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
     * RFC 3339 timestamp when the quote expires
     *
     * @return string|null
     */
    public function getQuoteExpiresAt(): string|null;

    /**
     * RFC 3339 timestamp when the quote expires
     *
     * @param string|null $quoteExpiresAt
     * @return self
     */
    public function setQuoteExpiresAt(string|null $quoteExpiresAt): self;

    /**
     * Discount extension: submitted codes and applied discounts. Present when the 'discount' extension is active.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\DiscountsResponseInterface|null
     */
    public function getDiscounts(): DiscountsResponseInterface|null;

    /**
     * Discount extension: submitted codes and applied discounts. Present when the 'discount' extension is active.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\DiscountsResponseInterface|null $discounts
     * @return self
     */
    public function setDiscounts(DiscountsResponseInterface|null $discounts): self;

    /**
     * Marketing consent options the seller offers. When present, the agent SHOULD display these to the buyer before checkout completion. Agents MAY selectively surface a subset of options; options not surfaced MUST be omitted from marketing_consents in the complete request. When absent, the agent MUST NOT surface any marketing consent UI. An empty array is equivalent to absent.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\MarketingConsentOptionInterface[]|null
     */
    public function getMarketingConsentOptions(): array|null;

    /**
     * Marketing consent options the seller offers. When present, the agent SHOULD display these to the buyer before checkout completion. Agents MAY selectively surface a subset of options; options not surfaced MUST be omitted from marketing_consents in the complete request. When absent, the agent MUST NOT surface any marketing consent UI. An empty array is equivalent to absent.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\MarketingConsentOptionInterface[]|null $marketingConsentOptions
     * @return self
     */
    public function setMarketingConsentOptions(array|null $marketingConsentOptions): self;

    /**
     * Order created when checkout is completed
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\OrderInterface
     */
    public function getOrder(): OrderInterface;

    /**
     * Order created when checkout is completed
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\OrderInterface $order
     * @return self
     */
    public function setOrder(OrderInterface $order): self;
}
