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
 * Payment instrument details used for authentication.
 */
interface PaymentMethodInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_NUMBER = 'number';
    public const KEY_EXP_MONTH = 'exp_month';
    public const KEY_EXP_YEAR = 'exp_year';
    public const KEY_NAME = 'name';
    public const TYPE_CARD = 'card';
    public const CONSTRAINTS = ['exp_month' => ['maxLength' => 2], 'exp_year' => ['maxLength' => 4]];

    /**
     * The payment method type
     *
     * @return string
     */
    public function getType(): string;

    /**
     * The payment method type
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Card number (PAN)
     *
     * @return string
     */
    public function getNumber(): string;

    /**
     * Card number (PAN)
     *
     * @param string $number
     * @return self
     */
    public function setNumber(string $number): self;

    /**
     * Expiry month (01-12)
     *
     * @return string
     */
    public function getExpMonth(): string;

    /**
     * Expiry month (01-12)
     *
     * @param string $expMonth
     * @return self
     */
    public function setExpMonth(string $expMonth): self;

    /**
     * Expiry year (4 digits)
     *
     * @return string
     */
    public function getExpYear(): string;

    /**
     * Expiry year (4 digits)
     *
     * @param string $expYear
     * @return self
     */
    public function setExpYear(string $expYear): self;

    /**
     * Cardholder name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Cardholder name
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;
}
