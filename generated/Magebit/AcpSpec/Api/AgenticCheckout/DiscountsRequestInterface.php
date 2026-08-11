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
 * Discount codes input for checkout create/update requests.
 */
interface DiscountsRequestInterface
{
    public const KEY_CODES = 'codes';

    /**
     * Discount codes to apply. Case-insensitive. Replaces previously submitted codes. Send empty array to clear.
     *
     * @return string[]|null
     */
    public function getCodes(): array|null;

    /**
     * Discount codes to apply. Case-insensitive. Replaces previously submitted codes. Send empty array to clear.
     *
     * @param string[]|null $codes
     * @return self
     */
    public function setCodes(array|null $codes): self;
}
