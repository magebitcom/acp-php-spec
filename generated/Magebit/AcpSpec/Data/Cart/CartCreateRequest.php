<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\Cart;

use Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface;
use Magebit\AcpSpec\Api\Cart\CartCreateRequestInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Request to create a new cart.
 */
class CartCreateRequest extends SpecObject implements CartCreateRequestInterface
{
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
}
