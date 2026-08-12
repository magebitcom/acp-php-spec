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
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Specific preferences if a challenge is requested.
 */
class FlowPreferenceChallenge extends SpecObject implements FlowPreferenceChallengeInterface
{
    /**
     * @return string|null
     */
    public function getType(): string|null
    {
        return $this->stringOrNull(self::KEY_TYPE);
    }

    /**
     * @param string|null $type
     * @return self
     */
    public function setType(string|null $type): self
    {
        return $this->set(self::KEY_TYPE, $type);
    }
}
