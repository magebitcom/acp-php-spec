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

use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDetailsInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentGroupInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Group of line items that share the same fulfillment method and destination
 */
class FulfillmentGroup extends SpecObject implements FulfillmentGroupInterface
{
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
     * @return string[]
     */
    public function getItemIds(): array
    {
        return $this->getArray(self::KEY_ITEM_IDS);
    }

    /**
     * @param string[] $itemIds
     * @return self
     */
    public function setItemIds(array $itemIds): self
    {
        return $this->set(self::KEY_ITEM_IDS, $itemIds);
    }

    /**
     * @return string
     */
    public function getDestinationType(): string
    {
        return $this->requireString(self::KEY_DESTINATION_TYPE);
    }

    /**
     * @param string $destinationType
     * @return self
     */
    public function setDestinationType(string $destinationType): self
    {
        return $this->set(self::KEY_DESTINATION_TYPE, $destinationType);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDetailsInterface|null
     */
    public function getFulfillmentDetails(): FulfillmentDetailsInterface|null
    {
        return $this->instanceOrNull(self::KEY_FULFILLMENT_DETAILS, \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDetailsInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentDetailsInterface|null $fulfillmentDetails
     * @return self
     */
    public function setFulfillmentDetails(FulfillmentDetailsInterface|null $fulfillmentDetails): self
    {
        return $this->set(self::KEY_FULFILLMENT_DETAILS, $fulfillmentDetails);
    }

    /**
     * @return string|null
     */
    public function getLocationId(): string|null
    {
        return $this->stringOrNull(self::KEY_LOCATION_ID);
    }

    /**
     * @param string|null $locationId
     * @return self
     */
    public function setLocationId(string|null $locationId): self
    {
        return $this->set(self::KEY_LOCATION_ID, $locationId);
    }

    /**
     * @return string|null
     */
    public function getInstructions(): string|null
    {
        return $this->stringOrNull(self::KEY_INSTRUCTIONS);
    }

    /**
     * @param string|null $instructions
     * @return self
     */
    public function setInstructions(string|null $instructions): self
    {
        return $this->set(self::KEY_INSTRUCTIONS, $instructions);
    }
}
