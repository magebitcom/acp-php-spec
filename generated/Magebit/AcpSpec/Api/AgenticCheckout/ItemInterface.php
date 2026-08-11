<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\AgenticCheckout;

/**
 * A purchasable item with variant options (e.g., size, color) and quantity
 */
interface ItemInterface
{
    public const KEY_ID = 'id';
    public const KEY_NAME = 'name';
    public const KEY_UNIT_AMOUNT = 'unit_amount';

    /**
     * Unique identifier for the item
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Unique identifier for the item
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * Display name of the item
     *
     * @return string|null
     */
    public function getName(): string|null;

    /**
     * Display name of the item
     *
     * @param string|null $name
     * @return self
     */
    public function setName(string|null $name): self;

    /**
     * Price per unit in minor currency units (e.g. 100 cents for $1.00 or 100 for ¥100)
     *
     * @return int|null
     */
    public function getUnitAmount(): int|null;

    /**
     * Price per unit in minor currency units (e.g. 100 cents for $1.00 or 100 for ¥100)
     *
     * @param int|null $unitAmount
     * @return self
     */
    public function setUnitAmount(int|null $unitAmount): self;
}
