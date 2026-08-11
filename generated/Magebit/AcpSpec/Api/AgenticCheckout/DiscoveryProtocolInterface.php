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
 * Protocol identification and version information.
 */
interface DiscoveryProtocolInterface
{
    public const KEY_NAME = 'name';
    public const KEY_VERSION = 'version';
    public const KEY_SUPPORTED_VERSIONS = 'supported_versions';
    public const KEY_DOCUMENTATION_URL = 'documentation_url';
    public const NAME_ACP = 'acp';

    /**
     * Protocol identifier. Always "acp".
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Protocol identifier. Always "acp".
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;

    /**
     * The current (latest) API version supported by the seller, in YYYY-MM-DD format.
     *
     * @return string
     */
    public function getVersion(): string;

    /**
     * The current (latest) API version supported by the seller, in YYYY-MM-DD format.
     *
     * @param string $version
     * @return self
     */
    public function setVersion(string $version): self;

    /**
     * All API versions the seller currently supports, in chronological order (oldest first). Agents SHOULD use the API-Version header to request a specific version. The last element is always the latest supported version.
     *
     * @return string[]
     */
    public function getSupportedVersions(): array;

    /**
     * All API versions the seller currently supports, in chronological order (oldest first). Agents SHOULD use the API-Version header to request a specific version. The last element is always the latest supported version.
     *
     * @param string[] $supportedVersions
     * @return self
     */
    public function setSupportedVersions(array $supportedVersions): self;

    /**
     * URL to the seller's ACP documentation.
     *
     * @return string|null
     */
    public function getDocumentationUrl(): string|null;

    /**
     * URL to the seller's ACP documentation.
     *
     * @param string|null $documentationUrl
     * @return self
     */
    public function setDocumentationUrl(string|null $documentationUrl): self;
}
