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
 * Payment configuration with handlers
 */
interface PaymentInterface
{
    public const KEY_HANDLERS = 'handlers';

    /**
     * Available payment handlers
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\PaymentHandlerInterface[]
     */
    public function getHandlers(): array;

    /**
     * Available payment handlers
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\PaymentHandlerInterface[] $handlers
     * @return self
     */
    public function setHandlers(array $handlers): self;
}
