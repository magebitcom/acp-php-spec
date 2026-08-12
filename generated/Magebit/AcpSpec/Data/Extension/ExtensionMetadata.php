<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\Extension;

use Magebit\AcpSpec\Api\Extension\ExtensionMetadataInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Full metadata about an extension for documentation and discovery.
 */
class ExtensionMetadata extends SpecObject implements ExtensionMetadataInterface
{
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->requireString(self::KEY_ID);
    }

    /**
     * @param string $id
     * @return self
     */
    public function setId(string $id): self
    {
        return $this->set(self::KEY_ID, $id);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->requireString(self::KEY_NAME);
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        return $this->set(self::KEY_NAME, $name);
    }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
        return $this->stringOrNull(self::KEY_DESCRIPTION);
    }

    /**
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self
    {
        return $this->set(self::KEY_DESCRIPTION, $description);
    }

    /**
     * @return string[]|null
     */
    public function getExtends(): array|null
    {
        return $this->arrayOrNull(self::KEY_EXTENDS);
    }

    /**
     * @param string[]|null $extends
     * @return self
     */
    public function setExtends(array|null $extends): self
    {
        return $this->set(self::KEY_EXTENDS, $extends);
    }

    /**
     * @return string|null
     */
    public function getSpec(): string|null
    {
        return $this->stringOrNull(self::KEY_SPEC);
    }

    /**
     * @param string|null $spec
     * @return self
     */
    public function setSpec(string|null $spec): self
    {
        return $this->set(self::KEY_SPEC, $spec);
    }

    /**
     * @return string|null
     */
    public function getSchema(): string|null
    {
        return $this->stringOrNull(self::KEY_SCHEMA);
    }

    /**
     * @param string|null $schema
     * @return self
     */
    public function setSchema(string|null $schema): self
    {
        return $this->set(self::KEY_SCHEMA, $schema);
    }

    /**
     * @return string|null
     */
    public function getStatus(): string|null
    {
        return $this->stringOrNull(self::KEY_STATUS);
    }

    /**
     * @param string|null $status
     * @return self
     */
    public function setStatus(string|null $status): self
    {
        return $this->set(self::KEY_STATUS, $status);
    }

    /**
     * @return string[]|null
     */
    public function getDependsOn(): array|null
    {
        return $this->arrayOrNull(self::KEY_DEPENDS_ON);
    }

    /**
     * @param string[]|null $dependsOn
     * @return self
     */
    public function setDependsOn(array|null $dependsOn): self
    {
        return $this->set(self::KEY_DEPENDS_ON, $dependsOn);
    }
}
