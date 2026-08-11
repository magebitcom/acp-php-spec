<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\AgenticCheckout;

use Magebit\AcpSpec\Api\AgenticCheckout\ErrorInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Protocol-level error returned in 4xx/5xx responses when the server cannot return a valid CheckoutSession at all (e.g. malformed request or unexpected failure). Use Error—not MessageError—when there is no valid session state to return. type semantics: invalid_request — malformed request, missing required fields, invalid JSON, or idempotency violations (codes: idempotency_key_required, idempotency_in_flight, idempotency_conflict); processing_error — unexpected server-side failure; service_unavailable — temporary unavailability.
 */
class Error extends SpecObject implements ErrorInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->requireString(self::KEY_TYPE);
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType(string $type): self
    {
        return $this->set(self::KEY_TYPE, $type);
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->requireString(self::KEY_CODE);
    }

    /**
     * @param string $code
     * @return self
     */
    public function setCode(string $code): self
    {
        return $this->set(self::KEY_CODE, $code);
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->requireString(self::KEY_MESSAGE);
    }

    /**
     * @param string $message
     * @return self
     */
    public function setMessage(string $message): self
    {
        return $this->set(self::KEY_MESSAGE, $message);
    }

    /**
     * @return string|null
     */
    public function getParam(): string|null
    {
        return $this->stringOrNull(self::KEY_PARAM);
    }

    /**
     * @param string|null $param
     * @return self
     */
    public function setParam(string|null $param): self
    {
        return $this->set(self::KEY_PARAM, $param);
    }

    /**
     * @return string[]|null
     */
    public function getSupportedVersions(): array|null
    {
        return $this->arrayOrNull(self::KEY_SUPPORTED_VERSIONS);
    }

    /**
     * @param string[]|null $supportedVersions
     * @return self
     */
    public function setSupportedVersions(array|null $supportedVersions): self
    {
        return $this->set(self::KEY_SUPPORTED_VERSIONS, $supportedVersions);
    }
}
