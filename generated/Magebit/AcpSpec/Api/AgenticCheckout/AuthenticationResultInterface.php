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
 * Agent-provided authentication results returned to the seller for card-based 3D Secure.
 */
interface AuthenticationResultInterface
{
    public const KEY_OUTCOME = 'outcome';
    public const KEY_OUTCOME_DETAILS = 'outcome_details';
    public const OUTCOME_ABANDONED = 'abandoned';
    public const OUTCOME_ATTEMPT_ACKNOWLEDGED = 'attempt_acknowledged';
    public const OUTCOME_AUTHENTICATED = 'authenticated';
    public const OUTCOME_CANCELED = 'canceled';
    public const OUTCOME_DENIED = 'denied';
    public const OUTCOME_INFORMATIONAL = 'informational';
    public const OUTCOME_INTERNAL_ERROR = 'internal_error';
    public const OUTCOME_NOT_SUPPORTED = 'not_supported';
    public const OUTCOME_PROCESSING_ERROR = 'processing_error';
    public const OUTCOME_REJECTED = 'rejected';

    /**
     * The outcome of this 3DS Authentication.
     *
     * @return string
     */
    public function getOutcome(): string;

    /**
     * The outcome of this 3DS Authentication.
     *
     * @param string $outcome
     * @return self
     */
    public function setOutcome(string $outcome): self;

    /**
     * Detailed authentication data. This field is required when the outcome is 'authenticated', 'informational', or 'attempt_acknowledged'.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationResultOutcomeDetailsInterface|null
     */
    public function getOutcomeDetails(): AuthenticationResultOutcomeDetailsInterface|null;

    /**
     * Detailed authentication data. This field is required when the outcome is 'authenticated', 'informational', or 'attempt_acknowledged'.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationResultOutcomeDetailsInterface|null $outcomeDetails
     * @return self
     */
    public function setOutcomeDetails(AuthenticationResultOutcomeDetailsInterface|null $outcomeDetails): self;
}
