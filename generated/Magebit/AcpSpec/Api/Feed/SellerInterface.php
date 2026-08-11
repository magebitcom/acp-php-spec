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
 * Merchant or seller identity associated with a variant offer.
 */
interface SellerInterface
{
    public const KEY_NAME = 'name';
    public const KEY_LINKS = 'links';

    /**
     * Display name of the seller or merchant of record.
     *
     * @return string|null
     */
    public function getName(): string|null;

    /**
     * Display name of the seller or merchant of record.
     *
     * @param string|null $name
     * @return self
     */
    public function setName(string|null $name): self;

    /**
     * Informational or policy links associated with this seller.
     *
     * @return \Magebit\AcpSpec\Api\Feed\LinkInterface[]|null
     */
    public function getLinks(): array|null;

    /**
     * Informational or policy links associated with this seller.
     *
     * @param \Magebit\AcpSpec\Api\Feed\LinkInterface[]|null $links
     * @return self
     */
    public function setLinks(array|null $links): self;
}
