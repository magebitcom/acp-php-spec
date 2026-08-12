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

use Magebit\AcpSpec\Api\AgenticCheckout\GiftWrapInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Gift wrapping option with associated cost and customization details
 */
class GiftWrap extends SpecObject implements GiftWrapInterface
{
    /**
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->requireBool(self::KEY_ENABLED);
    }

    /**
     * @param bool $enabled
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        return $this->set(self::KEY_ENABLED, $enabled);
    }

    /**
     * @return string|null
     */
    public function getStyle(): string|null
    {
        return $this->stringOrNull(self::KEY_STYLE);
    }

    /**
     * @param string|null $style
     * @return self
     */
    public function setStyle(string|null $style): self
    {
        return $this->set(self::KEY_STYLE, $style);
    }

    /**
     * @return int|null
     */
    public function getCharge(): int|null
    {
        return $this->intOrNull(self::KEY_CHARGE);
    }

    /**
     * @param int|null $charge
     * @return self
     */
    public function setCharge(int|null $charge): self
    {
        return $this->set(self::KEY_CHARGE, $charge);
    }
}
