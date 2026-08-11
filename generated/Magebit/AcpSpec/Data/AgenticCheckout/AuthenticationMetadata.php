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

use Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataAcquirerDetailsInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceInterface;
use Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Seller-provided authentication metadata for 3DS flows.
 */
class AuthenticationMetadata extends SpecObject implements AuthenticationMetadataInterface
{
    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataAcquirerDetailsInterface
     */
    public function getAcquirerDetails(): AuthenticationMetadataAcquirerDetailsInterface
    {
        return $this->requireInstance(self::KEY_ACQUIRER_DETAILS, \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataAcquirerDetailsInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataAcquirerDetailsInterface $acquirerDetails
     * @return self
     */
    public function setAcquirerDetails(AuthenticationMetadataAcquirerDetailsInterface $acquirerDetails): self
    {
        return $this->set(self::KEY_ACQUIRER_DETAILS, $acquirerDetails);
    }

    /**
     * @return string
     */
    public function getDirectoryServer(): string
    {
        return $this->requireString(self::KEY_DIRECTORY_SERVER);
    }

    /**
     * @param string $directoryServer
     * @return self
     */
    public function setDirectoryServer(string $directoryServer): self
    {
        return $this->set(self::KEY_DIRECTORY_SERVER, $directoryServer);
    }

    /**
     * @return \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceInterface|null
     */
    public function getFlowPreference(): AuthenticationMetadataFlowPreferenceInterface|null
    {
        return $this->instanceOrNull(self::KEY_FLOW_PREFERENCE, \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceInterface::class);
    }

    /**
     * @param \Magebit\AcpSpec\Api\AgenticCheckout\AuthenticationMetadataFlowPreferenceInterface|null $flowPreference
     * @return self
     */
    public function setFlowPreference(AuthenticationMetadataFlowPreferenceInterface|null $flowPreference): self
    {
        return $this->set(self::KEY_FLOW_PREFERENCE, $flowPreference);
    }
}
