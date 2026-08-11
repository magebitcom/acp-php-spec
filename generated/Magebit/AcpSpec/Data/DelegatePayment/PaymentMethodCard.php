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

use Magebit\AcpSpec\Api\DelegatePayment\PaymentMethodCardInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Card payment method details including card number, expiration, and verification data
 */
class PaymentMethodCard extends SpecObject implements PaymentMethodCardInterface
{
    /** @var string[] */
    protected array $jsonObjectKeys = ['metadata'];

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
     * @return string
     */
    public function getCardNumberType(): string
    {
        return $this->requireString(self::KEY_CARD_NUMBER_TYPE);
    }

    /**
     * @param string $cardNumberType
     * @return self
     */
    public function setCardNumberType(string $cardNumberType): self
    {
        return $this->set(self::KEY_CARD_NUMBER_TYPE, $cardNumberType);
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->requireString(self::KEY_NUMBER);
    }

    /**
     * @param string $number
     * @return self
     */
    public function setNumber(string $number): self
    {
        return $this->set(self::KEY_NUMBER, $number);
    }

    /**
     * @return string|null
     */
    public function getExpMonth(): string|null
    {
        return $this->stringOrNull(self::KEY_EXP_MONTH);
    }

    /**
     * @param string|null $expMonth
     * @return self
     */
    public function setExpMonth(string|null $expMonth): self
    {
        return $this->set(self::KEY_EXP_MONTH, $expMonth);
    }

    /**
     * @return string|null
     */
    public function getExpYear(): string|null
    {
        return $this->stringOrNull(self::KEY_EXP_YEAR);
    }

    /**
     * @param string|null $expYear
     * @return self
     */
    public function setExpYear(string|null $expYear): self
    {
        return $this->set(self::KEY_EXP_YEAR, $expYear);
    }

    /**
     * @return string|null
     */
    public function getName(): string|null
    {
        return $this->stringOrNull(self::KEY_NAME);
    }

    /**
     * @param string|null $name
     * @return self
     */
    public function setName(string|null $name): self
    {
        return $this->set(self::KEY_NAME, $name);
    }

    /**
     * @return string|null
     */
    public function getCvc(): string|null
    {
        return $this->stringOrNull(self::KEY_CVC);
    }

    /**
     * @param string|null $cvc
     * @return self
     */
    public function setCvc(string|null $cvc): self
    {
        return $this->set(self::KEY_CVC, $cvc);
    }

    /**
     * @return string|null
     */
    public function getCryptogram(): string|null
    {
        return $this->stringOrNull(self::KEY_CRYPTOGRAM);
    }

    /**
     * @param string|null $cryptogram
     * @return self
     */
    public function setCryptogram(string|null $cryptogram): self
    {
        return $this->set(self::KEY_CRYPTOGRAM, $cryptogram);
    }

    /**
     * @return string|null
     */
    public function getEciValue(): string|null
    {
        return $this->stringOrNull(self::KEY_ECI_VALUE);
    }

    /**
     * @param string|null $eciValue
     * @return self
     */
    public function setEciValue(string|null $eciValue): self
    {
        return $this->set(self::KEY_ECI_VALUE, $eciValue);
    }

    /**
     * @return string[]|null
     */
    public function getChecksPerformed(): array|null
    {
        return $this->arrayOrNull(self::KEY_CHECKS_PERFORMED);
    }

    /**
     * @param string[]|null $checksPerformed
     * @return self
     */
    public function setChecksPerformed(array|null $checksPerformed): self
    {
        return $this->set(self::KEY_CHECKS_PERFORMED, $checksPerformed);
    }

    /**
     * @return string|null
     */
    public function getIin(): string|null
    {
        return $this->stringOrNull(self::KEY_IIN);
    }

    /**
     * @param string|null $iin
     * @return self
     */
    public function setIin(string|null $iin): self
    {
        return $this->set(self::KEY_IIN, $iin);
    }

    /**
     * @return string
     */
    public function getDisplayCardFundingType(): string
    {
        return $this->requireString(self::KEY_DISPLAY_CARD_FUNDING_TYPE);
    }

    /**
     * @param string $displayCardFundingType
     * @return self
     */
    public function setDisplayCardFundingType(string $displayCardFundingType): self
    {
        return $this->set(self::KEY_DISPLAY_CARD_FUNDING_TYPE, $displayCardFundingType);
    }

    /**
     * @return string|null
     */
    public function getDisplayWalletType(): string|null
    {
        return $this->stringOrNull(self::KEY_DISPLAY_WALLET_TYPE);
    }

    /**
     * @param string|null $displayWalletType
     * @return self
     */
    public function setDisplayWalletType(string|null $displayWalletType): self
    {
        return $this->set(self::KEY_DISPLAY_WALLET_TYPE, $displayWalletType);
    }

    /**
     * @return string|null
     */
    public function getDisplayBrand(): string|null
    {
        return $this->stringOrNull(self::KEY_DISPLAY_BRAND);
    }

    /**
     * @param string|null $displayBrand
     * @return self
     */
    public function setDisplayBrand(string|null $displayBrand): self
    {
        return $this->set(self::KEY_DISPLAY_BRAND, $displayBrand);
    }

    /**
     * @return string|null
     */
    public function getDisplayLast4(): string|null
    {
        return $this->stringOrNull(self::KEY_DISPLAY_LAST4);
    }

    /**
     * @param string|null $displayLast4
     * @return self
     */
    public function setDisplayLast4(string|null $displayLast4): self
    {
        return $this->set(self::KEY_DISPLAY_LAST4, $displayLast4);
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

    /**
     * @return bool|null
     */
    public function getVirtual(): bool|null
    {
        return $this->boolOrNull(self::KEY_VIRTUAL);
    }

    /**
     * @param bool|null $virtual
     * @return self
     */
    public function setVirtual(bool|null $virtual): self
    {
        return $this->set(self::KEY_VIRTUAL, $virtual);
    }
}
