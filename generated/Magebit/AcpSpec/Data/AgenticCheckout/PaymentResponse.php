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

use Magebit\AcpSpec\Api\AgenticCheckout\PaymentResponseInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Payment configuration returned by the seller including accepted methods and handlers
 */
class PaymentResponse extends SpecObject implements PaymentResponseInterface
{
    /**
     * @return string|null
     */
    public function getProvider(): string|null
    {
        return $this->stringOrNull(self::KEY_PROVIDER);
    }

    /**
     * @param string|null $provider
     * @return self
     */
    public function setProvider(string|null $provider): self
    {
        return $this->set(self::KEY_PROVIDER, $provider);
    }

    /**
     * @return array[]|null
     */
    public function getInstruments(): array|null
    {
        return $this->arrayOrNull(self::KEY_INSTRUMENTS);
    }

    /**
     * @param array[]|null $instruments
     * @return self
     */
    public function setInstruments(array|null $instruments): self
    {
        return $this->set(self::KEY_INSTRUMENTS, $instruments);
    }

    /**
     * @return array[]|null
     */
    public function getHandlers(): array|null
    {
        return $this->arrayOrNull(self::KEY_HANDLERS);
    }

    /**
     * @param array[]|null $handlers
     * @return self
     */
    public function setHandlers(array|null $handlers): self
    {
        return $this->set(self::KEY_HANDLERS, $handlers);
    }
}
