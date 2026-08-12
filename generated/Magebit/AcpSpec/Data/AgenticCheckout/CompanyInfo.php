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

use Magebit\AcpSpec\Api\AgenticCheckout\CompanyInfoInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Information about a company or organization associated with the buyer
 */
class CompanyInfo extends SpecObject implements CompanyInfoInterface
{
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
    public function getTaxId(): string|null
    {
        return $this->stringOrNull(self::KEY_TAX_ID);
    }

    /**
     * @param string|null $taxId
     * @return self
     */
    public function setTaxId(string|null $taxId): self
    {
        return $this->set(self::KEY_TAX_ID, $taxId);
    }

    /**
     * @return string|null
     */
    public function getDepartment(): string|null
    {
        return $this->stringOrNull(self::KEY_DEPARTMENT);
    }

    /**
     * @param string|null $department
     * @return self
     */
    public function setDepartment(string|null $department): self
    {
        return $this->set(self::KEY_DEPARTMENT, $department);
    }

    /**
     * @return string|null
     */
    public function getCostCenter(): string|null
    {
        return $this->stringOrNull(self::KEY_COST_CENTER);
    }

    /**
     * @param string|null $costCenter
     * @return self
     */
    public function setCostCenter(string|null $costCenter): self
    {
        return $this->set(self::KEY_COST_CENTER, $costCenter);
    }
}
