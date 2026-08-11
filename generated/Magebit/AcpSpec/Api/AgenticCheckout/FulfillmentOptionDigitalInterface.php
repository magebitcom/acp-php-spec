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
 * Digital delivery fulfillment option for downloadable or streaming content
 */
interface FulfillmentOptionDigitalInterface
{
    public const KEY_TYPE = 'type';
    public const KEY_ID = 'id';
    public const KEY_TITLE = 'title';
    public const KEY_DESCRIPTION = 'description';
    public const KEY_TOTALS = 'totals';
    public const TYPE_DIGITAL = 'digital';

    /**
     * Fulfillment type discriminator
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Fulfillment type discriminator
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self;

    /**
     * Unique identifier for this fulfillment option
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Unique identifier for this fulfillment option
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self;

    /**
     * Display title for this digital delivery option
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Display title for this digital delivery option
     *
     * @param string $title
     * @return self
     */
    public function setTitle(string $title): self;

    /**
     * Additional details about digital delivery method
     *
     * @return string|null
     */
    public function getDescription(): string|null;

    /**
     * Additional details about digital delivery method
     *
     * @param string|null $description
     * @return self
     */
    public function setDescription(string|null $description): self;

    /**
     * Cost breakdown for this fulfillment option
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[]
     */
    public function getTotals(): array;

    /**
     * Cost breakdown for this fulfillment option
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\TotalInterface[] $totals
     * @return self
     */
    public function setTotals(array $totals): self;
}
