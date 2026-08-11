<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\AgenticCheckout;

use Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationResultInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationResultOutcomeDetailsInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Agent-provided authentication results returned to the seller for card-based 3D Secure.
 */
class AuthenticationResult extends SpecObject implements AuthenticationResultInterface
{
    /**
     * @return string
     */
    public function getOutcome(): string
    {
        return $this->requireString(self::KEY_OUTCOME);
    }

    /**
     * @param string $outcome
     * @return self
     */
    public function setOutcome(string $outcome): self
    {
        return $this->set(self::KEY_OUTCOME, $outcome);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationResultOutcomeDetailsInterface|null
     */
    public function getOutcomeDetails(): AuthenticationResultOutcomeDetailsInterface|null
    {
        return $this->instanceOrNull(self::KEY_OUTCOME_DETAILS, \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationResultOutcomeDetailsInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationResultOutcomeDetailsInterface|null $outcomeDetails
     * @return self
     */
    public function setOutcomeDetails(AuthenticationResultOutcomeDetailsInterface|null $outcomeDetails): self
    {
        return $this->set(self::KEY_OUTCOME_DETAILS, $outcomeDetails);
    }
}
