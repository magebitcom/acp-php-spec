<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\Feed;

/**
 * Structured error returned when a feed request cannot be fulfilled.
 */
interface ErrorInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_CODE = 'code';
    public const KEY_MESSAGE = 'message';
    public const KEY_PARAM = 'param';

    /**
     * High-level error category.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * High-level error category.
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Machine-readable error code for programmatic handling.
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * Machine-readable error code for programmatic handling.
     *
     * @param string $code
     * @return self
     */
    public function setCode(string $code): self;

    /**
     * Human-readable explanation of the error.
     *
     * @return string
     */
    public function getMessage(): string;

    /**
     * Human-readable explanation of the error.
     *
     * @param string $message
     * @return self
     */
    public function setMessage(string $message): self;

    /**
     * Optional request parameter or field associated with the error.
     *
     * @return string|null
     */
    public function getParam(): string|null;

    /**
     * Optional request parameter or field associated with the error.
     *
     * @param string|null $param
     * @return self
     */
    public function setParam(string|null $param): self;
}
