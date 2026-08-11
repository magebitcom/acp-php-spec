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

use Magebit\AcpSpec\Api\AgenticCheckout\CustomAttributeInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Custom key-value attribute for merchant-specific metadata on line items
 */
class CustomAttribute extends SpecObject implements CustomAttributeInterface
{
    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->requireString(self::KEY_DISPLAY_NAME);
    }

    /**
     * @param string $displayName
     * @return self
     */
    public function setDisplayName(string $displayName): self
    {
        return $this->set(self::KEY_DISPLAY_NAME, $displayName);
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->requireString(self::KEY_VALUE);
    }

    /**
     * @param string $value
     * @return self
     */
    public function setValue(string $value): self
    {
        return $this->set(self::KEY_VALUE, $value);
    }
}
