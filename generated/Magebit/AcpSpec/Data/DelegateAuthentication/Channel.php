<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\DelegateAuthentication;

use Magebit\AcpSpec\Api\DelegateAuthentication\BrowserInfoInterface;
use Magebit\AcpSpec\Api\DelegateAuthentication\ChannelInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * The communication channel between the shopper and the merchant.
 */
class Channel extends SpecObject implements ChannelInterface
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
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\BrowserInfoInterface
     */
    public function getBrowser(): BrowserInfoInterface
    {
        return $this->requireInstance(self::KEY_BROWSER, \Magebit\AcpSpec\Api\DelegateAuthentication\BrowserInfoInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\BrowserInfoInterface $browser
     * @return self
     */
    public function setBrowser(BrowserInfoInterface $browser): self
    {
        return $this->set(self::KEY_BROWSER, $browser);
    }
}
