<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\Feed;

/**
 * Purchasability and fulfillment state for a variant.
 */
interface AvailabilityInterface
{
    public const KEY_AVAILABLE = 'available';
    public const KEY_STATUS = 'status';

    /**
     * Indicates whether the variant is currently purchasable. Use status for fulfillment context.
     *
     * @return bool|null
     */
    public function getAvailable(): bool|null;

    /**
     * Indicates whether the variant is currently purchasable. Use status for fulfillment context.
     *
     * @param bool|null $available
     * @return self
     */
    public function setAvailable(bool|null $available): self;

    /**
     * Extensible fulfillment state for the variant. Known values include in_stock, limited_stock, backorder, preorder, out_of_stock, and discontinued.
     *
     * @return string|null
     */
    public function getStatus(): string|null;

    /**
     * Extensible fulfillment state for the variant. Known values include in_stock, limited_stock, backorder, preorder, out_of_stock, and discontinued.
     *
     * @param string|null $status
     * @return self
     */
    public function setStatus(string|null $status): self;
}
