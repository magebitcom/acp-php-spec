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
 * Base properties for an authentication session response.
 */
interface DelegateAuthenticationSessionBaseInterface
{
    public const KEY_AUTHENTICATION_SESSION_ID = 'authentication_session_id';
    public const KEY_STATUS = 'status';
    public const KEY_ACTION = 'action';
    public const STATUS_ACTION_REQUIRED = 'action_required';
    public const STATUS_PENDING = 'pending';
    public const STATUS_NOT_SUPPORTED = 'not_supported';
    public const STATUS_AUTHENTICATED = 'authenticated';
    public const STATUS_ATTEMPTED = 'attempted';
    public const STATUS_NOT_AUTHENTICATED = 'not_authenticated';
    public const STATUS_REJECTED = 'rejected';
    public const STATUS_UNAVAILABLE = 'unavailable';
    public const STATUS_EXPIRED = 'expired';
    public const STATUS_CHALLENGE_ABANDONED = 'challenge_abandoned';

    /**
     * Session ID for subsequent requests
     *
     * @return string
     */
    public function getAuthenticationSessionId(): string;

    /**
     * Session ID for subsequent requests
     *
     * @param string $authenticationSessionId
     * @return self
     */
    public function setAuthenticationSessionId(string $authenticationSessionId): self;

    /**
     * Session status indicating current state and next action
     *
     * @return string
     */
    public function getStatus(): string;

    /**
     * Session status indicating current state and next action
     *
     * @param string $status
     * @return self
     */
    public function setStatus(string $status): self;

    /**
     * @return \Magebit\AcpSpec\Api\DelegateAuthentication\ActionInterface|null
     */
    public function getAction(): ActionInterface|null;

    /**
     * @param \Magebit\AcpSpec\Api\DelegateAuthentication\ActionInterface|null $action
     * @return self
     */
    public function setAction(ActionInterface|null $action): self;
}
