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
 * A discount code that could not be applied, with the reason.
 */
interface RejectedDiscountInterface
{
    public const KEY_CODE = 'code';
    public const KEY_REASON = 'reason';
    public const KEY_MESSAGE = 'message';
    public const REASON_DISCOUNT_CODE_EXPIRED = 'discount_code_expired';
    public const REASON_DISCOUNT_CODE_INVALID = 'discount_code_invalid';
    public const REASON_DISCOUNT_CODE_ALREADY_APPLIED = 'discount_code_already_applied';
    public const REASON_DISCOUNT_CODE_COMBINATION_DISALLOWED = 'discount_code_combination_disallowed';
    public const REASON_DISCOUNT_CODE_MINIMUM_NOT_MET = 'discount_code_minimum_not_met';
    public const REASON_DISCOUNT_CODE_USER_NOT_LOGGED_IN = 'discount_code_user_not_logged_in';
    public const REASON_DISCOUNT_CODE_USER_INELIGIBLE = 'discount_code_user_ineligible';
    public const REASON_DISCOUNT_CODE_USAGE_LIMIT_REACHED = 'discount_code_usage_limit_reached';

    /**
     * The discount code that was rejected.
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * The discount code that was rejected.
     *
     * @param string $code
     * @return self
     */
    public function setCode(string $code): self;

    /**
     * Error code indicating why the discount was rejected.
     *
     * @return string
     */
    public function getReason(): string;

    /**
     * Error code indicating why the discount was rejected.
     *
     * @param string $reason
     * @return self
     */
    public function setReason(string $reason): self;

    /**
     * Human-readable explanation of why the code was rejected.
     *
     * @return string|null
     */
    public function getMessage(): string|null;

    /**
     * Human-readable explanation of why the code was rejected.
     *
     * @param string|null $message
     * @return self
     */
    public function setMessage(string|null $message): self;
}
