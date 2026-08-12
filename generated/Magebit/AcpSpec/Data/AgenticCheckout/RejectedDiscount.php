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

use Magebit\AcpSpec\Api\AgenticCheckout\RejectedDiscountInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * A discount code that could not be applied, with the reason.
 */
class RejectedDiscount extends SpecObject implements RejectedDiscountInterface
{
    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->requireString(self::KEY_CODE);
    }

    /**
     * @param string $code
     * @return self
     */
    public function setCode(string $code): self
    {
        return $this->set(self::KEY_CODE, $code);
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->requireString(self::KEY_REASON);
    }

    /**
     * @param string $reason
     * @return self
     */
    public function setReason(string $reason): self
    {
        return $this->set(self::KEY_REASON, $reason);
    }

    /**
     * @return string|null
     */
    public function getMessage(): string|null
    {
        return $this->stringOrNull(self::KEY_MESSAGE);
    }

    /**
     * @param string|null $message
     * @return self
     */
    public function setMessage(string|null $message): self
    {
        return $this->set(self::KEY_MESSAGE, $message);
    }
}
