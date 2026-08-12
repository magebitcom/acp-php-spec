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

use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionLocalDeliveryDeliveryWindowInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Expected delivery time window
 */
class FulfillmentOptionLocalDeliveryDeliveryWindow extends SpecObject implements FulfillmentOptionLocalDeliveryDeliveryWindowInterface
{
    /**
     * @return string
     */
    public function getStart(): string
    {
        return $this->requireString(self::KEY_START);
    }

    /**
     * @param string $start
     * @return self
     */
    public function setStart(string $start): self
    {
        return $this->set(self::KEY_START, $start);
    }

    /**
     * @return string
     */
    public function getEnd(): string
    {
        return $this->requireString(self::KEY_END);
    }

    /**
     * @param string $end
     * @return self
     */
    public function setEnd(string $end): self
    {
        return $this->set(self::KEY_END, $end);
    }
}
