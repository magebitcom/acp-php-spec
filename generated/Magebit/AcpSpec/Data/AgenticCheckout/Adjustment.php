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

use Magebit\AcpSpec\Api\AgenticCheckout\AdjustmentInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\LineItemReferenceInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * A post-order change such as refund, credit, return, or dispute.
 */
class Adjustment extends SpecObject implements AdjustmentInterface
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
     * @return string
     */
    public function getType(): string
    {
        return $this->requireString(self::KEY_TYPE);
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType(string $type): self
    {
        return $this->set(self::KEY_TYPE, $type);
    }

    /**
     * @return string
     */
    public function getOccurredAt(): string
    {
        return $this->requireString(self::KEY_OCCURRED_AT);
    }

    /**
     * @param string $occurredAt
     * @return self
     */
    public function setOccurredAt(string $occurredAt): self
    {
        return $this->set(self::KEY_OCCURRED_AT, $occurredAt);
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
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\LineItemReferenceInterface[]|null
     */
    public function getLineItems(): array|null
    {
        return $this->instanceListOrNull(self::KEY_LINE_ITEMS, \Magebit\AcpSpec\Api\AgenticCheckout\LineItemReferenceInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\LineItemReferenceInterface[]|null $lineItems
     * @return self
     */
    public function setLineItems(array|null $lineItems): self
    {
        return $this->set(self::KEY_LINE_ITEMS, $lineItems);
    }

    /**
     * @return int|null
     */
    public function getAmount(): int|null
    {
        return $this->intOrNull(self::KEY_AMOUNT);
    }

    /**
     * @param int|null $amount
     * @return self
     */
    public function setAmount(int|null $amount): self
    {
        return $this->set(self::KEY_AMOUNT, $amount);
    }

    /**
     * @return string|null
     */
    public function getCurrency(): string|null
    {
        return $this->stringOrNull(self::KEY_CURRENCY);
    }

    /**
     * @param string|null $currency
     * @return self
     */
    public function setCurrency(string|null $currency): self
    {
        return $this->set(self::KEY_CURRENCY, $currency);
    }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
        return $this->stringOrNull(self::KEY_DESCRIPTION);
    }

    /**
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self
    {
        return $this->set(self::KEY_DESCRIPTION, $description);
    }

    /**
     * @return string|null
     */
    public function getReason(): string|null
    {
        return $this->stringOrNull(self::KEY_REASON);
    }

    /**
     * @param string|null $reason
     * @return self
     */
    public function setReason(string|null $reason): self
    {
        return $this->set(self::KEY_REASON, $reason);
    }
}
