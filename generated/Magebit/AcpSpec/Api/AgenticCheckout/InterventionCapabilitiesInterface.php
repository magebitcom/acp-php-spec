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
 * Intervention capabilities. Context-specific fields: display_context, redirect_context, max_redirects, max_interaction_depth (requests only). required, enforcement (responses only). supported field contains intersection in responses.
 */
interface InterventionCapabilitiesInterface
{
    public const KEY_SUPPORTED = 'supported';
    public const KEY_REQUIRED = 'required';
    public const KEY_ENFORCEMENT = 'enforcement';
    public const KEY_DISPLAY_CONTEXT = 'display_context';
    public const KEY_REDIRECT_CONTEXT = 'redirect_context';
    public const KEY_MAX_REDIRECTS = 'max_redirects';
    public const KEY_MAX_INTERACTION_DEPTH = 'max_interaction_depth';
    public const ENFORCEMENT_ALWAYS = 'always';
    public const ENFORCEMENT_CONDITIONAL = 'conditional';
    public const ENFORCEMENT_OPTIONAL = 'optional';
    public const DISPLAY_CONTEXT_NATIVE = 'native';
    public const DISPLAY_CONTEXT_WEBVIEW = 'webview';
    public const DISPLAY_CONTEXT_MODAL = 'modal';
    public const DISPLAY_CONTEXT_REDIRECT = 'redirect';
    public const REDIRECT_CONTEXT_IN_APP = 'in_app';
    public const REDIRECT_CONTEXT_EXTERNAL_BROWSER = 'external_browser';
    public const REDIRECT_CONTEXT_NONE = 'none';

    /**
     * Intervention types supported. Agent request: Interventions the agent can handle. Seller response: Intersection of supported interventions.
     *
     * @return string[]|null
     */
    public function getSupported(): array|null;

    /**
     * Intervention types supported. Agent request: Interventions the agent can handle. Seller response: Intersection of supported interventions.
     *
     * @param string[]|null $supported
     * @return self
     */
    public function setSupported(array|null $supported): self;

    /**
     * Intervention methods required for this session (seller only).
     *
     * @return string[]|null
     */
    public function getRequired(): array|null;

    /**
     * Intervention methods required for this session (seller only).
     *
     * @param string[]|null $required
     * @return self
     */
    public function setRequired(array|null $required): self;

    /**
     * When required interventions are enforced (seller only).
     *
     * @return string|null
     */
    public function getEnforcement(): string|null;

    /**
     * When required interventions are enforced (seller only).
     *
     * @param string|null $enforcement
     * @return self
     */
    public function setEnforcement(string|null $enforcement): self;

    /**
     * How the Agent presents interventions (agent only).
     *
     * @return string|null
     */
    public function getDisplayContext(): string|null;

    /**
     * How the Agent presents interventions (agent only).
     *
     * @param string|null $displayContext
     * @return self
     */
    public function setDisplayContext(string|null $displayContext): self;

    /**
     * How the Agent handles redirects (agent only).
     *
     * @return string|null
     */
    public function getRedirectContext(): string|null;

    /**
     * How the Agent handles redirects (agent only).
     *
     * @param string|null $redirectContext
     * @return self
     */
    public function setRedirectContext(string|null $redirectContext): self;

    /**
     * Maximum number of redirects the Agent can handle (agent only).
     *
     * @return int|null
     */
    public function getMaxRedirects(): int|null;

    /**
     * Maximum number of redirects the Agent can handle (agent only).
     *
     * @param int|null $maxRedirects
     * @return self
     */
    public function setMaxRedirects(int|null $maxRedirects): self;

    /**
     * Maximum depth of nested interactions the Agent can handle (agent only).
     *
     * @return int|null
     */
    public function getMaxInteractionDepth(): int|null;

    /**
     * Maximum depth of nested interactions the Agent can handle (agent only).
     *
     * @param int|null $maxInteractionDepth
     * @return self
     */
    public function setMaxInteractionDepth(int|null $maxInteractionDepth): self;
}
