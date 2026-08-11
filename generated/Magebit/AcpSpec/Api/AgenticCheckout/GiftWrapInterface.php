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
 * Gift wrapping option with associated cost and customization details
 */
interface GiftWrapInterface
{
    public const KEY_ENABLED = 'enabled';
    public const KEY_STYLE = 'style';
    public const KEY_CHARGE = 'charge';
    public const STYLE_BIRTHDAY = 'birthday';
    public const STYLE_HOLIDAY = 'holiday';
    public const STYLE_ELEGANT = 'elegant';

    /**
     * Whether gift wrapping is enabled for this order
     *
     * @return bool
     */
    public function getEnabled(): bool;

    /**
     * Whether gift wrapping is enabled for this order
     *
     * @param bool $enabled
     * @return self
     */
    public function setEnabled(bool $enabled): self;

    /**
     * Gift wrap style selected
     *
     * @return string|null
     */
    public function getStyle(): string|null;

    /**
     * Gift wrap style selected
     *
     * @param string|null $style
     * @return self
     */
    public function setStyle(string|null $style): self;

    /**
     * Additional charge for gift wrapping in minor currency units (e.g. 100 cents for $1.00 or 100 for ¥100)
     *
     * @return int|null
     */
    public function getCharge(): int|null;

    /**
     * Additional charge for gift wrapping in minor currency units (e.g. 100 cents for $1.00 or 100 for ¥100)
     *
     * @param int|null $charge
     * @return self
     */
    public function setCharge(int|null $charge): self;
}
