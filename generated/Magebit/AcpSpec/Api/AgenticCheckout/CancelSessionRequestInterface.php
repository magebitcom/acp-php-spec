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
 * Request to cancel a checkout session
 */
interface CancelSessionRequestInterface
{
    public const KEY_INTENT_TRACE = 'intent_trace';

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\IntentTraceInterface|null
     */
    public function getIntentTrace(): IntentTraceInterface|null;

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\IntentTraceInterface|null $intentTrace
     * @return self
     */
    public function setIntentTrace(IntentTraceInterface|null $intentTrace): self;
}
