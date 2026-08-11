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
 * Warning message to display to the buyer during checkout (non-blocking)
 */
interface MessageWarningInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_CODE = 'code';
    public const KEY_SEVERITY = 'severity';
    public const KEY_RESOLUTION = 'resolution';
    public const KEY_PARAM = 'param';
    public const KEY_CONTENT_TYPE = 'content_type';
    public const KEY_CONTENT = 'content';
    public const TYPE_WARNING = 'warning';
    public const CODE_LOW_STOCK = 'low_stock';
    public const CODE_HIGH_DEMAND = 'high_demand';
    public const CODE_SHIPPING_DELAY = 'shipping_delay';
    public const CODE_PRICE_CHANGE = 'price_change';
    public const CODE_EXPIRING_PROMOTION = 'expiring_promotion';
    public const CODE_LIMITED_AVAILABILITY = 'limited_availability';
    public const CODE_DISCOUNT_CODE_EXPIRED = 'discount_code_expired';
    public const CODE_DISCOUNT_CODE_INVALID = 'discount_code_invalid';
    public const CODE_DISCOUNT_CODE_ALREADY_APPLIED = 'discount_code_already_applied';
    public const CODE_DISCOUNT_CODE_COMBINATION_DISALLOWED = 'discount_code_combination_disallowed';
    public const CODE_DISCOUNT_CODE_MINIMUM_NOT_MET = 'discount_code_minimum_not_met';
    public const CODE_DISCOUNT_CODE_USER_NOT_LOGGED_IN = 'discount_code_user_not_logged_in';
    public const CODE_DISCOUNT_CODE_USER_INELIGIBLE = 'discount_code_user_ineligible';
    public const CODE_DISCOUNT_CODE_USAGE_LIMIT_REACHED = 'discount_code_usage_limit_reached';
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
     * Warning code indicating the type of warning
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * Warning code indicating the type of warning
     *
     * @param string $code
     * @return self
     */
    public function setCode(string $code): self;

    /**
     * Severity level of this warning
     *
     * @return string|null
     */
    public function getSeverity(): string|null;

    /**
     * Severity level of this warning
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
     * Format of the warning message content. When set to 'markdown', content MUST conform to CommonMark (https://spec.commonmark.org/0.31.2/). Raw HTML elements MUST NOT be included. When set to 'plain', content is plain text with no formatting.
     *
     * @return string
     */
    public function getContentType(): string;

    /**
     * Format of the warning message content. When set to 'markdown', content MUST conform to CommonMark (https://spec.commonmark.org/0.31.2/). Raw HTML elements MUST NOT be included. When set to 'plain', content is plain text with no formatting.
     *
     * @param string $contentType
     * @return self
     */
    public function setContentType(string $contentType): self;

    /**
     * Warning message text. When content_type is 'markdown', this MUST be valid CommonMark with no raw HTML. Agents MUST render using a CommonMark-compliant parser with raw HTML output disabled or sanitized.
     *
     * @return string
     */
    public function getContent(): string;

    /**
     * Warning message text. When content_type is 'markdown', this MUST be valid CommonMark with no raw HTML. Agents MUST render using a CommonMark-compliant parser with raw HTML output disabled or sanitized.
     *
     * @param string $content
     * @return self
     */
    public function setContent(string $content): self;
}
