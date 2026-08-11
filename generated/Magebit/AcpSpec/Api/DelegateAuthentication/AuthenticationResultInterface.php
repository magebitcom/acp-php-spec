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
 * 3DS authentication result returned by the authentication provider
 */
interface AuthenticationResultInterface
{
    public const KEY_TRANS_STATUS = 'trans_status';
    public const KEY_ELECTRONIC_COMMERCE_INDICATOR = 'electronic_commerce_indicator';
    public const KEY_THREE_DS_CRYPTOGRAM = 'three_ds_cryptogram';
    public const KEY_TRANSACTION_ID = 'transaction_id';
    public const KEY_THREE_DS_SERVER_TRANS_ID = 'three_ds_server_trans_id';
    public const KEY_VERSION = 'version';
    public const KEY_AUTHENTICATION_VALUE = 'authentication_value';
    public const KEY_TRANS_STATUS_REASON = 'trans_status_reason';
    public const KEY_CARDHOLDER_INFO = 'cardholder_info';

    /**
     * Transaction status (Y, N, A, U, R, etc.)
     *
     * @return string
     */
    public function getTransStatus(): string;

    /**
     * Transaction status (Y, N, A, U, R, etc.)
     *
     * @param string $transStatus
     * @return self
     */
    public function setTransStatus(string $transStatus): self;

    /**
     * Electronic Commerce Indicator
     *
     * @return string|null
     */
    public function getElectronicCommerceIndicator(): string|null;

    /**
     * Electronic Commerce Indicator
     *
     * @param string|null $electronicCommerceIndicator
     * @return self
     */
    public function setElectronicCommerceIndicator(string|null $electronicCommerceIndicator): self;

    /**
     * Authentication cryptogram (CAVV/AAV)
     *
     * @return string|null
     */
    public function getThreeDsCryptogram(): string|null;

    /**
     * Authentication cryptogram (CAVV/AAV)
     *
     * @param string|null $threeDsCryptogram
     * @return self
     */
    public function setThreeDsCryptogram(string|null $threeDsCryptogram): self;

    /**
     * Directory Server transaction ID
     *
     * @return string
     */
    public function getTransactionId(): string;

    /**
     * Directory Server transaction ID
     *
     * @param string $transactionId
     * @return self
     */
    public function setTransactionId(string $transactionId): self;

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

    /**
     * 3DS protocol version
     *
     * @return string
     */
    public function getVersion(): string;

    /**
     * 3DS protocol version
     *
     * @param string $version
     * @return self
     */
    public function setVersion(string $version): self;

    /**
     * Authentication value (CAVV)
     *
     * @return string|null
     */
    public function getAuthenticationValue(): string|null;

    /**
     * Authentication value (CAVV)
     *
     * @param string|null $authenticationValue
     * @return self
     */
    public function setAuthenticationValue(string|null $authenticationValue): self;

    /**
     * Reason code for trans_status
     *
     * @return string|null
     */
    public function getTransStatusReason(): string|null;

    /**
     * Reason code for trans_status
     *
     * @param string|null $transStatusReason
     * @return self
     */
    public function setTransStatusReason(string|null $transStatusReason): self;

    /**
     * Message to display to cardholder
     *
     * @return string|null
     */
    public function getCardholderInfo(): string|null;

    /**
     * Message to display to cardholder
     *
     * @param string|null $cardholderInfo
     * @return self
     */
    public function setCardholderInfo(string|null $cardholderInfo): self;
}
