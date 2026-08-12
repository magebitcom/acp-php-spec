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

use Magebit\AcpSpec\Api\DelegateAuthentication\FingerprintActionInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Details for executing a 3DS fingerprinting action.
 */
class FingerprintAction extends SpecObject implements FingerprintActionInterface
{
    /**
     * @return string
     */
    public function getThreeDsMethodUrl(): string
    {
        return $this->requireString(self::KEY_THREE_DS_METHOD_URL);
    }

    /**
     * @param string $threeDsMethodUrl
     * @return self
     */
    public function setThreeDsMethodUrl(string $threeDsMethodUrl): self
    {
        return $this->set(self::KEY_THREE_DS_METHOD_URL, $threeDsMethodUrl);
    }

    /**
     * @return string
     */
    public function getThreeDsServerTransId(): string
    {
        return $this->requireString(self::KEY_THREE_DS_SERVER_TRANS_ID);
    }

    /**
     * @param string $threeDsServerTransId
     * @return self
     */
    public function setThreeDsServerTransId(string $threeDsServerTransId): self
    {
        return $this->set(self::KEY_THREE_DS_SERVER_TRANS_ID, $threeDsServerTransId);
    }
}
