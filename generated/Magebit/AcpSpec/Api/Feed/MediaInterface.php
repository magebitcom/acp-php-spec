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
 * Media asset associated with a product or variant.
 */
interface MediaInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_URL = 'url';
    public const KEY_ALT_TEXT = 'alt_text';
    public const KEY_WIDTH = 'width';
    public const KEY_HEIGHT = 'height';

    /**
     * Media kind, such as image, video, or model.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Media kind, such as image, video, or model.
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Canonical URL where the media asset can be retrieved.
     *
     * @return string
     */
    public function getUrl(): string;

    /**
     * Canonical URL where the media asset can be retrieved.
     *
     * @param string $url
     * @return self
     */
    public function setUrl(string $url): self;

    /**
     * Human-readable alternate text describing the asset.
     *
     * @return string|null
     */
    public function getAltText(): string|null;

    /**
     * Human-readable alternate text describing the asset.
     *
     * @param string|null $altText
     * @return self
     */
    public function setAltText(string|null $altText): self;

    /**
     * Rendered width of the asset in pixels, when known.
     *
     * @return int|null
     */
    public function getWidth(): int|null;

    /**
     * Rendered width of the asset in pixels, when known.
     *
     * @param int|null $width
     * @return self
     */
    public function setWidth(int|null $width): self;

    /**
     * Rendered height of the asset in pixels, when known.
     *
     * @return int|null
     */
    public function getHeight(): int|null;

    /**
     * Rendered height of the asset in pixels, when known.
     *
     * @param int|null $height
     * @return self
     */
    public function setHeight(int|null $height): self;
}
