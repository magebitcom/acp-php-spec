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

use Magebit\AcpSpec\Api\AgenticCheckout\BuyerInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\CompanyInfoInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\LoyaltyInfoInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\TaxExemptionInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Information about the buyer including contact details, company info, and loyalty status
 */
class Buyer extends SpecObject implements BuyerInterface
{
    /**
     * @return string|null
     */
    public function getFirstName(): string|null
    {
        return $this->stringOrNull(self::KEY_FIRST_NAME);
    }

    /**
     * @param string|null $firstName
     * @return self
     */
    public function setFirstName(string|null $firstName): self
    {
        return $this->set(self::KEY_FIRST_NAME, $firstName);
    }

    /**
     * @return string|null
     */
    public function getLastName(): string|null
    {
        return $this->stringOrNull(self::KEY_LAST_NAME);
    }

    /**
     * @param string|null $lastName
     * @return self
     */
    public function setLastName(string|null $lastName): self
    {
        return $this->set(self::KEY_LAST_NAME, $lastName);
    }

    /**
     * @return string|null
     */
    public function getFullName(): string|null
    {
        return $this->stringOrNull(self::KEY_FULL_NAME);
    }

    /**
     * @param string|null $fullName
     * @return self
     */
    public function setFullName(string|null $fullName): self
    {
        return $this->set(self::KEY_FULL_NAME, $fullName);
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->requireString(self::KEY_EMAIL);
    }

    /**
     * @param string $email
     * @return self
     */
    public function setEmail(string $email): self
    {
        return $this->set(self::KEY_EMAIL, $email);
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): string|null
    {
        return $this->stringOrNull(self::KEY_PHONE_NUMBER);
    }

    /**
     * @param string|null $phoneNumber
     * @return self
     */
    public function setPhoneNumber(string|null $phoneNumber): self
    {
        return $this->set(self::KEY_PHONE_NUMBER, $phoneNumber);
    }

    /**
     * @return string|null
     */
    public function getCustomerId(): string|null
    {
        return $this->stringOrNull(self::KEY_CUSTOMER_ID);
    }

    /**
     * @param string|null $customerId
     * @return self
     */
    public function setCustomerId(string|null $customerId): self
    {
        return $this->set(self::KEY_CUSTOMER_ID, $customerId);
    }

    /**
     * @return string|null
     */
    public function getAccountType(): string|null
    {
        return $this->stringOrNull(self::KEY_ACCOUNT_TYPE);
    }

    /**
     * @param string|null $accountType
     * @return self
     */
    public function setAccountType(string|null $accountType): self
    {
        return $this->set(self::KEY_ACCOUNT_TYPE, $accountType);
    }

    /**
     * @return string|null
     */
    public function getAuthenticationStatus(): string|null
    {
        return $this->stringOrNull(self::KEY_AUTHENTICATION_STATUS);
    }

    /**
     * @param string|null $authenticationStatus
     * @return self
     */
    public function setAuthenticationStatus(string|null $authenticationStatus): self
    {
        return $this->set(self::KEY_AUTHENTICATION_STATUS, $authenticationStatus);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\CompanyInfoInterface|null
     */
    public function getCompany(): CompanyInfoInterface|null
    {
        return $this->instanceOrNull(self::KEY_COMPANY, \Magebit\AcpSpec\Api\AgenticCheckout\CompanyInfoInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\CompanyInfoInterface|null $company
     * @return self
     */
    public function setCompany(CompanyInfoInterface|null $company): self
    {
        return $this->set(self::KEY_COMPANY, $company);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\LoyaltyInfoInterface|null
     */
    public function getLoyalty(): LoyaltyInfoInterface|null
    {
        return $this->instanceOrNull(self::KEY_LOYALTY, \Magebit\AcpSpec\Api\AgenticCheckout\LoyaltyInfoInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\LoyaltyInfoInterface|null $loyalty
     * @return self
     */
    public function setLoyalty(LoyaltyInfoInterface|null $loyalty): self
    {
        return $this->set(self::KEY_LOYALTY, $loyalty);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\TaxExemptionInterface|null
     */
    public function getTaxExemption(): TaxExemptionInterface|null
    {
        return $this->instanceOrNull(self::KEY_TAX_EXEMPTION, \Magebit\AcpSpec\Api\AgenticCheckout\TaxExemptionInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\TaxExemptionInterface|null $taxExemption
     * @return self
     */
    public function setTaxExemption(TaxExemptionInterface|null $taxExemption): self
    {
        return $this->set(self::KEY_TAX_EXEMPTION, $taxExemption);
    }
}
