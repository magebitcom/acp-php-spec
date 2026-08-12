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

use Magebit\AcpSpec\Api\DelegateAuthentication\ActionInterface;
use Magebit\AcpSpec\Api\DelegateAuthentication\ChallengeActionInterface;
use Magebit\AcpSpec\Api\DelegateAuthentication\FingerprintActionInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Describes browser action required
 */
class Action extends SpecObject implements ActionInterface
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
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\FingerprintActionInterface|null
     */
    public function getFingerprint(): FingerprintActionInterface|null
    {
        return $this->instanceOrNull(self::KEY_FINGERPRINT, \Magebit\AcpSpec\Api\DelegateAuthentication\FingerprintActionInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\FingerprintActionInterface|null $fingerprint
     * @return self
     */
    public function setFingerprint(FingerprintActionInterface|null $fingerprint): self
    {
        return $this->set(self::KEY_FINGERPRINT, $fingerprint);
    }

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\ChallengeActionInterface|null
     */
    public function getChallenge(): ChallengeActionInterface|null
    {
        return $this->instanceOrNull(self::KEY_CHALLENGE, \Magebit\AcpSpec\Api\DelegateAuthentication\ChallengeActionInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\ChallengeActionInterface|null $challenge
     * @return self
     */
    public function setChallenge(ChallengeActionInterface|null $challenge): self
    {
        return $this->set(self::KEY_CHALLENGE, $challenge);
    }
}
