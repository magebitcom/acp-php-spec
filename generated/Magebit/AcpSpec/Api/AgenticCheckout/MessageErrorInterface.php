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
 * Business-logic error within a valid CheckoutSession response. Used in messages[] on 2xx responses when the session is valid but has actionable issues (e.g. status "not_ready_for_payment"). The agent can respond by asking the buyer for corrections or trying alternatives. Use MessageError—not Error—when you can return a valid CheckoutSession and the problem is conversational (e.g. invalid email → code "invalid" and param "$.buyer.email"; out of stock → code "out_of_stock" and param "$.items[0]").
 */
interface MessageErrorInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_CODE = 'code';
    public const KEY_SEVERITY = 'severity';
    public const KEY_RESOLUTION = 'resolution';
    public const KEY_PARAM = 'param';
    public const KEY_CONTENT_TYPE = 'content_type';
    public const KEY_CONTENT = 'content';
    public const TYPE_ERROR = 'error';
    public const CODE_MISSING = 'missing';
    public const CODE_INVALID = 'invalid';
    public const CODE_OUT_OF_STOCK = 'out_of_stock';
    public const CODE_PAYMENT_DECLINED = 'payment_declined';
    public const CODE_REQUIRES_SIGN_IN = 'requires_sign_in';
    public const CODE_REQUIRES_3DS = 'requires_3ds';
    public const CODE_LOW_STOCK = 'low_stock';
    public const CODE_QUANTITY_EXCEEDED = 'quantity_exceeded';
    public const CODE_COUPON_INVALID = 'coupon_invalid';
    public const CODE_COUPON_EXPIRED = 'coupon_expired';
    public const CODE_MINIMUM_NOT_MET = 'minimum_not_met';
    public const CODE_MAXIMUM_EXCEEDED = 'maximum_exceeded';
    public const CODE_REGION_RESTRICTED = 'region_restricted';
    public const CODE_AGE_VERIFICATION_REQUIRED = 'age_verification_required';
    public const CODE_APPROVAL_REQUIRED = 'approval_required';
    public const CODE_UNSUPPORTED = 'unsupported';
    public const CODE_NOT_FOUND = 'not_found';
    public const CODE_CONFLICT = 'conflict';
    public const CODE_RATE_LIMITED = 'rate_limited';
    public const CODE_EXPIRED = 'expired';
    public const CODE_INTERVENTION_REQUIRED = 'intervention_required';
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
     * Error code indicating the type of error
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * Error code indicating the type of error
     *
     * @param string $code
     * @return self
     */
    public function setCode(string $code): self;

    /**
     * Severity level of this error
     *
     * @return string|null
     */
    public function getSeverity(): string|null;

    /**
     * Severity level of this error
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
     * Format of the error message content. When set to 'markdown', content MUST conform to CommonMark (https://spec.commonmark.org/0.31.2/). Raw HTML elements MUST NOT be included. When set to 'plain', content is plain text with no formatting.
     *
     * @return string
     */
    public function getContentType(): string;

    /**
     * Format of the error message content. When set to 'markdown', content MUST conform to CommonMark (https://spec.commonmark.org/0.31.2/). Raw HTML elements MUST NOT be included. When set to 'plain', content is plain text with no formatting.
     *
     * @param string $contentType
     * @return self
     */
    public function setContentType(string $contentType): self;

    /**
     * Error message text. When content_type is 'markdown', this MUST be valid CommonMark with no raw HTML. Agents MUST render using a CommonMark-compliant parser with raw HTML output disabled or sanitized.
     *
     * @return string
     */
    public function getContent(): string;

    /**
     * Error message text. When content_type is 'markdown', this MUST be valid CommonMark with no raw HTML. Agents MUST render using a CommonMark-compliant parser with raw HTML output disabled or sanitized.
     *
     * @param string $content
     * @return self
     */
    public function setContent(string $content): self;
}
