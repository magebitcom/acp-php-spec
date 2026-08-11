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
 * Structured long-form or rich-text description content for a product or variant.
 */
interface DescriptionInterface
{
    public const KEY_PLAIN = 'plain';
    public const KEY_HTML = 'html';
    public const KEY_MARKDOWN = 'markdown';

    /**
     * Plain-text description intended for clients that do not render rich formatting.
     *
     * @return string|null
     */
    public function getPlain(): string|null;

    /**
     * Plain-text description intended for clients that do not render rich formatting.
     *
     * @param string|null $plain
     * @return self
     */
    public function setPlain(string|null $plain): self;

    /**
     * HTML-formatted description content.
     *
     * @return string|null
     */
    public function getHtml(): string|null;

    /**
     * HTML-formatted description content.
     *
     * @param string|null $html
     * @return self
     */
    public function setHtml(string|null $html): self;

    /**
     * Markdown-formatted description content.
     *
     * @return string|null
     */
    public function getMarkdown(): string|null;

    /**
     * Markdown-formatted description content.
     *
     * @param string|null $markdown
     * @return self
     */
    public function setMarkdown(string|null $markdown): self;
}
