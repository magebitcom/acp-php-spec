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
 * Capabilities object used in requests and responses. Context determines the party: requests are from Agents, responses are from Sellers. Seller responses contain the intersection of supported interventions.
 */
interface CapabilitiesInterface
{
    public const KEY_PAYMENT = 'payment';
    public const KEY_INTERVENTIONS = 'interventions';
    public const KEY_EXTENSIONS = 'extensions';

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\PaymentInterface|null
     */
    public function getPayment(): PaymentInterface|null;

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\PaymentInterface|null $payment
     * @return self
     */
    public function setPayment(PaymentInterface|null $payment): self;

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\InterventionCapabilitiesInterface|null
     */
    public function getInterventions(): InterventionCapabilitiesInterface|null;

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\InterventionCapabilitiesInterface|null $interventions
     * @return self
     */
    public function setInterventions(InterventionCapabilitiesInterface|null $interventions): self;

    /**
     * Extensions supported by the party. Requests: array of extension identifiers. Responses: array of extension declaration objects.
     *
     * @return array<mixed>|null
     */
    public function getExtensions(): array|null;

    /**
     * Extensions supported by the party. Requests: array of extension identifiers. Responses: array of extension declaration objects.
     *
     * @param array<mixed>|null $extensions
     * @return self
     */
    public function setExtensions(array|null $extensions): self;
}
