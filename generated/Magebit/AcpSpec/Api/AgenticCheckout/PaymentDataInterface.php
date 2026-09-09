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
 * Payment instrument data collected from the buyer (e.g., card details, wallet tokens)
 */
interface PaymentDataInterface
{
    public const KEY_HANDLER_ID = 'handler_id';
    public const KEY_INSTRUMENT = 'instrument';
    public const KEY_BILLING_ADDRESS = 'billing_address';
    public const KEY_PURCHASE_ORDER_NUMBER = 'purchase_order_number';
    public const KEY_PAYMENT_TERMS = 'payment_terms';
    public const KEY_DUE_DATE = 'due_date';
    public const KEY_APPROVAL_REQUIRED = 'approval_required';
    public const PAYMENT_TERMS_IMMEDIATE = 'immediate';
    public const PAYMENT_TERMS_NET_15 = 'net_15';
    public const PAYMENT_TERMS_NET_30 = 'net_30';
    public const PAYMENT_TERMS_NET_60 = 'net_60';
    public const PAYMENT_TERMS_NET_90 = 'net_90';
    public const CONSTRAINTS = ['due_date' => ['format' => 'date-time']];

    /**
     * ID of the payment handler to use
     *
     * @return string|null
     */
    public function getHandlerId(): string|null;

    /**
     * ID of the payment handler to use
     *
     * @param string|null $handlerId
     * @return self
     */
    public function setHandlerId(string|null $handlerId): self;

    /**
     * Payment instrument details
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInstrumentInterface|null
     */
    public function getInstrument(): PaymentDataInstrumentInterface|null;

    /**
     * Payment instrument details
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInstrumentInterface|null $instrument
     * @return self
     */
    public function setInstrument(PaymentDataInstrumentInterface|null $instrument): self;

    /**
     * Billing address for the payment
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface|null
     */
    public function getBillingAddress(): AddressInterface|null;

    /**
     * Billing address for the payment
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface|null $billingAddress
     * @return self
     */
    public function setBillingAddress(AddressInterface|null $billingAddress): self;

    /**
     * Purchase order number
     *
     * @return string|null
     */
    public function getPurchaseOrderNumber(): string|null;

    /**
     * Purchase order number
     *
     * @param string|null $purchaseOrderNumber
     * @return self
     */
    public function setPurchaseOrderNumber(string|null $purchaseOrderNumber): self;

    /**
     * Payment terms for B2B transactions
     *
     * @return string|null
     */
    public function getPaymentTerms(): string|null;

    /**
     * Payment terms for B2B transactions
     *
     * @param string|null $paymentTerms
     * @return self
     */
    public function setPaymentTerms(string|null $paymentTerms): self;

    /**
     * RFC 3339 timestamp when payment is due
     *
     * @return string|null
     */
    public function getDueDate(): string|null;

    /**
     * RFC 3339 timestamp when payment is due
     *
     * @param string|null $dueDate
     * @return self
     */
    public function setDueDate(string|null $dueDate): self;

    /**
     * Whether this payment requires approval
     *
     * @return bool|null
     */
    public function getApprovalRequired(): bool|null;

    /**
     * Whether this payment requires approval
     *
     * @param bool|null $approvalRequired
     * @return self
     */
    public function setApprovalRequired(bool|null $approvalRequired): self;
}
