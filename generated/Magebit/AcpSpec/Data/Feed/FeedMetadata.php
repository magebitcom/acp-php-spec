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

use Magebit\AcpSpec\Api\Feed\FeedMetadataInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Server-managed metadata describing a feed resource.
 */
class FeedMetadata extends SpecObject implements FeedMetadataInterface
{
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->requireString(self::KEY_ID);
    }

    /**
     * @param string $id
     * @return self
     */
    public function setId(string $id): self
    {
        return $this->set(self::KEY_ID, $id);
    }

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

    /**
     * @return string|null
     */
    public function getUpdatedAt(): string|null
    {
        return $this->stringOrNull(self::KEY_UPDATED_AT);
    }

    /**
     * @param string|null $updatedAt
     * @return self
     */
    public function setUpdatedAt(string|null $updatedAt): self
    {
        return $this->set(self::KEY_UPDATED_AT, $updatedAt);
    }
}
