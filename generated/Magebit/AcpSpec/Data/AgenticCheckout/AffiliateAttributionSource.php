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

use Magebit\AcpSpec\Api\AgenticCheckout\AffiliateAttributionSourceInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Context about where the attribution originated.
 */
class AffiliateAttributionSource extends SpecObject implements AffiliateAttributionSourceInterface
{
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
     * @return string|null
     */
    public function getUrl(): string|null
    {
        return $this->stringOrNull(self::KEY_URL);
    }

    /**
     * @param string|null $url
     * @return self
     */
    public function setUrl(string|null $url): self
    {
        return $this->set(self::KEY_URL, $url);
    }
}
