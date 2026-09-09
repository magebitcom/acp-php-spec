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
 * Hyperlink with URL, display text, and optional action semantics
 */
interface LinkInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_TITLE = 'title';
    public const KEY_URL = 'url';
    public const TYPE_TERMS_OF_USE = 'terms_of_use';
    public const TYPE_PRIVACY_POLICY = 'privacy_policy';
    public const TYPE_RETURN_POLICY = 'return_policy';
    public const TYPE_SHIPPING_POLICY = 'shipping_policy';
    public const TYPE_CONTACT_US = 'contact_us';
    public const TYPE_ABOUT_US = 'about_us';
    public const TYPE_FAQ = 'faq';
    public const TYPE_SUPPORT = 'support';
    public const CONSTRAINTS = ['url' => ['format' => 'uri']];

    /**
     * Type of link
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Type of link
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Display text for the link
     *
     * @return string|null
     */
    public function getTitle(): string|null;

    /**
     * Display text for the link
     *
     * @param string|null $title
     * @return self
     */
    public function setTitle(string|null $title): self;

    /**
     * URL destination
     *
     * @return string
     */
    public function getUrl(): string;

    /**
     * URL destination
     *
     * @param string $url
     * @return self
     */
    public function setUrl(string $url): self;
}
