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
 * Request to update an existing checkout session
 */
interface CheckoutSessionUpdateRequestInterface
{
    public const KEY_BUYER = 'buyer';
    public const KEY_LINE_ITEMS = 'line_items';
    public const KEY_FULFILLMENT_DETAILS = 'fulfillment_details';
    public const KEY_FULFILLMENT_GROUPS = 'fulfillment_groups';
    public const KEY_SELECTED_FULFILLMENT_OPTIONS = 'selected_fulfillment_options';
    public const KEY_COUPONS = 'coupons';
    public const KEY_DISCOUNTS = 'discounts';
    public const KEY_ORDER_NOTES = 'order_notes';

    /**
     * Updated buyer information
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface|null
     */
    public function getBuyer(): BuyerInterface|null;

    /**
     * Updated buyer information
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface|null $buyer
     * @return self
     */
    public function setBuyer(BuyerInterface|null $buyer): self;

    /**
     * Items to update in the checkout session
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface[]|null
     */
    public function getLineItems(): array|null;

    /**
     * Items to update in the checkout session
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface[]|null $lineItems
     * @return self
     */
    public function setLineItems(array|null $lineItems): self;

    /**
     * Updated fulfillment contact and address
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDetailsInterface|null
     */
    public function getFulfillmentDetails(): FulfillmentDetailsInterface|null;

    /**
     * Updated fulfillment contact and address
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDetailsInterface|null $fulfillmentDetails
     * @return self
     */
    public function setFulfillmentDetails(FulfillmentDetailsInterface|null $fulfillmentDetails): self;

    /**
     * Updated fulfillment groupings
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentGroupInterface[]|null
     */
    public function getFulfillmentGroups(): array|null;

    /**
     * Updated fulfillment groupings
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentGroupInterface[]|null $fulfillmentGroups
     * @return self
     */
    public function setFulfillmentGroups(array|null $fulfillmentGroups): self;

    /**
     * Fulfillment option selected by the buyer
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\SelectedFulfillmentOptionInterface[]|null
     */
    public function getSelectedFulfillmentOptions(): array|null;

    /**
     * Fulfillment option selected by the buyer
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\SelectedFulfillmentOptionInterface[]|null $selectedFulfillmentOptions
     * @return self
     */
    public function setSelectedFulfillmentOptions(array|null $selectedFulfillmentOptions): self;

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
     * Discount codes to apply. Replaces previously submitted codes.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\DiscountsRequestInterface|null
     */
    public function getDiscounts(): DiscountsRequestInterface|null;

    /**
     * Discount codes to apply. Replaces previously submitted codes.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\DiscountsRequestInterface|null $discounts
     * @return self
     */
    public function setDiscounts(DiscountsRequestInterface|null $discounts): self;

    /**
     * Optional customer/order notes.
     *
     * @return string|null
     */
    public function getOrderNotes(): string|null;

    /**
     * Optional customer/order notes.
     *
     * @param string|null $orderNotes
     * @return self
     */
    public function setOrderNotes(string|null $orderNotes): self;
}
