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
 * Information about a company or organization associated with the buyer
 */
interface CompanyInfoInterface
{
    public const KEY_NAME = 'name';
    public const KEY_TAX_ID = 'tax_id';
    public const KEY_DEPARTMENT = 'department';
    public const KEY_COST_CENTER = 'cost_center';

    /**
     * Company or organization name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Company or organization name
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;

    /**
     * Business tax identification number
     *
     * @return string|null
     */
    public function getTaxId(): string|null;

    /**
     * Business tax identification number
     *
     * @param string|null $taxId
     * @return self
     */
    public function setTaxId(string|null $taxId): self;

    /**
     * Department within the organization
     *
     * @return string|null
     */
    public function getDepartment(): string|null;

    /**
     * Department within the organization
     *
     * @param string|null $department
     * @return self
     */
    public function setDepartment(string|null $department): self;

    /**
     * Cost center code for internal accounting
     *
     * @return string|null
     */
    public function getCostCenter(): string|null;

    /**
     * Cost center code for internal accounting
     *
     * @param string|null $costCenter
     * @return self
     */
    public function setCostCenter(string|null $costCenter): self;
}
