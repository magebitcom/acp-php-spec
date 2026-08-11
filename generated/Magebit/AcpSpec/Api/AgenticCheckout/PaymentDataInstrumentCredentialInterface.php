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
 * Payment credential
 */
interface PaymentDataInstrumentCredentialInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_TOKEN = 'token';

    /**
     * Credential type (e.g., spt, wallet_token)
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Credential type (e.g., spt, wallet_token)
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Credential token value
     *
     * @return string
     */
    public function getToken(): string;

    /**
     * Credential token value
     *
     * @param string $token
     * @return self
     */
    public function setToken(string $token): self;
}
