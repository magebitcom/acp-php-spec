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

use Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\CheckoutSessionUpdateRequestInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\DiscountsRequestInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDetailsInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentGroupInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\SelectedFulfillmentOptionInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Request to update an existing checkout session
 */
class CheckoutSessionUpdateRequest extends SpecObject implements CheckoutSessionUpdateRequestInterface
{
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
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface[]|null
     */
    public function getLineItems(): array|null
    {
        return $this->instanceListOrNull(self::KEY_LINE_ITEMS, \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface[]|null $lineItems
     * @return self
     */
    public function setLineItems(array|null $lineItems): self
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
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\DiscountsRequestInterface|null
     */
    public function getDiscounts(): DiscountsRequestInterface|null
    {
        return $this->instanceOrNull(self::KEY_DISCOUNTS, \Magebit\AcpSpec\Api\AgenticCheckout\DiscountsRequestInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\DiscountsRequestInterface|null $discounts
     * @return self
     */
    public function setDiscounts(DiscountsRequestInterface|null $discounts): self
    {
        return $this->set(self::KEY_DISCOUNTS, $discounts);
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
