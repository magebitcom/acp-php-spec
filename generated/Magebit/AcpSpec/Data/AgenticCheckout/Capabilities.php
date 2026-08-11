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

use Magebit\AcpSpec\Api\AgenticCheckout\CapabilitiesInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\InterventionCapabilitiesInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\PaymentInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Capabilities object used in requests and responses. Context determines the party: requests are from Agents, responses are from Sellers. Seller responses contain the intersection of supported interventions.
 */
class Capabilities extends SpecObject implements CapabilitiesInterface
{
    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\PaymentInterface|null
     */
    public function getPayment(): PaymentInterface|null
    {
        return $this->instanceOrNull(self::KEY_PAYMENT, \Magebit\AcpSpec\Api\AgenticCheckout\PaymentInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\PaymentInterface|null $payment
     * @return self
     */
    public function setPayment(PaymentInterface|null $payment): self
    {
        return $this->set(self::KEY_PAYMENT, $payment);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\InterventionCapabilitiesInterface|null
     */
    public function getInterventions(): InterventionCapabilitiesInterface|null
    {
        return $this->instanceOrNull(self::KEY_INTERVENTIONS, \Magebit\AcpSpec\Api\AgenticCheckout\InterventionCapabilitiesInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\InterventionCapabilitiesInterface|null $interventions
     * @return self
     */
    public function setInterventions(InterventionCapabilitiesInterface|null $interventions): self
    {
        return $this->set(self::KEY_INTERVENTIONS, $interventions);
    }

    /**
     * @return array<mixed>|null
     */
    public function getExtensions(): array|null
    {
        return $this->arrayOrNull(self::KEY_EXTENSIONS);
    }

    /**
     * @param array<mixed>|null $extensions
     * @return self
     */
    public function setExtensions(array|null $extensions): self
    {
        return $this->set(self::KEY_EXTENSIONS, $extensions);
    }
}
