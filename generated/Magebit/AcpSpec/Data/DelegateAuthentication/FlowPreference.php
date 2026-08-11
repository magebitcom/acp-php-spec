<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\DelegateAuthentication;

use Magebit\AcpSpec\Api\DelegateAuthentication\FlowPreferenceChallengeInterface;
use Magebit\AcpSpec\Api\DelegateAuthentication\FlowPreferenceInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Preference for the 3DS authentication flow. Clients MAY request a preference, but issuers ultimately decide the actual flow.
 */
class FlowPreference extends SpecObject implements FlowPreferenceInterface
{
    /** @var string[] */
    protected array $jsonObjectKeys = ['frictionless'];

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
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\FlowPreferenceChallengeInterface|null
     */
    public function getChallenge(): FlowPreferenceChallengeInterface|null
    {
        return $this->instanceOrNull(self::KEY_CHALLENGE, \Magebit\AcpSpec\Api\DelegateAuthentication\FlowPreferenceChallengeInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\FlowPreferenceChallengeInterface|null $challenge
     * @return self
     */
    public function setChallenge(FlowPreferenceChallengeInterface|null $challenge): self
    {
        return $this->set(self::KEY_CHALLENGE, $challenge);
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getFrictionless(): array|null
    {
        return $this->arrayOrNull(self::KEY_FRICTIONLESS);
    }

    /**
     * @param array<string, mixed>|null $frictionless
     * @return self
     */
    public function setFrictionless(array|null $frictionless): self
    {
        return $this->set(self::KEY_FRICTIONLESS, $frictionless);
    }
}
