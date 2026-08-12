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

use Magebit\AcpSpec\Api\AgenticCheckout\DiscountDetailInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Information about a discount applied to the checkout or a specific item
 */
class DiscountDetail extends SpecObject implements DiscountDetailInterface
{
    /**
     * @return string|null
     */
    public function getCode(): string|null
    {
        return $this->stringOrNull(self::KEY_CODE);
    }

    /**
     * @param string|null $code
     * @return self
     */
    public function setCode(string|null $code): self
    {
        return $this->set(self::KEY_CODE, $code);
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->requireString(self::KEY_TYPE);
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType(string $type): self
    {
        return $this->set(self::KEY_TYPE, $type);
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->requireInt(self::KEY_AMOUNT);
    }

    /**
     * @param int $amount
     * @return self
     */
    public function setAmount(int $amount): self
    {
        return $this->set(self::KEY_AMOUNT, $amount);
    }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
        return $this->stringOrNull(self::KEY_DESCRIPTION);
    }

    /**
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self
    {
        return $this->set(self::KEY_DESCRIPTION, $description);
    }

    /**
     * @return string|null
     */
    public function getSource(): string|null
    {
        return $this->stringOrNull(self::KEY_SOURCE);
    }

    /**
     * @param string|null $source
     * @return self
     */
    public function setSource(string|null $source): self
    {
        return $this->set(self::KEY_SOURCE, $source);
    }
}
