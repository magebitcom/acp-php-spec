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

use Magebit\AcpSpec\Api\AgenticCheckout\MarketingConsentOptionInterface;
use Magebit\AcpSpec\Runtime\SpecObject;

/**
 * Seller-declared marketing consent option that specifies an available channel for which the seller must obtain the buyer's consent before sending marketing content
 */
class MarketingConsentOption extends SpecObject implements MarketingConsentOptionInterface
{
    /**
     * @return string
     */
    public function getChannel(): string
    {
        return $this->requireString(self::KEY_CHANNEL);
    }

    /**
     * @param string $channel
     * @return self
     */
    public function setChannel(string $channel): self
    {
        return $this->set(self::KEY_CHANNEL, $channel);
    }

    /**
     * @return string
     */
    public function getDisplayText(): string
    {
        return $this->requireString(self::KEY_DISPLAY_TEXT);
    }

    /**
     * @param string $displayText
     * @return self
     */
    public function setDisplayText(string $displayText): self
    {
        return $this->set(self::KEY_DISPLAY_TEXT, $displayText);
    }

    /**
     * @return string
     */
    public function getPrivacyPolicyUrl(): string
    {
        return $this->requireString(self::KEY_PRIVACY_POLICY_URL);
    }

    /**
     * @param string $privacyPolicyUrl
     * @return self
     */
    public function setPrivacyPolicyUrl(string $privacyPolicyUrl): self
    {
        return $this->set(self::KEY_PRIVACY_POLICY_URL, $privacyPolicyUrl);
    }

    /**
     * @return bool|null
     */
    public function getIsSubscribed(): bool|null
    {
        return $this->boolOrNull(self::KEY_IS_SUBSCRIBED);
    }

    /**
     * @param bool|null $isSubscribed
     * @return self
     */
    public function setIsSubscribed(bool|null $isSubscribed): self
    {
        return $this->set(self::KEY_IS_SUBSCRIBED, $isSubscribed);
    }
}
