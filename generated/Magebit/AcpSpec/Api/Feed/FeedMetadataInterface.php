<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\Feed;

/**
 * Server-managed metadata describing a feed resource.
 */
interface FeedMetadataInterface
{
    public const KEY_ID = 'id';
    public const KEY_TARGET_COUNTRY = 'target_country';
    public const KEY_UPDATED_AT = 'updated_at';

    /**
     * Stable identifier for the feed resource.
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Stable identifier for the feed resource.
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * Optional ISO 3166-1 alpha-2 country code describing the feed's target market.
     *
     * @return string|null
     */
    public function getTargetCountry(): string|null;

    /**
     * Optional ISO 3166-1 alpha-2 country code describing the feed's target market.
     *
     * @param string|null $targetCountry
     * @return self
     */
    public function setTargetCountry(string|null $targetCountry): self;

    /**
     * Timestamp of the most recent update applied to this feed.
     *
     * @return string|null
     */
    public function getUpdatedAt(): string|null;

    /**
     * Timestamp of the most recent update applied to this feed.
     *
     * @param string|null $updatedAt
     * @return self
     */
    public function setUpdatedAt(string|null $updatedAt): self;
}
