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

use Magebit\AcpSpec\Api\AgenticCheckout\LineItemReferenceInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Reference to a line item with quantity, used in fulfillments and adjustments
 */
class LineItemReference extends SpecObject implements LineItemReferenceInterface
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
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->requireInt(self::KEY_QUANTITY);
    }

    /**
     * @param int $quantity
     * @return self
     */
    public function setQuantity(int $quantity): self
    {
        return $this->set(self::KEY_QUANTITY, $quantity);
    }
}
