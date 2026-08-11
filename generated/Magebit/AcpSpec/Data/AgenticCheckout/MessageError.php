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

use Magebit\AcpSpec\Api\AgenticCheckout\MessageErrorInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Business-logic error within a valid CheckoutSession response. Used in messages[] on 2xx responses when the session is valid but has actionable issues (e.g. status "not_ready_for_payment"). The agent can respond by asking the buyer for corrections or trying alternatives. Use MessageError—not Error—when you can return a valid CheckoutSession and the problem is conversational (e.g. invalid email → code "invalid" and param "$.buyer.email"; out of stock → code "out_of_stock" and param "$.items[0]").
 */
class MessageError extends SpecObject implements MessageErrorInterface
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
     * @return string|null
     */
    public function getSeverity(): string|null
    {
        return $this->stringOrNull(self::KEY_SEVERITY);
    }

    /**
     * @param string|null $severity
     * @return self
     */
    public function setSeverity(string|null $severity): self
    {
        return $this->set(self::KEY_SEVERITY, $severity);
    }

    /**
     * @return string|null
     */
    public function getResolution(): string|null
    {
        return $this->stringOrNull(self::KEY_RESOLUTION);
    }

    /**
     * @param string|null $resolution
     * @return self
     */
    public function setResolution(string|null $resolution): self
    {
        return $this->set(self::KEY_RESOLUTION, $resolution);
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
     * @return string
     */
    public function getContentType(): string
    {
        return $this->requireString(self::KEY_CONTENT_TYPE);
    }

    /**
     * @param string $contentType
     * @return self
     */
    public function setContentType(string $contentType): self
    {
        return $this->set(self::KEY_CONTENT_TYPE, $contentType);
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->requireString(self::KEY_CONTENT);
    }

    /**
     * @param string $content
     * @return self
     */
    public function setContent(string $content): self
    {
        return $this->set(self::KEY_CONTENT, $content);
    }
}
