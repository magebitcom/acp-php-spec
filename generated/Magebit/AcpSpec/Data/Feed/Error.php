<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\Feed;

use Magebit\AcpSpec\Api\Feed\ErrorInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Structured error returned when a feed request cannot be fulfilled.
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
}
