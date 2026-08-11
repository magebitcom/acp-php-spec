<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\AgenticCheckout;

/**
 * Detailed authentication data. This field is required when the outcome is 'authenticated', 'informational', or 'attempt_acknowledged'.
 */
interface AuthenticationResultOutcomeDetailsInterface
{
    public const KEY_THREE_DS_CRYPTOGRAM = 'three_ds_cryptogram';
    public const KEY_ELECTRONIC_COMMERCE_INDICATOR = 'electronic_commerce_indicator';
    public const KEY_TRANSACTION_ID = 'transaction_id';
    public const KEY_VERSION = 'version';
    public const ELECTRONIC_COMMERCE_INDICATOR_01 = '01';
    public const ELECTRONIC_COMMERCE_INDICATOR_02 = '02';
    public const ELECTRONIC_COMMERCE_INDICATOR_05 = '05';
    public const ELECTRONIC_COMMERCE_INDICATOR_06 = '06';
    public const ELECTRONIC_COMMERCE_INDICATOR_07 = '07';

    /**
     * The 3DS cryptogram (authentication value / AAV/CAVV/AEVV). This value is 20 bytes, base64-encoded into a 28-character string.
     *
     * @return string
     */
    public function getThreeDsCryptogram(): string;

    /**
     * The 3DS cryptogram (authentication value / AAV/CAVV/AEVV). This value is 20 bytes, base64-encoded into a 28-character string.
     *
     * @param string $threeDsCryptogram
     * @return self
     */
    public function setThreeDsCryptogram(string $threeDsCryptogram): self;

    /**
     * Electronic Commerce Indicator (ECI) returned by the 3D Secure provider. Indicates the degree/type of authentication performed.
     *
     * @return string
     */
    public function getElectronicCommerceIndicator(): string;

    /**
     * Electronic Commerce Indicator (ECI) returned by the 3D Secure provider. Indicates the degree/type of authentication performed.
     *
     * @param string $electronicCommerceIndicator
     * @return self
     */
    public function setElectronicCommerceIndicator(string $electronicCommerceIndicator): self;

    /**
     * Transaction identifier returned by the 3DS system:
     * - For 3DS1: the XID
     * - For 3DS2: the Directory Server Transaction ID (dsTransID)
     *
     * @return string
     */
    public function getTransactionId(): string;

    /**
     * Transaction identifier returned by the 3DS system:
     * - For 3DS1: the XID
     * - For 3DS2: the Directory Server Transaction ID (dsTransID)
     *
     * @param string $transactionId
     * @return self
     */
    public function setTransactionId(string $transactionId): self;

    /**
     * The 3D Secure version used for this authentication (for example '1.0.2' or '2.2.0').
     *
     * @return string
     */
    public function getVersion(): string;

    /**
     * The 3D Secure version used for this authentication (for example '1.0.2' or '2.2.0').
     *
     * @param string $version
     * @return self
     */
    public function setVersion(string $version): self;
}
