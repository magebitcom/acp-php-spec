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
use Magebit\AcpSpec\Api\Feed\MediaInterface;
use Magebit\AcpSpec\Api\Feed\ProductInterface;
use Magebit\AcpSpec\Api\Feed\VariantInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Catalog product grouping one or more purchasable variants within a feed.
 */
class Product extends SpecObject implements ProductInterface
{
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->requireString(self::KEY_ID);
    }

    /**
     * @param string $id
     * @return self
     */
    public function setId(string $id): self
    {
        return $this->set(self::KEY_ID, $id);
    }

    /**
     * @return string|null
     */
    public function getTitle(): string|null
    {
        return $this->stringOrNull(self::KEY_TITLE);
    }

    /**
     * @param string|null $title
     * @return self
     */
    public function setTitle(string|null $title): self
    {
        return $this->set(self::KEY_TITLE, $title);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Feed\DescriptionInterface|null
     */
    public function getDescription(): DescriptionInterface|null
    {
        return $this->instanceOrNull(self::KEY_DESCRIPTION, \Magebit\AcpSpec\Api\Feed\DescriptionInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\DescriptionInterface|null $description
     * @return self
     */
    public function setDescription(DescriptionInterface|null $description): self
    {
        return $this->set(self::KEY_DESCRIPTION, $description);
    }

    /**
     * @return string|null
     */
    public function getUrl(): string|null
    {
        return $this->stringOrNull(self::KEY_URL);
    }

    /**
     * @param string|null $url
     * @return self
     */
    public function setUrl(string|null $url): self
    {
        return $this->set(self::KEY_URL, $url);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Feed\MediaInterface[]|null
     */
    public function getMedia(): array|null
    {
        return $this->instanceListOrNull(self::KEY_MEDIA, \Magebit\AcpSpec\Api\Feed\MediaInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\MediaInterface[]|null $media
     * @return self
     */
    public function setMedia(array|null $media): self
    {
        return $this->set(self::KEY_MEDIA, $media);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Feed\VariantInterface[]
     */
    public function getVariants(): array
    {
        return $this->instanceList(self::KEY_VARIANTS, \Magebit\AcpSpec\Api\Feed\VariantInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\VariantInterface[] $variants
     * @return self
     */
    public function setVariants(array $variants): self
    {
        return $this->set(self::KEY_VARIANTS, $variants);
    }
}
