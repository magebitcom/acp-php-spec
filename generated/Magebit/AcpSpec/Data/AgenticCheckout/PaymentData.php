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

use Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInstrumentInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Payment instrument data collected from the buyer (e.g., card details, wallet tokens)
 */
class PaymentData extends SpecObject implements PaymentDataInterface
{
    /**
     * @return string|null
     */
    public function getHandlerId(): string|null
    {
        return $this->stringOrNull(self::KEY_HANDLER_ID);
    }

    /**
     * @param string|null $handlerId
     * @return self
     */
    public function setHandlerId(string|null $handlerId): self
    {
        return $this->set(self::KEY_HANDLER_ID, $handlerId);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInstrumentInterface|null
     */
    public function getInstrument(): PaymentDataInstrumentInterface|null
    {
        return $this->instanceOrNull(self::KEY_INSTRUMENT, \Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInstrumentInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInstrumentInterface|null $instrument
     * @return self
     */
    public function setInstrument(PaymentDataInstrumentInterface|null $instrument): self
    {
        return $this->set(self::KEY_INSTRUMENT, $instrument);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface|null
     */
    public function getBillingAddress(): AddressInterface|null
    {
        return $this->instanceOrNull(self::KEY_BILLING_ADDRESS, \Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AddressInterface|null $billingAddress
     * @return self
     */
    public function setBillingAddress(AddressInterface|null $billingAddress): self
    {
        return $this->set(self::KEY_BILLING_ADDRESS, $billingAddress);
    }

    /**
     * @return string|null
     */
    public function getPurchaseOrderNumber(): string|null
    {
        return $this->stringOrNull(self::KEY_PURCHASE_ORDER_NUMBER);
    }

    /**
     * @param string|null $purchaseOrderNumber
     * @return self
     */
    public function setPurchaseOrderNumber(string|null $purchaseOrderNumber): self
    {
        return $this->set(self::KEY_PURCHASE_ORDER_NUMBER, $purchaseOrderNumber);
    }

    /**
     * @return string|null
     */
    public function getPaymentTerms(): string|null
    {
        return $this->stringOrNull(self::KEY_PAYMENT_TERMS);
    }

    /**
     * @param string|null $paymentTerms
     * @return self
     */
    public function setPaymentTerms(string|null $paymentTerms): self
    {
        return $this->set(self::KEY_PAYMENT_TERMS, $paymentTerms);
    }

    /**
     * @return string|null
     */
    public function getDueDate(): string|null
    {
        return $this->stringOrNull(self::KEY_DUE_DATE);
    }

    /**
     * @param string|null $dueDate
     * @return self
     */
    public function setDueDate(string|null $dueDate): self
    {
        return $this->set(self::KEY_DUE_DATE, $dueDate);
    }

    /**
     * @return bool|null
     */
    public function getApprovalRequired(): bool|null
    {
        return $this->boolOrNull(self::KEY_APPROVAL_REQUIRED);
    }

    /**
     * @param bool|null $approvalRequired
     * @return self
     */
    public function setApprovalRequired(bool|null $approvalRequired): self
    {
        return $this->set(self::KEY_APPROVAL_REQUIRED, $approvalRequired);
    }
}
