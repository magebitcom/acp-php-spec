<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\DelegateAuthentication;

use Magebit\AcpSpec\Api\DelegateAuthentication\AmountInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * The transaction amount and currency.
 */
class Amount extends SpecObject implements AmountInterface
{
    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->requireInt(self::KEY_VALUE);
    }

    /**
     * @param int $value
     * @return self
     */
    public function setValue(int $value): self
    {
        return $this->set(self::KEY_VALUE, $value);
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->requireString(self::KEY_CURRENCY);
    }

    /**
     * @param string $currency
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        return $this->set(self::KEY_CURRENCY, $currency);
    }
}
