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

use Magebit\AcpSpec\Api\Feed\DescriptionInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Structured long-form or rich-text description content for a product or variant.
 */
class Description extends SpecObject implements DescriptionInterface
{
    /**
     * @return string|null
     */
    public function getPlain(): string|null
    {
        return $this->stringOrNull(self::KEY_PLAIN);
    }

    /**
     * @param string|null $plain
     * @return self
     */
    public function setPlain(string|null $plain): self
    {
        return $this->set(self::KEY_PLAIN, $plain);
    }

    /**
     * @return string|null
     */
    public function getHtml(): string|null
    {
        return $this->stringOrNull(self::KEY_HTML);
    }

    /**
     * @param string|null $html
     * @return self
     */
    public function setHtml(string|null $html): self
    {
        return $this->set(self::KEY_HTML, $html);
    }

    /**
     * @return string|null
     */
    public function getMarkdown(): string|null
    {
        return $this->stringOrNull(self::KEY_MARKDOWN);
    }

    /**
     * @param string|null $markdown
     * @return self
     */
    public function setMarkdown(string|null $markdown): self
    {
        return $this->set(self::KEY_MARKDOWN, $markdown);
    }
}
