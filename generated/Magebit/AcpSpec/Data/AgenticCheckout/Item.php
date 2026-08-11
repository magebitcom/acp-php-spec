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

use Magebit\AcpSpec\Api\AgenticCheckout\ItemInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * A purchasable item with variant options (e.g., size, color) and quantity
 */
class Item extends SpecObject implements ItemInterface
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
     * @return string|null
     */
    public function getName(): string|null
    {
        return $this->stringOrNull(self::KEY_NAME);
    }

    /**
     * @param string|null $name
     * @return self
     */
    public function setName(string|null $name): self
    {
        return $this->set(self::KEY_NAME, $name);
    }

    /**
     * @return int|null
     */
    public function getUnitAmount(): int|null
    {
        return $this->intOrNull(self::KEY_UNIT_AMOUNT);
    }

    /**
     * @param int|null $unitAmount
     * @return self
     */
    public function setUnitAmount(int|null $unitAmount): self
    {
        return $this->set(self::KEY_UNIT_AMOUNT, $unitAmount);
    }
}
