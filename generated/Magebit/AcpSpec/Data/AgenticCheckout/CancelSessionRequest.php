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

use Magebit\AcpSpec\Api\AgenticCheckout\CancelSessionRequestInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\IntentTraceInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Request to cancel a checkout session
 */
class CancelSessionRequest extends SpecObject implements CancelSessionRequestInterface
{
    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\IntentTraceInterface|null
     */
    public function getIntentTrace(): IntentTraceInterface|null
    {
        return $this->instanceOrNull(self::KEY_INTENT_TRACE, \Magebit\AcpSpec\Api\AgenticCheckout\IntentTraceInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\IntentTraceInterface|null $intentTrace
     * @return self
     */
    public function setIntentTrace(IntentTraceInterface|null $intentTrace): self
    {
        return $this->set(self::KEY_INTENT_TRACE, $intentTrace);
    }
}
