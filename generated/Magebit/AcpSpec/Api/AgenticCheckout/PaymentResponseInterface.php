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
 * Payment configuration returned by the seller including accepted methods and handlers
 */
interface PaymentResponseInterface
{
    public const KEY_PROVIDER = 'provider';
    public const KEY_INSTRUMENTS = 'instruments';
    public const KEY_HANDLERS = 'handlers';

    /**
     * Payment provider identifier
     *
     * @return string|null
     */
    public function getProvider(): string|null;

    /**
     * Payment provider identifier
     *
     * @param string|null $provider
     * @return self
     */
    public function setProvider(string|null $provider): self;

    /**
     * Available payment instruments
     *
     * @return array[]|null
     */
    public function getInstruments(): array|null;

    /**
     * Available payment instruments
     *
     * @param array[]|null $instruments
     * @return self
     */
    public function setInstruments(array|null $instruments): self;

    /**
     * Available payment handlers
     *
     * @return array[]|null
     */
    public function getHandlers(): array|null;

    /**
     * Available payment handlers
     *
     * @param array[]|null $handlers
     * @return self
     */
    public function setHandlers(array|null $handlers): self;
}
