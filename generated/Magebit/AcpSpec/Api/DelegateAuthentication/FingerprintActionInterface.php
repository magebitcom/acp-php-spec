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
 * Details for executing a 3DS fingerprinting action.
 */
interface FingerprintActionInterface
{
    public const KEY_THREE_DS_METHOD_URL = 'three_ds_method_url';
    public const KEY_THREE_DS_SERVER_TRANS_ID = 'three_ds_server_trans_id';
    public const CONSTRAINTS = ['three_ds_method_url' => ['format' => 'uri']];

    /**
     * URL to POST fingerprint data to via hidden iframe
     *
     * @return string
     */
    public function getThreeDsMethodUrl(): string;

    /**
     * URL to POST fingerprint data to via hidden iframe
     *
     * @param string $threeDsMethodUrl
     * @return self
     */
    public function setThreeDsMethodUrl(string $threeDsMethodUrl): self;

    /**
     * 3DS Server transaction ID
     *
     * @return string
     */
    public function getThreeDsServerTransId(): string;

    /**
     * 3DS Server transaction ID
     *
     * @param string $threeDsServerTransId
     * @return self
     */
    public function setThreeDsServerTransId(string $threeDsServerTransId): self;
}
