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
 * High-level extension declaration in the discovery document. Identifies the extension and provides a spec URL, but does not include session-level details like schema or extends fields.
 */
interface DiscoveryExtensionInterface
{
    public const KEY_NAME = 'name';
    public const KEY_SPEC = 'spec';
    public const KEY_SCHEMA = 'schema';
    public const CONSTRAINTS = ['spec' => ['format' => 'uri'], 'schema' => ['format' => 'uri']];

    /**
     * Extension identifier (e.g., "discount", "fulfillment").
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Extension identifier (e.g., "discount", "fulfillment").
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;

    /**
     * URL to the extension's specification document.
     *
     * @return string|null
     */
    public function getSpec(): string|null;

    /**
     * URL to the extension's specification document.
     *
     * @param string|null $spec
     * @return self
     */
    public function setSpec(string|null $spec): self;

    /**
     * URL to the extension's JSON Schema definition for programmatic validation.
     *
     * @return string|null
     */
    public function getSchema(): string|null;

    /**
     * URL to the extension's JSON Schema definition for programmatic validation.
     *
     * @param string|null $schema
     * @return self
     */
    public function setSchema(string|null $schema): self;
}
