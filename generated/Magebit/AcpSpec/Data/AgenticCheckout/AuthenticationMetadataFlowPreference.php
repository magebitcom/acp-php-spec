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

use Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceChallengeInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceFrictionlessInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Contains additional details on the seller's preference for the 3DS authentication flow. Sellers MAY request a preference, but issuers ultimately decide the actual flow.
 */
class AuthenticationMetadataFlowPreference extends SpecObject implements AuthenticationMetadataFlowPreferenceInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->requireString(self::KEY_TYPE);
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType(string $type): self
    {
        return $this->set(self::KEY_TYPE, $type);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceChallengeInterface|null
     */
    public function getChallenge(): AuthenticationMetadataFlowPreferenceChallengeInterface|null
    {
        return $this->instanceOrNull(self::KEY_CHALLENGE, \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceChallengeInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceChallengeInterface|null $challenge
     * @return self
     */
    public function setChallenge(AuthenticationMetadataFlowPreferenceChallengeInterface|null $challenge): self
    {
        return $this->set(self::KEY_CHALLENGE, $challenge);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceFrictionlessInterface|null
     */
    public function getFrictionless(): AuthenticationMetadataFlowPreferenceFrictionlessInterface|null
    {
        return $this->instanceOrNull(self::KEY_FRICTIONLESS, \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceFrictionlessInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceFrictionlessInterface|null $frictionless
     * @return self
     */
    public function setFrictionless(
        AuthenticationMetadataFlowPreferenceFrictionlessInterface|null $frictionless,
    ): self {
        return $this->set(self::KEY_FRICTIONLESS, $frictionless);
    }
}
