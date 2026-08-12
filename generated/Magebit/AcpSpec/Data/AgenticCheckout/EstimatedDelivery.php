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

use Magebit\AcpSpec\Api\AgenticCheckout\EstimatedDeliveryInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Estimated delivery date range for a fulfillment option
 */
class EstimatedDelivery extends SpecObject implements EstimatedDeliveryInterface
{
    /**
     * @return string
     */
    public function getEarliest(): string
    {
        return $this->requireString(self::KEY_EARLIEST);
    }

    /**
     * @param string $earliest
     * @return self
     */
    public function setEarliest(string $earliest): self
    {
        return $this->set(self::KEY_EARLIEST, $earliest);
    }

    /**
     * @return string
     */
    public function getLatest(): string
    {
        return $this->requireString(self::KEY_LATEST);
    }

    /**
     * @param string $latest
     * @return self
     */
    public function setLatest(string $latest): self
    {
        return $this->set(self::KEY_LATEST, $latest);
    }
}
