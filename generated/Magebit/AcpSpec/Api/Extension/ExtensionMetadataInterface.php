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
 * Full metadata about an extension for documentation and discovery.
 */
interface ExtensionMetadataInterface
{
    public const KEY_ID = 'id';
    public const KEY_NAME = 'name';
    public const KEY_DESCRIPTION = 'description';
    public const KEY_EXTENDS = 'extends';
    public const KEY_SPEC = 'spec';
    public const KEY_SCHEMA = 'schema';
    public const KEY_STATUS = 'status';
    public const KEY_DEPENDS_ON = 'depends_on';
    public const STATUS_DRAFT = 'draft';
    public const STATUS_EXPERIMENTAL = 'experimental';
    public const STATUS_STABLE = 'stable';
    public const STATUS_DEPRECATED = 'deprecated';
    public const STATUS_RETIRED = 'retired';

    public const CONSTRAINTS = [
        'id' => [
            'pattern' => '^[a-z][a-z0-9_-]*(@\d{4}-\d{2}-\d{2})?$|^[a-z][a-z0-9]*(?:\.[a-z][a-z0-9_-]*)+(@\d{4}-\d{2}-\d{2})?$',
        ],
        'extends' => ['items' => ['pattern' => '^\$\.[A-Za-z][A-Za-z0-9]*(\.[A-Za-z][A-Za-z0-9_]*)*$']],
        'spec' => ['format' => 'uri'],
        'schema' => ['format' => 'uri'],
        'depends_on' => [
            'items' => [
                'pattern' => '^[a-z][a-z0-9_-]*(@\d{4}-\d{2}-\d{2})?$|^[a-z][a-z0-9]*(?:\.[a-z][a-z0-9_-]*)+(@\d{4}-\d{2}-\d{2})?$',
            ],
        ],
    ];

    /**
     * Unique identifier for the extension.
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Unique identifier for the extension.
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * Human-readable name for the extension.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Human-readable name for the extension.
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;

    /**
     * Brief description of what the extension provides.
     *
     * @return string|null
     */
    public function getDescription(): string|null;

    /**
     * Brief description of what the extension provides.
     *
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self;

    /**
     * JSONPath expressions identifying the schema fields added by this extension.
     *
     * @return string[]|null
     */
    public function getExtends(): array|null;

    /**
     * JSONPath expressions identifying the schema fields added by this extension.
     *
     * @param string[]|null $extends
     * @return self
     */
    public function setExtends(array|null $extends): self;

    /**
     * URL to the extension specification document.
     *
     * @return string|null
     */
    public function getSpec(): string|null;

    /**
     * URL to the extension specification document.
     *
     * @param string|null $spec
     * @return self
     */
    public function setSpec(string|null $spec): self;

    /**
     * URL to the extension JSON Schema.
     *
     * @return string|null
     */
    public function getSchema(): string|null;

    /**
     * URL to the extension JSON Schema.
     *
     * @param string|null $schema
     * @return self
     */
    public function setSchema(string|null $schema): self;

    /**
     * Lifecycle status of the extension.
     *
     * @return string|null
     */
    public function getStatus(): string|null;

    /**
     * Lifecycle status of the extension.
     *
     * @param string|null $status
     * @return self
     */
    public function setStatus(string|null $status): self;

    /**
     * Extensions that this extension depends on.
     *
     * @return string[]|null
     */
    public function getDependsOn(): array|null;

    /**
     * Extensions that this extension depends on.
     *
     * @param string[]|null $dependsOn
     * @return self
     */
    public function setDependsOn(array|null $dependsOn): self;
}
