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
 * Merchant-provided informational or policy link associated with a seller.
 */
interface LinkInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_TITLE = 'title';
    public const KEY_URL = 'url';

    /**
     * Extensible link type, such as privacy_policy, terms_of_service, refund_policy, shipping_policy, or faq.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Extensible link type, such as privacy_policy, terms_of_service, refund_policy, shipping_policy, or faq.
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Human-readable label for the linked resource.
     *
     * @return string|null
     */
    public function getTitle(): string|null;

    /**
     * Human-readable label for the linked resource.
     *
     * @param string|null $title
     * @return self
     */
    public function setTitle(string|null $title): self;

    /**
     * Canonical URL for the linked resource.
     *
     * @return string
     */
    public function getUrl(): string;

    /**
     * Canonical URL for the linked resource.
     *
     * @param string $url
     * @return self
     */
    public function setUrl(string $url): self;
}
