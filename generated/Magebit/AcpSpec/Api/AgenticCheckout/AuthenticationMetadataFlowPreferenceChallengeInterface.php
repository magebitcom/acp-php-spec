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
 * Details about the requested challenge flow.
 */
interface AuthenticationMetadataFlowPreferenceChallengeInterface
{
    public const KEY_TYPE = 'type';
    public const TYPE_MANDATED = 'mandated';
    public const TYPE_PREFERRED = 'preferred';

    /**
     * Subtype of challenge preference.
     *
     * @return string|null
     */
    public function getType(): string|null;

    /**
     * Subtype of challenge preference.
     *
     * @param string|null $type
     * @return self
     */
    public function setType(string|null $type): self;
}
