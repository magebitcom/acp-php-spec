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

use Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInstrumentCredentialInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInstrumentInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Payment instrument details
 */
class PaymentDataInstrument extends SpecObject implements PaymentDataInstrumentInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->requireString(self::KEY_TYPE);
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType(string $type): self
    {
        return $this->set(self::KEY_TYPE, $type);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInstrumentCredentialInterface
     */
    public function getCredential(): PaymentDataInstrumentCredentialInterface
    {
        return $this->requireInstance(self::KEY_CREDENTIAL, \Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInstrumentCredentialInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\PaymentDataInstrumentCredentialInterface $credential
     * @return self
     */
    public function setCredential(PaymentDataInstrumentCredentialInterface $credential): self
    {
        return $this->set(self::KEY_CREDENTIAL, $credential);
    }
}
