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
use Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface;

/**
 * Request to create a new cart.
 */
interface CartCreateRequestInterface
{
    public const KEY_LINE_ITEMS = 'line_items';
    public const KEY_BUYER = 'buyer';
    public const KEY_LOCALE = 'locale';
    public const CONSTRAINTS = ['line_items' => ['minItems' => 1]];

    /**
     * Items to add to the cart.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface[]
     */
    public function getLineItems(): array;

    /**
     * Items to add to the cart.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface[] $lineItems
     * @return self
     */
    public function setLineItems(array $lineItems): self;

    /**
     * Buyer information for personalized estimates.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface|null
     */
    public function getBuyer(): BuyerInterface|null;

    /**
     * Buyer information for personalized estimates.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface|null $buyer
     * @return self
     */
    public function setBuyer(BuyerInterface|null $buyer): self;

    /**
     * Locale code for content localization (e.g., 'en-US').
     *
     * @return string|null
     */
    public function getLocale(): string|null;

    /**
     * Locale code for content localization (e.g., 'en-US').
     *
     * @param string|null $locale
     * @return self
     */
    public function setLocale(string|null $locale): self;
}
