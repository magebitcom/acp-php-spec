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
 * Payment instrument details
 */
interface PaymentDataInstrumentInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_CREDENTIAL = 'credential';

    /**
     * Instrument type (e.g., card, wallet_token)
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Instrument type (e.g., card, wallet_token)
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Payment credential
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInstrumentCredentialInterface
     */
    public function getCredential(): PaymentDataInstrumentCredentialInterface;

    /**
     * Payment credential
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInstrumentCredentialInterface $credential
     * @return self
     */
    public function setCredential(PaymentDataInstrumentCredentialInterface $credential): self;
}
