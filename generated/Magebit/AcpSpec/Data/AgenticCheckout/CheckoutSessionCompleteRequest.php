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

use Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationResultInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\CheckoutSessionCompleteRequestInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\MarketingConsentInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\RiskSignalsInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Request to complete a checkout session and create an order
 */
class CheckoutSessionCompleteRequest extends SpecObject implements CheckoutSessionCompleteRequestInterface
{
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
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInterface
     */
    public function getPaymentData(): PaymentDataInterface
    {
        return $this->requireInstance(self::KEY_PAYMENT_DATA, \Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInterface $paymentData
     * @return self
     */
    public function setPaymentData(PaymentDataInterface $paymentData): self
    {
        return $this->set(self::KEY_PAYMENT_DATA, $paymentData);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationResultInterface|null
     */
    public function getAuthenticationResult(): AuthenticationResultInterface|null
    {
        return $this->instanceOrNull(self::KEY_AUTHENTICATION_RESULT, \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationResultInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationResultInterface|null $authenticationResult
     * @return self
     */
    public function setAuthenticationResult(AuthenticationResultInterface|null $authenticationResult): self
    {
        return $this->set(self::KEY_AUTHENTICATION_RESULT, $authenticationResult);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionInterface|null
     */
    public function getAffiliateAttribution(): AffiliateAttributionInterface|null
    {
        return $this->instanceOrNull(self::KEY_AFFILIATE_ATTRIBUTION, \Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionInterface|null $affiliateAttribution
     * @return self
     */
    public function setAffiliateAttribution(AffiliateAttributionInterface|null $affiliateAttribution): self
    {
        return $this->set(self::KEY_AFFILIATE_ATTRIBUTION, $affiliateAttribution);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\RiskSignalsInterface|null
     */
    public function getRiskSignals(): RiskSignalsInterface|null
    {
        return $this->instanceOrNull(self::KEY_RISK_SIGNALS, \Magebit\AcpSpec\Api\AgenticCheckout\RiskSignalsInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\RiskSignalsInterface|null $riskSignals
     * @return self
     */
    public function setRiskSignals(RiskSignalsInterface|null $riskSignals): self
    {
        return $this->set(self::KEY_RISK_SIGNALS, $riskSignals);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\MarketingConsentInterface[]|null
     */
    public function getMarketingConsents(): array|null
    {
        return $this->instanceListOrNull(self::KEY_MARKETING_CONSENTS, \Magebit\AcpSpec\Api\AgenticCheckout\MarketingConsentInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\MarketingConsentInterface[]|null $marketingConsents
     * @return self
     */
    public function setMarketingConsents(array|null $marketingConsents): self
    {
        return $this->set(self::KEY_MARKETING_CONSENTS, $marketingConsents);
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
