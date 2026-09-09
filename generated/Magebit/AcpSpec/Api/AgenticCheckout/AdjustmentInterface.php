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
 * A post-order change such as refund, credit, return, or dispute.
 */
interface AdjustmentInterface
{
    public const KEY_ID = 'id';
    public const KEY_TYPE = 'type';
    public const KEY_OCCURRED_AT = 'occurred_at';
    public const KEY_STATUS = 'status';
    public const KEY_LINE_ITEMS = 'line_items';
    public const KEY_AMOUNT = 'amount';
    public const KEY_CURRENCY = 'currency';
    public const KEY_DESCRIPTION = 'description';
    public const KEY_REASON = 'reason';
    public const CONSTRAINTS = ['occurred_at' => ['format' => 'date-time'], 'currency' => ['pattern' => '^[a-z]{3}$']];

    /**
     * Adjustment identifier
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Adjustment identifier
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * Type of adjustment. Implementations MUST accept unrecognized values gracefully. Defined values: 'refund', 'credit', 'return', 'exchange', 'price_adjustment', 'cancellation', 'dispute'. Use 'refund' for both full and partial refunds (distinguish by amount). 'credit' replaces 'store_credit'. 'dispute' covers chargebacks.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Type of adjustment. Implementations MUST accept unrecognized values gracefully. Defined values: 'refund', 'credit', 'return', 'exchange', 'price_adjustment', 'cancellation', 'dispute'. Use 'refund' for both full and partial refunds (distinguish by amount). 'credit' replaces 'store_credit'. 'dispute' covers chargebacks.
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * RFC 3339 timestamp when this adjustment occurred
     *
     * @return string
     */
    public function getOccurredAt(): string;

    /**
     * RFC 3339 timestamp when this adjustment occurred
     *
     * @param string $occurredAt
     * @return self
     */
    public function setOccurredAt(string $occurredAt): self;

    /**
     * Adjustment status. Implementations MUST accept unrecognized values gracefully. Defined values: 'pending', 'completed', 'failed'.
     *
     * @return string
     */
    public function getStatus(): string;

    /**
     * Adjustment status. Implementations MUST accept unrecognized values gracefully. Defined values: 'pending', 'completed', 'failed'.
     *
     * @param string $status
     * @return self
     */
    public function setStatus(string $status): self;

    /**
     * Which line items and quantities are affected
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\LineItemReferenceInterface[]|null
     */
    public function getLineItems(): array|null;

    /**
     * Which line items and quantities are affected
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\LineItemReferenceInterface[]|null $lineItems
     * @return self
     */
    public function setLineItems(array|null $lineItems): self;

    /**
     * Total amount credited to the buyer in minor currency units, inclusive of any applicable tax
     *
     * @return int|null
     */
    public function getAmount(): int|null;

    /**
     * Total amount credited to the buyer in minor currency units, inclusive of any applicable tax
     *
     * @param int|null $amount
     * @return self
     */
    public function setAmount(int|null $amount): self;

    /**
     * ISO 4217 currency code
     *
     * @return string|null
     */
    public function getCurrency(): string|null;

    /**
     * ISO 4217 currency code
     *
     * @param string|null $currency
     * @return self
     */
    public function setCurrency(string|null $currency): self;

    /**
     * Human-readable reason (e.g., 'Defective item')
     *
     * @return string|null
     */
    public function getDescription(): string|null;

    /**
     * Human-readable reason (e.g., 'Defective item')
     *
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self;

    /**
     * Structured reason code
     *
     * @return string|null
     */
    public function getReason(): string|null;

    /**
     * Structured reason code
     *
     * @param string|null $reason
     * @return self
     */
    public function setReason(string|null $reason): self;
}
