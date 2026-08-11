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
 * Protocol-level error returned in 4xx/5xx responses when the server cannot return a valid CheckoutSession at all (e.g. malformed request or unexpected failure). Use Error—not MessageError—when there is no valid session state to return. type semantics: invalid_request — malformed request, missing required fields, invalid JSON, or idempotency violations (codes: idempotency_key_required, idempotency_in_flight, idempotency_conflict); processing_error — unexpected server-side failure; service_unavailable — temporary unavailability.
 */
interface ErrorInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_CODE = 'code';
    public const KEY_MESSAGE = 'message';
    public const KEY_PARAM = 'param';
    public const KEY_SUPPORTED_VERSIONS = 'supported_versions';
    public const TYPE_INVALID_REQUEST = 'invalid_request';
    public const TYPE_PROCESSING_ERROR = 'processing_error';
    public const TYPE_SERVICE_UNAVAILABLE = 'service_unavailable';

    /**
     * Error type indicating the category of protocol-level error
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Error type indicating the category of protocol-level error
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Implementation-defined error code
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * Implementation-defined error code
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
     * RFC 9535 JSONPath (optional)
     *
     * @return string|null
     */
    public function getParam(): string|null;

    /**
     * RFC 9535 JSONPath (optional)
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
