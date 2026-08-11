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
 * Contains additional details on the seller's preference for the 3DS authentication flow. Sellers MAY request a preference, but issuers ultimately decide the actual flow.
 */
interface AuthenticationMetadataFlowPreferenceInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_CHALLENGE = 'challenge';
    public const KEY_FRICTIONLESS = 'frictionless';
    public const TYPE_CHALLENGE = 'challenge';
    public const TYPE_FRICTIONLESS = 'frictionless';

    /**
     * Type of flow requested for this 3DS Authentication. 'challenge' requests a challenge flow; 'frictionless' requests a frictionless flow.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Type of flow requested for this 3DS Authentication. 'challenge' requests a challenge flow; 'frictionless' requests a frictionless flow.
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Details about the requested challenge flow.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceChallengeInterface|null
     */
    public function getChallenge(): AuthenticationMetadataFlowPreferenceChallengeInterface|null;

    /**
     * Details about the requested challenge flow.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceChallengeInterface|null $challenge
     * @return self
     */
    public function setChallenge(AuthenticationMetadataFlowPreferenceChallengeInterface|null $challenge): self;

    /**
     * Details about the requested frictionless flow.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceFrictionlessInterface|null
     */
    public function getFrictionless(): AuthenticationMetadataFlowPreferenceFrictionlessInterface|null;

    /**
     * Details about the requested frictionless flow.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceFrictionlessInterface|null $frictionless
     * @return self
     */
    public function setFrictionless(
        AuthenticationMetadataFlowPreferenceFrictionlessInterface|null $frictionless,
    ): self;
}
