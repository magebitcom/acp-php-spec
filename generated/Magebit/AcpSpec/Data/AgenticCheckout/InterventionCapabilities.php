<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\AgenticCheckout;

use Magebit\AcpSpec\Api\AgenticCheckout\InterventionCapabilitiesInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Intervention capabilities. Context-specific fields: display_context, redirect_context, max_redirects, max_interaction_depth (requests only). required, enforcement (responses only). supported field contains intersection in responses.
 */
class InterventionCapabilities extends SpecObject implements InterventionCapabilitiesInterface
{
    /**
     * @return string[]|null
     */
    public function getSupported(): array|null
    {
        return $this->arrayOrNull(self::KEY_SUPPORTED);
    }

    /**
     * @param string[]|null $supported
     * @return self
     */
    public function setSupported(array|null $supported): self
    {
        return $this->set(self::KEY_SUPPORTED, $supported);
    }

    /**
     * @return string[]|null
     */
    public function getRequired(): array|null
    {
        return $this->arrayOrNull(self::KEY_REQUIRED);
    }

    /**
     * @param string[]|null $required
     * @return self
     */
    public function setRequired(array|null $required): self
    {
        return $this->set(self::KEY_REQUIRED, $required);
    }

    /**
     * @return string|null
     */
    public function getEnforcement(): string|null
    {
        return $this->stringOrNull(self::KEY_ENFORCEMENT);
    }

    /**
     * @param string|null $enforcement
     * @return self
     */
    public function setEnforcement(string|null $enforcement): self
    {
        return $this->set(self::KEY_ENFORCEMENT, $enforcement);
    }

    /**
     * @return string|null
     */
    public function getDisplayContext(): string|null
    {
        return $this->stringOrNull(self::KEY_DISPLAY_CONTEXT);
    }

    /**
     * @param string|null $displayContext
     * @return self
     */
    public function setDisplayContext(string|null $displayContext): self
    {
        return $this->set(self::KEY_DISPLAY_CONTEXT, $displayContext);
    }

    /**
     * @return string|null
     */
    public function getRedirectContext(): string|null
    {
        return $this->stringOrNull(self::KEY_REDIRECT_CONTEXT);
    }

    /**
     * @param string|null $redirectContext
     * @return self
     */
    public function setRedirectContext(string|null $redirectContext): self
    {
        return $this->set(self::KEY_REDIRECT_CONTEXT, $redirectContext);
    }

    /**
     * @return int|null
     */
    public function getMaxRedirects(): int|null
    {
        return $this->intOrNull(self::KEY_MAX_REDIRECTS);
    }

    /**
     * @param int|null $maxRedirects
     * @return self
     */
    public function setMaxRedirects(int|null $maxRedirects): self
    {
        return $this->set(self::KEY_MAX_REDIRECTS, $maxRedirects);
    }

    /**
     * @return int|null
     */
    public function getMaxInteractionDepth(): int|null
    {
        return $this->intOrNull(self::KEY_MAX_INTERACTION_DEPTH);
    }

    /**
     * @param int|null $maxInteractionDepth
     * @return self
     */
    public function setMaxInteractionDepth(int|null $maxInteractionDepth): self
    {
        return $this->set(self::KEY_MAX_INTERACTION_DEPTH, $maxInteractionDepth);
    }
}
