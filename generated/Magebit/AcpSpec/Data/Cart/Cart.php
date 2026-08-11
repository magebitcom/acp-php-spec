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
use Magebit\AcpSpec\Api\AgenticCheckout\LineItemInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\MessageErrorInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\MessageInfoInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\MessageWarningInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface;
use Magebit\AcpSpec\Api\Cart\CartInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * A shopping cart with estimated pricing. Carts provide a lightweight pre-checkout phase for item collection without payment configuration or status lifecycle.
 */
class Cart extends SpecObject implements CartInterface
{
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
     * @return array<\Magebit\AcpSpec\Api\AgenticCheckout\MessageInfoInterface|\Magebit\AcpSpec\Api\AgenticCheckout\MessageWarningInterface|\Magebit\AcpSpec\Api\AgenticCheckout\MessageErrorInterface>|null
     */
    public function getMessages(): array|null
    {
        return $this->arrayOrNull(self::KEY_MESSAGES);
    }

    /**
     * @param array<\Magebit\AcpSpec\Api\AgenticCheckout\MessageInfoInterface|\Magebit\AcpSpec\Api\AgenticCheckout\MessageWarningInterface|\Magebit\AcpSpec\Api\AgenticCheckout\MessageErrorInterface>|null $messages
     * @return self
     */
    public function setMessages(array|null $messages): self
    {
        return $this->set(self::KEY_MESSAGES, $messages);
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
}
