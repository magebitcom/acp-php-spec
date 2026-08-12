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

use Magebit\AcpSpec\Api\DelegateAuthentication\ChallengeActionInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Details for executing a 3DS challenge action.
 */
class ChallengeAction extends SpecObject implements ChallengeActionInterface
{
    /**
     * @return string
     */
    public function getAcsUrl(): string
    {
        return $this->requireString(self::KEY_ACS_URL);
    }

    /**
     * @param string $acsUrl
     * @return self
     */
    public function setAcsUrl(string $acsUrl): self
    {
        return $this->set(self::KEY_ACS_URL, $acsUrl);
    }

    /**
     * @return string
     */
    public function getAcsTransId(): string
    {
        return $this->requireString(self::KEY_ACS_TRANS_ID);
    }

    /**
     * @param string $acsTransId
     * @return self
     */
    public function setAcsTransId(string $acsTransId): self
    {
        return $this->set(self::KEY_ACS_TRANS_ID, $acsTransId);
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

    /**
     * @return string
     */
    public function getMessageVersion(): string
    {
        return $this->requireString(self::KEY_MESSAGE_VERSION);
    }

    /**
     * @param string $messageVersion
     * @return self
     */
    public function setMessageVersion(string $messageVersion): self
    {
        return $this->set(self::KEY_MESSAGE_VERSION, $messageVersion);
    }
}
