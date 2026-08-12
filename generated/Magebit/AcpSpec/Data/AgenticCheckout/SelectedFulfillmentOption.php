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

use Magebit\AcpSpec\Api\AgenticCheckout\SelectedFulfillmentOptionInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Fulfillment option selected by the buyer for specific line items
 */
class SelectedFulfillmentOption extends SpecObject implements SelectedFulfillmentOptionInterface
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
     * @return string
     */
    public function getOptionId(): string
    {
        return $this->requireString(self::KEY_OPTION_ID);
    }

    /**
     * @param string $optionId
     * @return self
     */
    public function setOptionId(string $optionId): self
    {
        return $this->set(self::KEY_OPTION_ID, $optionId);
    }

    /**
     * @return string[]
     */
    public function getItemIds(): array
    {
        return $this->getArray(self::KEY_ITEM_IDS);
    }

    /**
     * @param string[] $itemIds
     * @return self
     */
    public function setItemIds(array $itemIds): self
    {
        return $this->set(self::KEY_ITEM_IDS, $itemIds);
    }
}
