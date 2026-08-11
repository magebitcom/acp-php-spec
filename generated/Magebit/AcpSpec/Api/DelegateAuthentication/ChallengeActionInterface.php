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
 * Details for executing a 3DS challenge action.
 */
interface ChallengeActionInterface
{
    public const KEY_ACS_URL = 'acs_url';
    public const KEY_ACS_TRANS_ID = 'acs_trans_id';
    public const KEY_THREE_DS_SERVER_TRANS_ID = 'three_ds_server_trans_id';
    public const KEY_MESSAGE_VERSION = 'message_version';

    /**
     * URL to POST challenge request to
     *
     * @return string
     */
    public function getAcsUrl(): string;

    /**
     * URL to POST challenge request to
     *
     * @param string $acsUrl
     * @return self
     */
    public function setAcsUrl(string $acsUrl): self;

    /**
     * ACS transaction identifier
     *
     * @return string
     */
    public function getAcsTransId(): string;

    /**
     * ACS transaction identifier
     *
     * @param string $acsTransId
     * @return self
     */
    public function setAcsTransId(string $acsTransId): self;

    /**
     * 3DS Server transaction identifier
     *
     * @return string
     */
    public function getThreeDsServerTransId(): string;

    /**
     * 3DS Server transaction identifier
     *
     * @param string $threeDsServerTransId
     * @return self
     */
    public function setThreeDsServerTransId(string $threeDsServerTransId): self;

    /**
     * 3DS protocol version (e.g., "2.2.0")
     *
     * @return string
     */
    public function getMessageVersion(): string;

    /**
     * 3DS protocol version (e.g., "2.2.0")
     *
     * @param string $messageVersion
     * @return self
     */
    public function setMessageVersion(string $messageVersion): self;
}
