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

use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionShippingInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Shipping fulfillment option with carrier, service level, and delivery estimates
 */
class FulfillmentOptionShipping extends SpecObject implements FulfillmentOptionShippingInterface
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
     * @return string
     */
    public function getId(): string
    {
        return $this->requireString(self::KEY_ID);
    }

    /**
     * @param string $id
     * @return self
     */
    public function setId(string $id): self
    {
        return $this->set(self::KEY_ID, $id);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->requireString(self::KEY_TITLE);
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(string $title): self
    {
        return $this->set(self::KEY_TITLE, $title);
    }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
        return $this->stringOrNull(self::KEY_DESCRIPTION);
    }

    /**
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self
    {
        return $this->set(self::KEY_DESCRIPTION, $description);
    }

    /**
     * @return string|null
     */
    public function getCarrier(): string|null
    {
        return $this->stringOrNull(self::KEY_CARRIER);
    }

    /**
     * @param string|null $carrier
     * @return self
     */
    public function setCarrier(string|null $carrier): self
    {
        return $this->set(self::KEY_CARRIER, $carrier);
    }

    /**
     * @return string|null
     */
    public function getEarliestDeliveryTime(): string|null
    {
        return $this->stringOrNull(self::KEY_EARLIEST_DELIVERY_TIME);
    }

    /**
     * @param string|null $earliestDeliveryTime
     * @return self
     */
    public function setEarliestDeliveryTime(string|null $earliestDeliveryTime): self
    {
        return $this->set(self::KEY_EARLIEST_DELIVERY_TIME, $earliestDeliveryTime);
    }

    /**
     * @return string|null
     */
    public function getLatestDeliveryTime(): string|null
    {
        return $this->stringOrNull(self::KEY_LATEST_DELIVERY_TIME);
    }

    /**
     * @param string|null $latestDeliveryTime
     * @return self
     */
    public function setLatestDeliveryTime(string|null $latestDeliveryTime): self
    {
        return $this->set(self::KEY_LATEST_DELIVERY_TIME, $latestDeliveryTime);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[]
     */
    public function getTotals(): array
    {
        return $this->instanceList(self::KEY_TOTALS, \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[] $totals
     * @return self
     */
    public function setTotals(array $totals): self
    {
        return $this->set(self::KEY_TOTALS, $totals);
    }
}
