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
 * Informational message to display to the buyer during checkout
 */
interface MessageInfoInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_SEVERITY = 'severity';
    public const KEY_RESOLUTION = 'resolution';
    public const KEY_PARAM = 'param';
    public const KEY_CONTENT_TYPE = 'content_type';
    public const KEY_CONTENT = 'content';
    public const TYPE_INFO = 'info';
    public const SEVERITY_INFO = 'info';
    public const SEVERITY_LOW = 'low';
    public const SEVERITY_MEDIUM = 'medium';
    public const SEVERITY_HIGH = 'high';
    public const SEVERITY_CRITICAL = 'critical';
    public const RESOLUTION_RECOVERABLE = 'recoverable';
    public const RESOLUTION_REQUIRES_BUYER_INPUT = 'requires_buyer_input';
    public const RESOLUTION_REQUIRES_BUYER_REVIEW = 'requires_buyer_review';
    public const CONTENT_TYPE_PLAIN = 'plain';
    public const CONTENT_TYPE_MARKDOWN = 'markdown';

    /**
     * Message type discriminator
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Message type discriminator
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Severity level of this informational message
     *
     * @return string|null
     */
    public function getSeverity(): string|null;

    /**
     * Severity level of this informational message
     *
     * @param string|null $severity
     * @return self
     */
    public function setSeverity(string|null $severity): self;

    /**
     * Who resolves this message. 'recoverable': agent can fix via API. 'requires_buyer_input': buyer must provide info. 'requires_buyer_review': buyer must authorize.
     *
     * @return string|null
     */
    public function getResolution(): string|null;

    /**
     * Who resolves this message. 'recoverable': agent can fix via API. 'requires_buyer_input': buyer must provide info. 'requires_buyer_review': buyer must authorize.
     *
     * @param string|null $resolution
     * @return self
     */
    public function setResolution(string|null $resolution): self;

    /**
     * RFC 9535 JSONPath
     *
     * @return string|null
     */
    public function getParam(): string|null;

    /**
     * RFC 9535 JSONPath
     *
     * @param string|null $param
     * @return self
     */
    public function setParam(string|null $param): self;

    /**
     * Format of the message content. When set to 'markdown', content MUST conform to CommonMark (https://spec.commonmark.org/0.31.2/). Raw HTML elements MUST NOT be included. When set to 'plain', content is plain text with no formatting.
     *
     * @return string
     */
    public function getContentType(): string;

    /**
     * Format of the message content. When set to 'markdown', content MUST conform to CommonMark (https://spec.commonmark.org/0.31.2/). Raw HTML elements MUST NOT be included. When set to 'plain', content is plain text with no formatting.
     *
     * @param string $contentType
     * @return self
     */
    public function setContentType(string $contentType): self;

    /**
     * Informational message text. When content_type is 'markdown', this MUST be valid CommonMark with no raw HTML. Agents MUST render using a CommonMark-compliant parser with raw HTML output disabled or sanitized.
     *
     * @return string
     */
    public function getContent(): string;

    /**
     * Informational message text. When content_type is 'markdown', this MUST be valid CommonMark with no raw HTML. Agents MUST render using a CommonMark-compliant parser with raw HTML output disabled or sanitized.
     *
     * @param string $content
     * @return self
     */
    public function setContent(string $content): self;
}
