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
 * Describes browser action required
 */
interface ActionInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_FINGERPRINT = 'fingerprint';
    public const KEY_CHALLENGE = 'challenge';
    public const TYPE_FINGERPRINT = 'fingerprint';
    public const TYPE_CHALLENGE = 'challenge';

    /**
     * The type of action required
     *
     * @return string
     */
    public function getType(): string;

    /**
     * The type of action required
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\FingerprintActionInterface|null
     */
    public function getFingerprint(): FingerprintActionInterface|null;

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\FingerprintActionInterface|null $fingerprint
     * @return self
     */
    public function setFingerprint(FingerprintActionInterface|null $fingerprint): self;

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\ChallengeActionInterface|null
     */
    public function getChallenge(): ChallengeActionInterface|null;

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\ChallengeActionInterface|null $challenge
     * @return self
     */
    public function setChallenge(ChallengeActionInterface|null $challenge): self;
}
