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

use Magebit\AcpSpec\Api\DelegatePayment\RiskSignalInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Fraud detection signal indicating detected risk patterns and recommended actions
 */
class RiskSignal extends SpecObject implements RiskSignalInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->requireString(self::KEY_TYPE);
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType(string $type): self
    {
        return $this->set(self::KEY_TYPE, $type);
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->requireInt(self::KEY_SCORE);
    }

    /**
     * @param int $score
     * @return self
     */
    public function setScore(int $score): self
    {
        return $this->set(self::KEY_SCORE, $score);
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->requireString(self::KEY_ACTION);
    }

    /**
     * @param string $action
     * @return self
     */
    public function setAction(string $action): self
    {
        return $this->set(self::KEY_ACTION, $action);
    }
}
