<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\DelegateAuthentication;

/**
 * Standard error response format.
 */
interface ErrorInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_CODE = 'code';
    public const KEY_MESSAGE = 'message';
    public const KEY_PARAM = 'param';
    public const TYPE_INVALID_REQUEST = 'invalid_request';
    public const TYPE_RATE_LIMIT_EXCEEDED = 'rate_limit_exceeded';
    public const TYPE_PROCESSING_ERROR = 'processing_error';
    public const TYPE_SERVICE_UNAVAILABLE = 'service_unavailable';
    public const CODE_INVALID_CARD = 'invalid_card';
    public const CODE_DUPLICATE_REQUEST = 'duplicate_request';
    public const CODE_IDEMPOTENCY_CONFLICT = 'idempotency_conflict';

    /**
     * High-level error category
     *
     * @return string
     */
    public function getType(): string;

    /**
     * High-level error category
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Specific error code for programmatic handling
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * Specific error code for programmatic handling
     *
     * @param string $code
     * @return self
     */
    public function setCode(string $code): self;

    /**
     * Human-readable error message
     *
     * @return string
     */
    public function getMessage(): string;

    /**
     * Human-readable error message
     *
     * @param string $message
     * @return self
     */
    public function setMessage(string $message): self;

    /**
     * JSONPath of offending field
     *
     * @return string|null
     */
    public function getParam(): string|null;

    /**
     * JSONPath of offending field
     *
     * @param string|null $param
     * @return self
     */
    public function setParam(string|null $param): self;
}
