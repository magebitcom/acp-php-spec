<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\Cart;

use Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\LineItemInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\MessageErrorInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\MessageInfoInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\MessageWarningInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface;

/**
 * A shopping cart with estimated pricing. Carts provide a lightweight pre-checkout phase for item collection without payment configuration or status lifecycle.
 */
interface CartInterface
{
    public const KEY_ID = 'id';
    public const KEY_LINE_ITEMS = 'line_items';
    public const KEY_BUYER = 'buyer';
    public const KEY_CURRENCY = 'currency';
    public const KEY_TOTALS = 'totals';
    public const KEY_MESSAGES = 'messages';
    public const KEY_CONTINUE_URL = 'continue_url';
    public const KEY_EXPIRES_AT = 'expires_at';

    /**
     * Unique cart identifier, server-generated.
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Unique cart identifier, server-generated.
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * Cart line items. Same structure as checkout line items.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\LineItemInterface[]
     */
    public function getLineItems(): array;

    /**
     * Cart line items. Same structure as checkout line items.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\LineItemInterface[] $lineItems
     * @return self
     */
    public function setLineItems(array $lineItems): self;

    /**
     * Buyer information, if provided.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface|null
     */
    public function getBuyer(): BuyerInterface|null;

    /**
     * Buyer information, if provided.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface|null $buyer
     * @return self
     */
    public function setBuyer(BuyerInterface|null $buyer): self;

    /**
     * ISO 4217 currency code. Determined by the seller based on context or request.
     *
     * @return string
     */
    public function getCurrency(): string;

    /**
     * ISO 4217 currency code. Determined by the seller based on context or request.
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency(string $currency): self;

    /**
     * Estimated cost breakdown. May be partial (e.g., tax omitted if address is unknown). Totals are estimates until checkout.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[]
     */
    public function getTotals(): array;

    /**
     * Estimated cost breakdown. May be partial (e.g., tax omitted if address is unknown). Totals are estimates until checkout.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[] $totals
     * @return self
     */
    public function setTotals(array $totals): self;

    /**
     * Validation messages, warnings, or informational notices (e.g., low stock, price changes).
     *
     * @return array<\Magebit\AcpSpec\Api\AgenticCheckout\MessageInfoInterface|\Magebit\AcpSpec\Api\AgenticCheckout\MessageWarningInterface|\Magebit\AcpSpec\Api\AgenticCheckout\MessageErrorInterface>|null
     */
    public function getMessages(): array|null;

    /**
     * Validation messages, warnings, or informational notices (e.g., low stock, price changes).
     *
     * @param array<\Magebit\AcpSpec\Api\AgenticCheckout\MessageInfoInterface|\Magebit\AcpSpec\Api\AgenticCheckout\MessageWarningInterface|\Magebit\AcpSpec\Api\AgenticCheckout\MessageErrorInterface>|null $messages
     * @return self
     */
    public function setMessages(array|null $messages): self;

    /**
     * URL for cart handoff, sharing, or session recovery.
     *
     * @return string|null
     */
    public function getContinueUrl(): string|null;

    /**
     * URL for cart handoff, sharing, or session recovery.
     *
     * @param string|null $continueUrl
     * @return self
     */
    public function setContinueUrl(string|null $continueUrl): self;

    /**
     * RFC 3339 timestamp when the cart expires.
     *
     * @return string|null
     */
    public function getExpiresAt(): string|null;

    /**
     * RFC 3339 timestamp when the cart expires.
     *
     * @param string|null $expiresAt
     * @return self
     */
    public function setExpiresAt(string|null $expiresAt): self;
}
