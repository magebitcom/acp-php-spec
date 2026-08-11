<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\DelegateAuthentication;

/**
 * The communication channel between the shopper and the merchant.
 */
interface ChannelInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_BROWSER = 'browser';
    public const TYPE_BROWSER = 'browser';

    /**
     * Channel type
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Channel type
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\BrowserInfoInterface
     */
    public function getBrowser(): BrowserInfoInterface;

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\BrowserInfoInterface $browser
     * @return self
     */
    public function setBrowser(BrowserInfoInterface $browser): self;
}
