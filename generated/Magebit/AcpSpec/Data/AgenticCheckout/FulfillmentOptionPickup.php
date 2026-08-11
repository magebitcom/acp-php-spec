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

use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionPickupInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionPickupLocationInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * In-store or curbside pickup fulfillment option with pickup location details
 */
class FulfillmentOptionPickup extends SpecObject implements FulfillmentOptionPickupInterface
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
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionPickupLocationInterface
     */
    public function getLocation(): FulfillmentOptionPickupLocationInterface
    {
        return $this->requireInstance(self::KEY_LOCATION, \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionPickupLocationInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionPickupLocationInterface $location
     * @return self
     */
    public function setLocation(FulfillmentOptionPickupLocationInterface $location): self
    {
        return $this->set(self::KEY_LOCATION, $location);
    }

    /**
     * @return string|null
     */
    public function getPickupType(): string|null
    {
        return $this->stringOrNull(self::KEY_PICKUP_TYPE);
    }

    /**
     * @param string|null $pickupType
     * @return self
     */
    public function setPickupType(string|null $pickupType): self
    {
        return $this->set(self::KEY_PICKUP_TYPE, $pickupType);
    }

    /**
     * @return string|null
     */
    public function getReadyBy(): string|null
    {
        return $this->stringOrNull(self::KEY_READY_BY);
    }

    /**
     * @param string|null $readyBy
     * @return self
     */
    public function setReadyBy(string|null $readyBy): self
    {
        return $this->set(self::KEY_READY_BY, $readyBy);
    }

    /**
     * @return string|null
     */
    public function getPickupBy(): string|null
    {
        return $this->stringOrNull(self::KEY_PICKUP_BY);
    }

    /**
     * @param string|null $pickupBy
     * @return self
     */
    public function setPickupBy(string|null $pickupBy): self
    {
        return $this->set(self::KEY_PICKUP_BY, $pickupBy);
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
