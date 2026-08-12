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

use Magebit\AcpSpec\Api\AgenticCheckout\IntentTraceInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Structured reason for why a buyer action was taken, used for analytics and debugging
 */
class IntentTrace extends SpecObject implements IntentTraceInterface
{
    /** @var string[] */
    protected array $jsonObjectKeys = ['metadata'];

    /**
     * @return string
     */
    public function getReasonCode(): string
    {
        return $this->requireString(self::KEY_REASON_CODE);
    }

    /**
     * @param string $reasonCode
     * @return self
     */
    public function setReasonCode(string $reasonCode): self
    {
        return $this->set(self::KEY_REASON_CODE, $reasonCode);
    }

    /**
     * @return string|null
     */
    public function getTraceSummary(): string|null
    {
        return $this->stringOrNull(self::KEY_TRACE_SUMMARY);
    }

    /**
     * @param string|null $traceSummary
     * @return self
     */
    public function setTraceSummary(string|null $traceSummary): self
    {
        return $this->set(self::KEY_TRACE_SUMMARY, $traceSummary);
    }

    /**
     * @return array<string, string|float|bool>|null
     */
    public function getMetadata(): array|null
    {
        return $this->arrayOrNull(self::KEY_METADATA);
    }

    /**
     * @param array<string, string|float|bool>|null $metadata
     * @return self
     */
    public function setMetadata(array|null $metadata): self
    {
        return $this->set(self::KEY_METADATA, $metadata);
    }
}
