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
 * Request payload used to create a feed.
 */
interface CreateFeedRequestInterface
{
    public const KEY_TARGET_COUNTRY = 'target_country';
    public const CONSTRAINTS = ['target_country' => ['pattern' => '^[A-Z]{2}$']];

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
}
