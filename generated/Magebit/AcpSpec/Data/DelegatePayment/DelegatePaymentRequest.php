<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\DelegatePayment;

use Magebit\AcpSpec\Api\DelegatePayment\AddressInterface;
use Magebit\AcpSpec\Api\DelegatePayment\AllowanceInterface;
use Magebit\AcpSpec\Api\DelegatePayment\DelegatePaymentRequestInterface;
use Magebit\AcpSpec\Api\DelegatePayment\PaymentMethodCardInterface;
use Magebit\AcpSpec\Api\DelegatePayment\RiskSignalInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Request to tokenize a payment method for delegated use by a merchant
 */
class DelegatePaymentRequest extends SpecObject implements DelegatePaymentRequestInterface
{
    /** @var string[] */
    protected array $jsonObjectKeys = ['metadata'];

    /**
     * @return \Magebit\AcpSpec\Api\DelegatePayment\PaymentMethodCardInterface
     */
    public function getPaymentMethod(): PaymentMethodCardInterface
    {
        return $this->requireInstance(self::KEY_PAYMENT_METHOD, \Magebit\AcpSpec\Api\DelegatePayment\PaymentMethodCardInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\DelegatePayment\PaymentMethodCardInterface $paymentMethod
     * @return self
     */
    public function setPaymentMethod(PaymentMethodCardInterface $paymentMethod): self
    {
        return $this->set(self::KEY_PAYMENT_METHOD, $paymentMethod);
    }

    /**
     * @return \Magebit\AcpSpec\Api\DelegatePayment\AllowanceInterface
     */
    public function getAllowance(): AllowanceInterface
    {
        return $this->requireInstance(self::KEY_ALLOWANCE, \Magebit\AcpSpec\Api\DelegatePayment\AllowanceInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\DelegatePayment\AllowanceInterface $allowance
     * @return self
     */
    public function setAllowance(AllowanceInterface $allowance): self
    {
        return $this->set(self::KEY_ALLOWANCE, $allowance);
    }

    /**
     * @return \Magebit\AcpSpec\Api\DelegatePayment\AddressInterface|null
     */
    public function getBillingAddress(): AddressInterface|null
    {
        return $this->instanceOrNull(self::KEY_BILLING_ADDRESS, \Magebit\AcpSpec\Api\DelegatePayment\AddressInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\DelegatePayment\AddressInterface|null $billingAddress
     * @return self
     */
    public function setBillingAddress(AddressInterface|null $billingAddress): self
    {
        return $this->set(self::KEY_BILLING_ADDRESS, $billingAddress);
    }

    /**
     * @return \Magebit\AcpSpec\Api\DelegatePayment\RiskSignalInterface[]
     */
    public function getRiskSignals(): array
    {
        return $this->instanceList(self::KEY_RISK_SIGNALS, \Magebit\AcpSpec\Api\DelegatePayment\RiskSignalInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\DelegatePayment\RiskSignalInterface[] $riskSignals
     * @return self
     */
    public function setRiskSignals(array $riskSignals): self
    {
        return $this->set(self::KEY_RISK_SIGNALS, $riskSignals);
    }

    /**
     * @return array<string, string>
     */
    public function getMetadata(): array
    {
        return $this->getArray(self::KEY_METADATA);
    }

    /**
     * @param array<string, string> $metadata
     * @return self
     */
    public function setMetadata(array $metadata): self
    {
        return $this->set(self::KEY_METADATA, $metadata);
    }
}
