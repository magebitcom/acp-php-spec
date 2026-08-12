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

use Magebit\AcpSpec\Api\AgenticCheckout\ExtensionDeclarationInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Extension declaration in capabilities.extensions (response). Describes an active extension and which schema fields it adds.
 */
class ExtensionDeclaration extends SpecObject implements ExtensionDeclarationInterface
{
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
}
