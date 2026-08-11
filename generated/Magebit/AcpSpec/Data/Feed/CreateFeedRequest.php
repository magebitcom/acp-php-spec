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

use Magebit\AcpSpec\Api\Feed\CreateFeedRequestInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Request payload used to create a feed.
 */
class CreateFeedRequest extends SpecObject implements CreateFeedRequestInterface
{
    /**
     * @return string|null
     */
    public function getTargetCountry(): string|null
    {
        return $this->stringOrNull(self::KEY_TARGET_COUNTRY);
    }

    /**
     * @param string|null $targetCountry
     * @return self
     */
    public function setTargetCountry(string|null $targetCountry): self
    {
        return $this->set(self::KEY_TARGET_COUNTRY, $targetCountry);
    }
}
