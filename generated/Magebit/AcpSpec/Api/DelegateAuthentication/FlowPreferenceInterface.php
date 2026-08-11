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
 * Preference for the 3DS authentication flow. Clients MAY request a preference, but issuers ultimately decide the actual flow.
 */
interface FlowPreferenceInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_CHALLENGE = 'challenge';
    public const KEY_FRICTIONLESS = 'frictionless';
    public const TYPE_CHALLENGE = 'challenge';
    public const TYPE_FRICTIONLESS = 'frictionless';

    /**
     * Type of flow requested
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Type of flow requested
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Specific preferences if a challenge is requested.
     *
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\FlowPreferenceChallengeInterface|null
     */
    public function getChallenge(): FlowPreferenceChallengeInterface|null;

    /**
     * Specific preferences if a challenge is requested.
     *
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\FlowPreferenceChallengeInterface|null $challenge
     * @return self
     */
    public function setChallenge(FlowPreferenceChallengeInterface|null $challenge): self;

    /**
     * Details about the requested frictionless flow
     *
     * @return array<string, mixed>|null
     */
    public function getFrictionless(): array|null;

    /**
     * Details about the requested frictionless flow
     *
     * @param array<string, mixed>|null $frictionless
     * @return self
     */
    public function setFrictionless(array|null $frictionless): self;
}
