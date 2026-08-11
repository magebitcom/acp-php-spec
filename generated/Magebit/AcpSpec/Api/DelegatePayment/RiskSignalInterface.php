<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\DelegatePayment;

/**
 * Fraud detection signal indicating detected risk patterns and recommended actions
 */
interface RiskSignalInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_SCORE = 'score';
    public const KEY_ACTION = 'action';
    public const TYPE_CARD_TESTING = 'card_testing';
    public const ACTION_BLOCKED = 'blocked';
    public const ACTION_MANUAL_REVIEW = 'manual_review';
    public const ACTION_AUTHORIZED = 'authorized';

    /**
     * Type of risk signal detected
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Type of risk signal detected
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Risk score indicating severity level
     *
     * @return int
     */
    public function getScore(): int;

    /**
     * Risk score indicating severity level
     *
     * @param int $score
     * @return self
     */
    public function setScore(int $score): self;

    /**
     * Recommended action based on risk assessment
     *
     * @return string
     */
    public function getAction(): string;

    /**
     * Recommended action based on risk assessment
     *
     * @param string $action
     * @return self
     */
    public function setAction(string $action): self;
}
