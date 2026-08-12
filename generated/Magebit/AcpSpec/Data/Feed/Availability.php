<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\Feed;

use Magebit\AcpSpec\Api\Feed\AvailabilityInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Purchasability and fulfillment state for a variant.
 */
class Availability extends SpecObject implements AvailabilityInterface
{
    /**
     * @return bool|null
     */
    public function getAvailable(): bool|null
    {
        return $this->boolOrNull(self::KEY_AVAILABLE);
    }

    /**
     * @param bool|null $available
     * @return self
     */
    public function setAvailable(bool|null $available): self
    {
        return $this->set(self::KEY_AVAILABLE, $available);
    }

    /**
     * @return string|null
     */
    public function getStatus(): string|null
    {
        return $this->stringOrNull(self::KEY_STATUS);
    }

    /**
     * @param string|null $status
     * @return self
     */
    public function setStatus(string|null $status): self
    {
        return $this->set(self::KEY_STATUS, $status);
    }
}
