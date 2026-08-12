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

use Magebit\AcpSpec\Api\AgenticCheckout\FulfillmentOptionDigitalInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Digital delivery fulfillment option for downloadable or streaming content
 */
class FulfillmentOptionDigital extends SpecObject implements FulfillmentOptionDigitalInterface
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
