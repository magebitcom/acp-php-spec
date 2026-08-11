<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Data\DelegatePayment;

use Magebit\AcpSpec\Api\DelegatePayment\DelegatePaymentResponseInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Response containing the vault token identifier for the delegated payment method
 */
class DelegatePaymentResponse extends SpecObject implements DelegatePaymentResponseInterface
{
    /** @var string[] */
    protected array $jsonObjectKeys = ['metadata'];

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
    public function getCreated(): string
    {
        return $this->requireString(self::KEY_CREATED);
    }

    /**
     * @param string $created
     * @return self
     */
    public function setCreated(string $created): self
    {
        return $this->set(self::KEY_CREATED, $created);
    }

    /**
     * @return array<string, string>
     */
    public function getMetadata(): array
    {
        return $this->getArray(self::KEY_METADATA);
    }

    /**
     * @param array<string, string> $metadata
     * @return self
     */
    public function setMetadata(array $metadata): self
    {
        return $this->set(self::KEY_METADATA, $metadata);
    }
}
