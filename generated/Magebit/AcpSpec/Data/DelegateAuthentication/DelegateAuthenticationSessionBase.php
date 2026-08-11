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
use Magebit\AcpSpec\Api\DelegateAuthentication\DelegateAuthenticationSessionBaseInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Base properties for an authentication session response.
 */
class DelegateAuthenticationSessionBase extends SpecObject implements DelegateAuthenticationSessionBaseInterface
{
    /**
     * @return string
     */
    public function getAuthenticationSessionId(): string
    {
        return $this->requireString(self::KEY_AUTHENTICATION_SESSION_ID);
    }

    /**
     * @param string $authenticationSessionId
     * @return self
     */
    public function setAuthenticationSessionId(string $authenticationSessionId): self
    {
        return $this->set(self::KEY_AUTHENTICATION_SESSION_ID, $authenticationSessionId);
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->requireString(self::KEY_STATUS);
    }

    /**
     * @param string $status
     * @return self
     */
    public function setStatus(string $status): self
    {
        return $this->set(self::KEY_STATUS, $status);
    }

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\ActionInterface|null
     */
    public function getAction(): ActionInterface|null
    {
        return $this->instanceOrNull(self::KEY_ACTION, \Magebit\AcpSpec\Api\DelegateAuthentication\ActionInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\ActionInterface|null $action
     * @return self
     */
    public function setAction(ActionInterface|null $action): self
    {
        return $this->set(self::KEY_ACTION, $action);
    }
}
