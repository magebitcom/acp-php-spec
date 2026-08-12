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

use Magebit\AcpSpec\Api\AgenticCheckout\DiscoveryProtocolInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Protocol identification and version information.
 */
class DiscoveryProtocol extends SpecObject implements DiscoveryProtocolInterface
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
     * @return string
     */
    public function getVersion(): string
    {
        return $this->requireString(self::KEY_VERSION);
    }

    /**
     * @param string $version
     * @return self
     */
    public function setVersion(string $version): self
    {
        return $this->set(self::KEY_VERSION, $version);
    }

    /**
     * @return string[]
     */
    public function getSupportedVersions(): array
    {
        return $this->getArray(self::KEY_SUPPORTED_VERSIONS);
    }

    /**
     * @param string[] $supportedVersions
     * @return self
     */
    public function setSupportedVersions(array $supportedVersions): self
    {
        return $this->set(self::KEY_SUPPORTED_VERSIONS, $supportedVersions);
    }

    /**
     * @return string|null
     */
    public function getDocumentationUrl(): string|null
    {
        return $this->stringOrNull(self::KEY_DOCUMENTATION_URL);
    }

    /**
     * @param string|null $documentationUrl
     * @return self
     */
    public function setDocumentationUrl(string|null $documentationUrl): self
    {
        return $this->set(self::KEY_DOCUMENTATION_URL, $documentationUrl);
    }
}
