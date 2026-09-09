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
 * Object containing acquirer data used for AReq construction. Recommended to ensure the authentication matches the final authorization.
 */
interface DelegateAuthenticationCreateRequestAcquirerDetailsInterface
{
    public const KEY_ACQUIRER_BIN = 'acquirer_bin';
    public const KEY_ACQUIRER_COUNTRY = 'acquirer_country';
    public const KEY_ACQUIRER_MERCHANT_ID = 'acquirer_merchant_id';
    public const KEY_MERCHANT_NAME = 'merchant_name';
    public const KEY_REQUESTOR_ID = 'requestor_id';

    public const CONSTRAINTS = [
        'acquirer_bin' => ['maxLength' => 11],
        'acquirer_country' => ['minLength' => 2, 'maxLength' => 2],
        'acquirer_merchant_id' => ['maxLength' => 35],
        'merchant_name' => ['maxLength' => 40],
        'requestor_id' => ['maxLength' => 35],
    ];

    /**
     * The Acquirer BIN.
     *
     * @return string
     */
    public function getAcquirerBin(): string;

    /**
     * The Acquirer BIN.
     *
     * @param string $acquirerBin
     * @return self
     */
    public function setAcquirerBin(string $acquirerBin): self;

    /**
     * Two-letter ISO 3166-1 alpha-2 country code.
     *
     * @return string
     */
    public function getAcquirerCountry(): string;

    /**
     * Two-letter ISO 3166-1 alpha-2 country code.
     *
     * @param string $acquirerCountry
     * @return self
     */
    public function setAcquirerCountry(string $acquirerCountry): self;

    /**
     * The Merchant ID assigned by the acquirer.
     *
     * @return string
     */
    public function getAcquirerMerchantId(): string;

    /**
     * The Merchant ID assigned by the acquirer.
     *
     * @param string $acquirerMerchantId
     * @return self
     */
    public function setAcquirerMerchantId(string $acquirerMerchantId): self;

    /**
     * Merchant name assigned by the acquirer.
     *
     * @return string
     */
    public function getMerchantName(): string;

    /**
     * Merchant name assigned by the acquirer.
     *
     * @param string $merchantName
     * @return self
     */
    public function setMerchantName(string $merchantName): self;

    /**
     * 3DS Requestor ID (if required by directory server).
     *
     * @return string|null
     */
    public function getRequestorId(): string|null;

    /**
     * 3DS Requestor ID (if required by directory server).
     *
     * @param string|null $requestorId
     * @return self
     */
    public function setRequestorId(string|null $requestorId): self;
}
