<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\DelegatePayment;

/**
 * Request to tokenize a payment method for delegated use by a merchant
 */
interface DelegatePaymentRequestInterface
{
    public const KEY_PAYMENT_METHOD = 'payment_method';
    public const KEY_ALLOWANCE = 'allowance';
    public const KEY_BILLING_ADDRESS = 'billing_address';
    public const KEY_RISK_SIGNALS = 'risk_signals';
    public const KEY_METADATA = 'metadata';

    /**
     * The card payment method to tokenize for delegated use
     *
     * @return \Magebit\AcpSpec\Api\DelegatePayment\PaymentMethodCardInterface
     */
    public function getPaymentMethod(): PaymentMethodCardInterface;

    /**
     * The card payment method to tokenize for delegated use
     *
     * @param \Magebit\AcpSpec\Api\DelegatePayment\PaymentMethodCardInterface $paymentMethod
     * @return self
     */
    public function setPaymentMethod(PaymentMethodCardInterface $paymentMethod): self;

    /**
     * Constraints on how the payment method can be used
     *
     * @return \Magebit\AcpSpec\Api\DelegatePayment\AllowanceInterface
     */
    public function getAllowance(): AllowanceInterface;

    /**
     * Constraints on how the payment method can be used
     *
     * @param \Magebit\AcpSpec\Api\DelegatePayment\AllowanceInterface $allowance
     * @return self
     */
    public function setAllowance(AllowanceInterface $allowance): self;

    /**
     * Billing address associated with the payment method
     *
     * @return \Magebit\AcpSpec\Api\DelegatePayment\AddressInterface|null
     */
    public function getBillingAddress(): AddressInterface|null;

    /**
     * Billing address associated with the payment method
     *
     * @param \Magebit\AcpSpec\Api\DelegatePayment\AddressInterface|null $billingAddress
     * @return self
     */
    public function setBillingAddress(AddressInterface|null $billingAddress): self;

    /**
     * List of risk assessment signals from fraud detection
     *
     * @return \Magebit\AcpSpec\Api\DelegatePayment\RiskSignalInterface[]
     */
    public function getRiskSignals(): array;

    /**
     * List of risk assessment signals from fraud detection
     *
     * @param \Magebit\AcpSpec\Api\DelegatePayment\RiskSignalInterface[] $riskSignals
     * @return self
     */
    public function setRiskSignals(array $riskSignals): self;

    /**
     * Additional metadata for the request
     *
     * @return array<string, string>
     */
    public function getMetadata(): array;

    /**
     * Additional metadata for the request
     *
     * @param array<string, string> $metadata
     * @return self
     */
    public function setMetadata(array $metadata): self;
}
