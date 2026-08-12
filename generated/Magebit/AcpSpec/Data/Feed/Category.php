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

use Magebit\AcpSpec\Api\Feed\CategoryInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Category assignment for a product or variant within a specific taxonomy.
 */
class Category extends SpecObject implements CategoryInterface
{
    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->requireString(self::KEY_VALUE);
    }

    /**
     * @param string $value
     * @return self
     */
    public function setValue(string $value): self
    {
        return $this->set(self::KEY_VALUE, $value);
    }

    /**
     * @return string|null
     */
    public function getTaxonomy(): string|null
    {
        return $this->stringOrNull(self::KEY_TAXONOMY);
    }

    /**
     * @param string|null $taxonomy
     * @return self
     */
    public function setTaxonomy(string|null $taxonomy): self
    {
        return $this->set(self::KEY_TAXONOMY, $taxonomy);
    }
}
