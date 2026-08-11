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

use Magebit\AcpSpec\Api\AgenticCheckout\OrderConfirmationInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Order confirmation details including order number and tracking information
 */
class OrderConfirmation extends SpecObject implements OrderConfirmationInterface
{
    /**
     * @return string|null
     */
    public function getConfirmationNumber(): string|null
    {
        return $this->stringOrNull(self::KEY_CONFIRMATION_NUMBER);
    }

    /**
     * @param string|null $confirmationNumber
     * @return self
     */
    public function setConfirmationNumber(string|null $confirmationNumber): self
    {
        return $this->set(self::KEY_CONFIRMATION_NUMBER, $confirmationNumber);
    }

    /**
     * @return bool|null
     */
    public function getConfirmationEmailSent(): bool|null
    {
        return $this->boolOrNull(self::KEY_CONFIRMATION_EMAIL_SENT);
    }

    /**
     * @param bool|null $confirmationEmailSent
     * @return self
     */
    public function setConfirmationEmailSent(bool|null $confirmationEmailSent): self
    {
        return $this->set(self::KEY_CONFIRMATION_EMAIL_SENT, $confirmationEmailSent);
    }

    /**
     * @return string|null
     */
    public function getReceiptUrl(): string|null
    {
        return $this->stringOrNull(self::KEY_RECEIPT_URL);
    }

    /**
     * @param string|null $receiptUrl
     * @return self
     */
    public function setReceiptUrl(string|null $receiptUrl): self
    {
        return $this->set(self::KEY_RECEIPT_URL, $receiptUrl);
    }

    /**
     * @return string|null
     */
    public function getInvoiceNumber(): string|null
    {
        return $this->stringOrNull(self::KEY_INVOICE_NUMBER);
    }

    /**
     * @param string|null $invoiceNumber
     * @return self
     */
    public function setInvoiceNumber(string|null $invoiceNumber): self
    {
        return $this->set(self::KEY_INVOICE_NUMBER, $invoiceNumber);
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
