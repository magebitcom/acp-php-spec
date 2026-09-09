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
 * Payment handler configuration and capabilities
 */
interface PaymentHandlerInterface
{
    public const KEY_ID = 'id';
    public const KEY_NAME = 'name';
    public const KEY_DISPLAY_NAME = 'display_name';
    public const KEY_VERSION = 'version';
    public const KEY_SPEC = 'spec';
    public const KEY_REQUIRES_DELEGATE_PAYMENT = 'requires_delegate_payment';
    public const KEY_REQUIRES_PCI_COMPLIANCE = 'requires_pci_compliance';
    public const KEY_PSP = 'psp';
    public const KEY_CONFIG_SCHEMA = 'config_schema';
    public const KEY_INSTRUMENT_SCHEMAS = 'instrument_schemas';
    public const KEY_CONFIG = 'config';
    public const KEY_DISPLAY_ORDER = 'display_order';

    public const CONSTRAINTS = [
        'version' => ['pattern' => '^\d{4}-\d{2}-\d{2}$'],
        'spec' => ['format' => 'uri'],
        'config_schema' => ['format' => 'uri'],
        'instrument_schemas' => ['items' => ['format' => 'uri']],
    ];

    /**
     * Seller-defined handler identifier
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Seller-defined handler identifier
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * Handler name in reverse-DNS format (e.g., dev.acp.tokenized.card)
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Handler name in reverse-DNS format (e.g., dev.acp.tokenized.card)
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;

    /**
     * Human-readable name for UI (e.g., Credit Card). Use when showing payment options to the buyer.
     *
     * @return string|null
     */
    public function getDisplayName(): string|null;

    /**
     * Human-readable name for UI (e.g., Credit Card). Use when showing payment options to the buyer.
     *
     * @param string|null $displayName
     * @return self
     */
    public function setDisplayName(string|null $displayName): self;

    /**
     * Handler version in YYYY-MM-DD format
     *
     * @return string
     */
    public function getVersion(): string;

    /**
     * Handler version in YYYY-MM-DD format
     *
     * @param string $version
     * @return self
     */
    public function setVersion(string $version): self;

    /**
     * URL to handler specification
     *
     * @return string
     */
    public function getSpec(): string;

    /**
     * URL to handler specification
     *
     * @param string $spec
     * @return self
     */
    public function setSpec(string $spec): self;

    /**
     * Whether this handler requires using delegate_payment API
     *
     * @return bool
     */
    public function getRequiresDelegatePayment(): bool;

    /**
     * Whether this handler requires using delegate_payment API
     *
     * @param bool $requiresDelegatePayment
     * @return self
     */
    public function setRequiresDelegatePayment(bool $requiresDelegatePayment): self;

    /**
     * Whether this handler routes PCI DSS sensitive data
     *
     * @return bool
     */
    public function getRequiresPciCompliance(): bool;

    /**
     * Whether this handler routes PCI DSS sensitive data
     *
     * @param bool $requiresPciCompliance
     * @return self
     */
    public function setRequiresPciCompliance(bool $requiresPciCompliance): self;

    /**
     * Payment Service Provider identifier
     *
     * @return string
     */
    public function getPsp(): string;

    /**
     * Payment Service Provider identifier
     *
     * @param string $psp
     * @return self
     */
    public function setPsp(string $psp): self;

    /**
     * URL to JSON Schema for handler configuration
     *
     * @return string
     */
    public function getConfigSchema(): string;

    /**
     * URL to JSON Schema for handler configuration
     *
     * @param string $configSchema
     * @return self
     */
    public function setConfigSchema(string $configSchema): self;

    /**
     * URLs to JSON Schemas for payment instruments
     *
     * @return string[]
     */
    public function getInstrumentSchemas(): array;

    /**
     * URLs to JSON Schemas for payment instruments
     *
     * @param string[] $instrumentSchemas
     * @return self
     */
    public function setInstrumentSchemas(array $instrumentSchemas): self;

    /**
     * Handler-specific configuration
     *
     * @return array<mixed>
     */
    public function getConfig(): array;

    /**
     * Handler-specific configuration
     *
     * @param array<mixed> $config
     * @return self
     */
    public function setConfig(array $config): self;

    /**
     * Optional merchant-suggested display order (lower = higher preference). Suggestive only; platform/agent MAY reorder.
     *
     * @return int|null
     */
    public function getDisplayOrder(): int|null;

    /**
     * Optional merchant-suggested display order (lower = higher preference). Suggestive only; platform/agent MAY reorder.
     *
     * @param int|null $displayOrder
     * @return self
     */
    public function setDisplayOrder(int|null $displayOrder): self;
}
