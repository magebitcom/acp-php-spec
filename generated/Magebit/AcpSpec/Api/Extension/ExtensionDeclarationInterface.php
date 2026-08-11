<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\Extension;

/**
 * Extension declaration in capabilities.extensions (response). Describes an active extension and which schema fields it adds.
 */
interface ExtensionDeclarationInterface
{
    public const KEY_NAME = 'name';
    public const KEY_EXTENDS = 'extends';
    public const KEY_SCHEMA = 'schema';
    public const KEY_SPEC = 'spec';

    /**
     * Unique identifier for the extension.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Unique identifier for the extension.
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;

    /**
     * JSONPath expressions identifying the schema fields added by this extension (e.g., $.CheckoutSession.discounts).
     *
     * @return string[]|null
     */
    public function getExtends(): array|null;

    /**
     * JSONPath expressions identifying the schema fields added by this extension (e.g., $.CheckoutSession.discounts).
     *
     * @param string[]|null $extends
     * @return self
     */
    public function setExtends(array|null $extends): self;

    /**
     * URL to the extension's JSON Schema definition.
     *
     * @return string|null
     */
    public function getSchema(): string|null;

    /**
     * URL to the extension's JSON Schema definition.
     *
     * @param string|null $schema
     * @return self
     */
    public function setSchema(string|null $schema): self;

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
}
