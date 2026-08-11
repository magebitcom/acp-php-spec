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
 * Structured reason for why a buyer action was taken, used for analytics and debugging
 */
interface IntentTraceInterface
{
    public const KEY_REASON_CODE = 'reason_code';
    public const KEY_TRACE_SUMMARY = 'trace_summary';
    public const KEY_METADATA = 'metadata';
    public const REASON_CODE_PRICE_SENSITIVITY = 'price_sensitivity';
    public const REASON_CODE_SHIPPING_COST = 'shipping_cost';
    public const REASON_CODE_SHIPPING_SPEED = 'shipping_speed';
    public const REASON_CODE_PRODUCT_FIT = 'product_fit';
    public const REASON_CODE_TRUST_SECURITY = 'trust_security';
    public const REASON_CODE_RETURNS_POLICY = 'returns_policy';
    public const REASON_CODE_PAYMENT_OPTIONS = 'payment_options';
    public const REASON_CODE_COMPARISON = 'comparison';
    public const REASON_CODE_TIMING_DEFERRED = 'timing_deferred';
    public const REASON_CODE_OTHER = 'other';

    /**
     * Reason for abandonment. This enum is extensible: servers SHOULD accept unrecognized values and treat them as 'other' (see RFC Section 7.2). Validators SHOULD be configured for lenient enum handling.
     *
     * @return string
     */
    public function getReasonCode(): string;

    /**
     * Reason for abandonment. This enum is extensible: servers SHOULD accept unrecognized values and treat them as 'other' (see RFC Section 7.2). Validators SHOULD be configured for lenient enum handling.
     *
     * @param string $reasonCode
     * @return self
     */
    public function setReasonCode(string $reasonCode): self;

    /**
     * A generated summary of the specific objection or negotiation gap.
     *
     * @return string|null
     */
    public function getTraceSummary(): string|null;

    /**
     * A generated summary of the specific objection or negotiation gap.
     *
     * @param string|null $traceSummary
     * @return self
     */
    public function setTraceSummary(string|null $traceSummary): self;

    /**
     * Additional structured metadata about the intent
     *
     * @return array<string, string|float|bool>|null
     */
    public function getMetadata(): array|null;

    /**
     * Additional structured metadata about the intent
     *
     * @param array<string, string|float|bool>|null $metadata
     * @return self
     */
    public function setMetadata(array|null $metadata): self;
}
