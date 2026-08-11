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

use Magebit\AcpSpec\Api\AgenticCheckout\DisclosureInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Legal disclosure or terms that must be acknowledged by the buyer
 */
class Disclosure extends SpecObject implements DisclosureInterface
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
