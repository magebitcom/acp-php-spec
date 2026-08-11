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
 * Request to update a cart. Full replacement — the agent MUST send the complete desired cart state.
 */
interface CartUpdateRequestInterface
{
    public const KEY_LINE_ITEMS = 'line_items';
    public const KEY_BUYER = 'buyer';

    /**
     * Complete list of items (replaces existing cart contents).
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface[]
     */
    public function getLineItems(): array;

    /**
     * Complete list of items (replaces existing cart contents).
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface[] $lineItems
     * @return self
     */
    public function setLineItems(array $lineItems): self;

    /**
     * Updated buyer information.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface|null
     */
    public function getBuyer(): BuyerInterface|null;

    /**
     * Updated buyer information.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface|null $buyer
     * @return self
     */
    public function setBuyer(BuyerInterface|null $buyer): self;
}
