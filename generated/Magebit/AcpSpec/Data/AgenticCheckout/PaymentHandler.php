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

use Magebit\AcpSpec\Api\AgenticCheckout\PaymentHandlerInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Payment handler configuration and capabilities
 */
class PaymentHandler extends SpecObject implements PaymentHandlerInterface
{
    /** @var string[] */
    protected array $jsonObjectKeys = ['config'];

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
    public function getDisplayName(): string|null
    {
        return $this->stringOrNull(self::KEY_DISPLAY_NAME);
    }

    /**
     * @param string|null $displayName
     * @return self
     */
    public function setDisplayName(string|null $displayName): self
    {
        return $this->set(self::KEY_DISPLAY_NAME, $displayName);
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
     * @return string
     */
    public function getSpec(): string
    {
        return $this->requireString(self::KEY_SPEC);
    }

    /**
     * @param string $spec
     * @return self
     */
    public function setSpec(string $spec): self
    {
        return $this->set(self::KEY_SPEC, $spec);
    }

    /**
     * @return bool
     */
    public function getRequiresDelegatePayment(): bool
    {
        return $this->requireBool(self::KEY_REQUIRES_DELEGATE_PAYMENT);
    }

    /**
     * @param bool $requiresDelegatePayment
     * @return self
     */
    public function setRequiresDelegatePayment(bool $requiresDelegatePayment): self
    {
        return $this->set(self::KEY_REQUIRES_DELEGATE_PAYMENT, $requiresDelegatePayment);
    }

    /**
     * @return bool
     */
    public function getRequiresPciCompliance(): bool
    {
        return $this->requireBool(self::KEY_REQUIRES_PCI_COMPLIANCE);
    }

    /**
     * @param bool $requiresPciCompliance
     * @return self
     */
    public function setRequiresPciCompliance(bool $requiresPciCompliance): self
    {
        return $this->set(self::KEY_REQUIRES_PCI_COMPLIANCE, $requiresPciCompliance);
    }

    /**
     * @return string
     */
    public function getPsp(): string
    {
        return $this->requireString(self::KEY_PSP);
    }

    /**
     * @param string $psp
     * @return self
     */
    public function setPsp(string $psp): self
    {
        return $this->set(self::KEY_PSP, $psp);
    }

    /**
     * @return string
     */
    public function getConfigSchema(): string
    {
        return $this->requireString(self::KEY_CONFIG_SCHEMA);
    }

    /**
     * @param string $configSchema
     * @return self
     */
    public function setConfigSchema(string $configSchema): self
    {
        return $this->set(self::KEY_CONFIG_SCHEMA, $configSchema);
    }

    /**
     * @return string[]
     */
    public function getInstrumentSchemas(): array
    {
        return $this->getArray(self::KEY_INSTRUMENT_SCHEMAS);
    }

    /**
     * @param string[] $instrumentSchemas
     * @return self
     */
    public function setInstrumentSchemas(array $instrumentSchemas): self
    {
        return $this->set(self::KEY_INSTRUMENT_SCHEMAS, $instrumentSchemas);
    }

    /**
     * @return array<mixed>
     */
    public function getConfig(): array
    {
        return $this->getArray(self::KEY_CONFIG);
    }

    /**
     * @param array<mixed> $config
     * @return self
     */
    public function setConfig(array $config): self
    {
        return $this->set(self::KEY_CONFIG, $config);
    }

    /**
     * @return int|null
     */
    public function getDisplayOrder(): int|null
    {
        return $this->intOrNull(self::KEY_DISPLAY_ORDER);
    }

    /**
     * @param int|null $displayOrder
     * @return self
     */
    public function setDisplayOrder(int|null $displayOrder): self
    {
        return $this->set(self::KEY_DISPLAY_ORDER, $displayOrder);
    }
}
