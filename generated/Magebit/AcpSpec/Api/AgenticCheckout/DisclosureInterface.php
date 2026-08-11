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
 * Legal disclosure or terms that must be acknowledged by the buyer
 */
interface DisclosureInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_CONTENT_TYPE = 'content_type';
    public const KEY_CONTENT = 'content';
    public const TYPE_DISCLAIMER = 'disclaimer';
    public const CONTENT_TYPE_PLAIN = 'plain';
    public const CONTENT_TYPE_MARKDOWN = 'markdown';

    /**
     * Type of disclosure
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Type of disclosure
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Format of the disclosure content. When set to 'markdown', content MUST conform to CommonMark (https://spec.commonmark.org/0.31.2/). Raw HTML elements MUST NOT be included. When set to 'plain', content is plain text with no formatting.
     *
     * @return string
     */
    public function getContentType(): string;

    /**
     * Format of the disclosure content. When set to 'markdown', content MUST conform to CommonMark (https://spec.commonmark.org/0.31.2/). Raw HTML elements MUST NOT be included. When set to 'plain', content is plain text with no formatting.
     *
     * @param string $contentType
     * @return self
     */
    public function setContentType(string $contentType): self;

    /**
     * The disclosure text content. When content_type is 'markdown', this MUST be valid CommonMark with no raw HTML. Agents MUST render using a CommonMark-compliant parser with raw HTML output disabled or sanitized.
     *
     * @return string
     */
    public function getContent(): string;

    /**
     * The disclosure text content. When content_type is 'markdown', this MUST be valid CommonMark with no raw HTML. Agents MUST render using a CommonMark-compliant parser with raw HTML output disabled or sanitized.
     *
     * @param string $content
     * @return self
     */
    public function setContent(string $content): self;
}
