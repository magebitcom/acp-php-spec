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

use Magebit\AcpSpec\Api\AgenticCheckout\PaymentHandlerInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\PaymentInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Payment configuration with handlers
 */
class Payment extends SpecObject implements PaymentInterface
{
    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\PaymentHandlerInterface[]
     */
    public function getHandlers(): array
    {
        return $this->instanceList(self::KEY_HANDLERS, \Magebit\AcpSpec\Api\AgenticCheckout\PaymentHandlerInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\PaymentHandlerInterface[] $handlers
     * @return self
     */
    public function setHandlers(array $handlers): self
    {
        return $this->set(self::KEY_HANDLERS, $handlers);
    }
}
