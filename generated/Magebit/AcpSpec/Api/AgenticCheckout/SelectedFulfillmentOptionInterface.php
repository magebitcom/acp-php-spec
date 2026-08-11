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
 * Fulfillment option selected by the buyer for specific line items
 */
interface SelectedFulfillmentOptionInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_OPTION_ID = 'option_id';
    public const KEY_ITEM_IDS = 'item_ids';
    public const TYPE_SHIPPING = 'shipping';
    public const TYPE_DIGITAL = 'digital';
    public const TYPE_PICKUP = 'pickup';
    public const TYPE_LOCAL_DELIVERY = 'local_delivery';

    /**
     * Type of fulfillment option selected
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Type of fulfillment option selected
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * ID of the selected fulfillment option
     *
     * @return string
     */
    public function getOptionId(): string;

    /**
     * ID of the selected fulfillment option
     *
     * @param string $optionId
     * @return self
     */
    public function setOptionId(string $optionId): self;

    /**
     * List of line item IDs associated with this fulfillment option
     *
     * @return string[]
     */
    public function getItemIds(): array;

    /**
     * List of line item IDs associated with this fulfillment option
     *
     * @param string[] $itemIds
     * @return self
     */
    public function setItemIds(array $itemIds): self;
}
