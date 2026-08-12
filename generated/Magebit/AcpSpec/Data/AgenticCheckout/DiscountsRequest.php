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

use Magebit\AcpSpec\Api\AgenticCheckout\DiscountsRequestInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Discount codes input for checkout create/update requests.
 */
class DiscountsRequest extends SpecObject implements DiscountsRequestInterface
{
    /**
     * @return string[]|null
     */
    public function getCodes(): array|null
    {
        return $this->arrayOrNull(self::KEY_CODES);
    }

    /**
     * @param string[]|null $codes
     * @return self
     */
    public function setCodes(array|null $codes): self
    {
        return $this->set(self::KEY_CODES, $codes);
    }
}
