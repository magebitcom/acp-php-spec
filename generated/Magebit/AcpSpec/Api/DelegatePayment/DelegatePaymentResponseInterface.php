<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * @author    Magebit <info@magebit.com>
 * @copyright Copyright (c) Magebit, Ltd. (https://magebit.com)
 * @license   MIT
 */

declare(strict_types=1);

namespace Magebit\AcpSpec\Api\DelegatePayment;

/**
 * Response containing the vault token identifier for the delegated payment method
 */
interface DelegatePaymentResponseInterface
{
    public const KEY_ID = 'id';
    public const KEY_CREATED = 'created';
    public const KEY_METADATA = 'metadata';

    /**
     * Unique vault token identifier (vt_...)
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Unique vault token identifier (vt_...)
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * ISO 8601 timestamp when the token was created
     *
     * @return string
     */
    public function getCreated(): string;

    /**
     * ISO 8601 timestamp when the token was created
     *
     * @param string $created
     * @return self
     */
    public function setCreated(string $created): self;

    /**
     * Metadata echoed from the request plus system-added fields
     *
     * @return array<string, string>
     */
    public function getMetadata(): array;

    /**
     * Metadata echoed from the request plus system-added fields
     *
     * @param array<string, string> $metadata
     * @return self
     */
    public function setMetadata(array $metadata): self;
}
