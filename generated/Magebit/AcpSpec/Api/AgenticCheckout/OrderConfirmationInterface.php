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
 * Order confirmation details including order number and tracking information
 */
interface OrderConfirmationInterface
{
    public const KEY_CONFIRMATION_NUMBER = 'confirmation_number';
    public const KEY_CONFIRMATION_EMAIL_SENT = 'confirmation_email_sent';
    public const KEY_RECEIPT_URL = 'receipt_url';
    public const KEY_INVOICE_NUMBER = 'invoice_number';
    public const KEY_ORDER_NOTES = 'order_notes';
    public const CONSTRAINTS = ['receipt_url' => ['format' => 'uri']];

    /**
     * Order confirmation number
     *
     * @return string|null
     */
    public function getConfirmationNumber(): string|null;

    /**
     * Order confirmation number
     *
     * @param string|null $confirmationNumber
     * @return self
     */
    public function setConfirmationNumber(string|null $confirmationNumber): self;

    /**
     * Whether a confirmation email has been sent
     *
     * @return bool|null
     */
    public function getConfirmationEmailSent(): bool|null;

    /**
     * Whether a confirmation email has been sent
     *
     * @param bool|null $confirmationEmailSent
     * @return self
     */
    public function setConfirmationEmailSent(bool|null $confirmationEmailSent): self;

    /**
     * URL to the order receipt
     *
     * @return string|null
     */
    public function getReceiptUrl(): string|null;

    /**
     * URL to the order receipt
     *
     * @param string|null $receiptUrl
     * @return self
     */
    public function setReceiptUrl(string|null $receiptUrl): self;

    /**
     * Invoice number if generated
     *
     * @return string|null
     */
    public function getInvoiceNumber(): string|null;

    /**
     * Invoice number if generated
     *
     * @param string|null $invoiceNumber
     * @return self
     */
    public function setInvoiceNumber(string|null $invoiceNumber): self;

    /**
     * Echo of order_notes attached to the order.
     *
     * @return string|null
     */
    public function getOrderNotes(): string|null;

    /**
     * Echo of order_notes attached to the order.
     *
     * @param string|null $orderNotes
     * @return self
     */
    public function setOrderNotes(string|null $orderNotes): self;
}
