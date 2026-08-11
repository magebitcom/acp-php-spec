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

use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentEventInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * A point-in-time event in the fulfillment lifecycle.
 */
class FulfillmentEvent extends SpecObject implements FulfillmentEventInterface
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
    public function getOccurredAt(): string
    {
        return $this->requireString(self::KEY_OCCURRED_AT);
    }

    /**
     * @param string $occurredAt
     * @return self
     */
    public function setOccurredAt(string $occurredAt): self
    {
        return $this->set(self::KEY_OCCURRED_AT, $occurredAt);
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
    public function getLocation(): string|null
    {
        return $this->stringOrNull(self::KEY_LOCATION);
    }

    /**
     * @param string|null $location
     * @return self
     */
    public function setLocation(string|null $location): self
    {
        return $this->set(self::KEY_LOCATION, $location);
    }
}
