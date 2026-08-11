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
 * Information about the buyer including contact details, company info, and loyalty status
 */
interface BuyerInterface
{
    public const KEY_FIRST_NAME = 'first_name';
    public const KEY_LAST_NAME = 'last_name';
    public const KEY_FULL_NAME = 'full_name';
    public const KEY_EMAIL = 'email';
    public const KEY_PHONE_NUMBER = 'phone_number';
    public const KEY_CUSTOMER_ID = 'customer_id';
    public const KEY_ACCOUNT_TYPE = 'account_type';
    public const KEY_AUTHENTICATION_STATUS = 'authentication_status';
    public const KEY_COMPANY = 'company';
    public const KEY_LOYALTY = 'loyalty';
    public const KEY_TAX_EXEMPTION = 'tax_exemption';
    public const ACCOUNT_TYPE_GUEST = 'guest';
    public const ACCOUNT_TYPE_REGISTERED = 'registered';
    public const ACCOUNT_TYPE_BUSINESS = 'business';
    public const AUTHENTICATION_STATUS_AUTHENTICATED = 'authenticated';
    public const AUTHENTICATION_STATUS_GUEST = 'guest';
    public const AUTHENTICATION_STATUS_REQUIRES_SIGNIN = 'requires_signin';

    /**
     * Buyer's first name
     *
     * @return string|null
     */
    public function getFirstName(): string|null;

    /**
     * Buyer's first name
     *
     * @param string|null $firstName
     * @return self
     */
    public function setFirstName(string|null $firstName): self;

    /**
     * Buyer's last name
     *
     * @return string|null
     */
    public function getLastName(): string|null;

    /**
     * Buyer's last name
     *
     * @param string|null $lastName
     * @return self
     */
    public function setLastName(string|null $lastName): self;

    /**
     * Buyer's full name
     *
     * @return string|null
     */
    public function getFullName(): string|null;

    /**
     * Buyer's full name
     *
     * @param string|null $fullName
     * @return self
     */
    public function setFullName(string|null $fullName): self;

    /**
     * Buyer's email address
     *
     * @return string
     */
    public function getEmail(): string;

    /**
     * Buyer's email address
     *
     * @param string $email
     * @return self
     */
    public function setEmail(string $email): self;

    /**
     * Buyer's phone number
     *
     * @return string|null
     */
    public function getPhoneNumber(): string|null;

    /**
     * Buyer's phone number
     *
     * @param string|null $phoneNumber
     * @return self
     */
    public function setPhoneNumber(string|null $phoneNumber): self;

    /**
     * Merchant's internal customer identifier
     *
     * @return string|null
     */
    public function getCustomerId(): string|null;

    /**
     * Merchant's internal customer identifier
     *
     * @param string|null $customerId
     * @return self
     */
    public function setCustomerId(string|null $customerId): self;

    /**
     * Type of buyer account
     *
     * @return string|null
     */
    public function getAccountType(): string|null;

    /**
     * Type of buyer account
     *
     * @param string|null $accountType
     * @return self
     */
    public function setAccountType(string|null $accountType): self;

    /**
     * Buyer's authentication status
     *
     * @return string|null
     */
    public function getAuthenticationStatus(): string|null;

    /**
     * Buyer's authentication status
     *
     * @param string|null $authenticationStatus
     * @return self
     */
    public function setAuthenticationStatus(string|null $authenticationStatus): self;

    /**
     * Company information for business buyers
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\CompanyInfoInterface|null
     */
    public function getCompany(): CompanyInfoInterface|null;

    /**
     * Company information for business buyers
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\CompanyInfoInterface|null $company
     * @return self
     */
    public function setCompany(CompanyInfoInterface|null $company): self;

    /**
     * Loyalty program information
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\LoyaltyInfoInterface|null
     */
    public function getLoyalty(): LoyaltyInfoInterface|null;

    /**
     * Loyalty program information
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\LoyaltyInfoInterface|null $loyalty
     * @return self
     */
    public function setLoyalty(LoyaltyInfoInterface|null $loyalty): self;

    /**
     * Tax exemption details
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\TaxExemptionInterface|null
     */
    public function getTaxExemption(): TaxExemptionInterface|null;

    /**
     * Tax exemption details
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\TaxExemptionInterface|null $taxExemption
     * @return self
     */
    public function setTaxExemption(TaxExemptionInterface|null $taxExemption): self;
}
