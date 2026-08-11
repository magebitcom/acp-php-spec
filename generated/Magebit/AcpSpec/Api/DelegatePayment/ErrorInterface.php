<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\DelegatePayment;

/**
 * Error response for delegate payment API requests
 */
interface ErrorInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_CODE = 'code';
    public const KEY_MESSAGE = 'message';
    public const KEY_PARAM = 'param';
    public const KEY_SUPPORTED_VERSIONS = 'supported_versions';
    public const TYPE_INVALID_REQUEST = 'invalid_request';
    public const TYPE_RATE_LIMIT_EXCEEDED = 'rate_limit_exceeded';
    public const TYPE_PROCESSING_ERROR = 'processing_error';
    public const TYPE_SERVICE_UNAVAILABLE = 'service_unavailable';
    public const CODE_INVALID_CARD = 'invalid_card';
    public const CODE_DUPLICATE_REQUEST = 'duplicate_request';
    public const CODE_IDEMPOTENCY_CONFLICT = 'idempotency_conflict';
    public const CODE_TOO_MANY_REQUESTS = 'too_many_requests';
    public const CODE_IDEMPOTENCY_KEY_REQUIRED = 'idempotency_key_required';
    public const CODE_IDEMPOTENCY_IN_FLIGHT = 'idempotency_in_flight';

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

    /**
     * List of API versions supported by the server, ordered by preference (newest first). Only included in version-related errors.
     *
     * @return string[]|null
     */
    public function getSupportedVersions(): array|null;

    /**
     * List of API versions supported by the server, ordered by preference (newest first). Only included in version-related errors.
     *
     * @param string[]|null $supportedVersions
     * @return self
     */
    public function setSupportedVersions(array|null $supportedVersions): self;
}
