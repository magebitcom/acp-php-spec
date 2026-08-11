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

use Magebit\AcpSpec\Api\Feed\LinkInterface;
use Magebit\AcpSpec\Api\Feed\SellerInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Merchant or seller identity associated with a variant offer.
 */
class Seller extends SpecObject implements SellerInterface
{
    /**
     * @return string|null
     */
    public function getName(): string|null
    {
        return $this->stringOrNull(self::KEY_NAME);
    }

    /**
     * @param string|null $name
     * @return self
     */
    public function setName(string|null $name): self
    {
        return $this->set(self::KEY_NAME, $name);
    }

    /**
     * @return \Magebit\AcpSpec\Api\Feed\LinkInterface[]|null
     */
    public function getLinks(): array|null
    {
        return $this->instanceListOrNull(self::KEY_LINKS, \Magebit\AcpSpec\Api\Feed\LinkInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\Feed\LinkInterface[]|null $links
     * @return self
     */
    public function setLinks(array|null $links): self
    {
        return $this->set(self::KEY_LINKS, $links);
    }
}
