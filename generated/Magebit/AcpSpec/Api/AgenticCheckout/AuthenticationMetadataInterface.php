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
 * Seller-provided authentication metadata for 3DS flows.
 */
interface AuthenticationMetadataInterface
{
    public const KEY_ACQUIRER_DETAILS = 'acquirer_details';
    public const KEY_DIRECTORY_SERVER = 'directory_server';
    public const KEY_FLOW_PREFERENCE = 'flow_preference';
    public const DIRECTORY_SERVER_AMERICAN_EXPRESS = 'american_express';
    public const DIRECTORY_SERVER_MASTERCARD = 'mastercard';
    public const DIRECTORY_SERVER_VISA = 'visa';

    /**
     * Details about the acquirer used for this 3DS Authentication. This object MUST be present.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataAcquirerDetailsInterface
     */
    public function getAcquirerDetails(): AuthenticationMetadataAcquirerDetailsInterface;

    /**
     * Details about the acquirer used for this 3DS Authentication. This object MUST be present.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataAcquirerDetailsInterface $acquirerDetails
     * @return self
     */
    public function setAcquirerDetails(AuthenticationMetadataAcquirerDetailsInterface $acquirerDetails): self;

    /**
     * The 3DS directory server used for this Authentication.
     *
     * @return string
     */
    public function getDirectoryServer(): string;

    /**
     * The 3DS directory server used for this Authentication.
     *
     * @param string $directoryServer
     * @return self
     */
    public function setDirectoryServer(string $directoryServer): self;

    /**
     * Contains additional details on the seller's preference for the 3DS authentication flow. Sellers MAY request a preference, but issuers ultimately decide the actual flow.
     *
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceInterface|null
     */
    public function getFlowPreference(): AuthenticationMetadataFlowPreferenceInterface|null;

    /**
     * Contains additional details on the seller's preference for the 3DS authentication flow. Sellers MAY request a preference, but issuers ultimately decide the actual flow.
     *
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceInterface|null $flowPreference
     * @return self
     */
    public function setFlowPreference(AuthenticationMetadataFlowPreferenceInterface|null $flowPreference): self;
}
