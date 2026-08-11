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
 * Context about where the attribution originated.
 */
interface AffiliateAttributionSourceInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_URL = 'url';
    public const TYPE_URL = 'url';
    public const TYPE_PLATFORM = 'platform';
    public const TYPE_UNKNOWN = 'unknown';

    /**
     * The type of attribution source.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * The type of attribution source.
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Canonical content URL when type is 'url'.
     *
     * @return string|null
     */
    public function getUrl(): string|null;

    /**
     * Canonical content URL when type is 'url'.
     *
     * @param string|null $url
     * @return self
     */
    public function setUrl(string|null $url): self;
}
