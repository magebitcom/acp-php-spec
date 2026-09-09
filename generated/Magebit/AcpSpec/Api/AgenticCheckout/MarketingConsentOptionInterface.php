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
 * Seller-declared marketing consent option that specifies an available channel for which the seller must obtain the buyer's consent before sending marketing content
 */
interface MarketingConsentOptionInterface
{
    public const KEY_CHANNEL = 'channel';
    public const KEY_DISPLAY_TEXT = 'display_text';
    public const KEY_PRIVACY_POLICY_URL = 'privacy_policy_url';
    public const KEY_IS_SUBSCRIBED = 'is_subscribed';
    public const CONSTRAINTS = ['privacy_policy_url' => ['format' => 'uri']];

    /**
     * Channel for marketing consent.
     *
     * @return string
     */
    public function getChannel(): string;

    /**
     * Channel for marketing consent.
     *
     * @param string $channel
     * @return self
     */
    public function setChannel(string $channel): self;

    /**
     * What the buyer is consenting to receive, e.g., 'promotional emails, product launches, and exclusive offers'. Agents MAY use this to compose their own consent prompt.
     *
     * @return string
     */
    public function getDisplayText(): string;

    /**
     * What the buyer is consenting to receive, e.g., 'promotional emails, product launches, and exclusive offers'. Agents MAY use this to compose their own consent prompt.
     *
     * @param string $displayText
     * @return self
     */
    public function setDisplayText(string $displayText): self;

    /**
     * URL to the seller's privacy policy governing use of the buyer's contact information for marketing.
     *
     * @return string
     */
    public function getPrivacyPolicyUrl(): string;

    /**
     * URL to the seller's privacy policy governing use of the buyer's contact information for marketing.
     *
     * @param string $privacyPolicyUrl
     * @return self
     */
    public function setPrivacyPolicyUrl(string $privacyPolicyUrl): self;

    /**
     * Whether the buyer is currently subscribed to marketing via this channel. When true, agents SHOULD render the consent checkbox as pre-checked. Defaults to false if omitted.
     *
     * @return bool|null
     */
    public function getIsSubscribed(): bool|null;

    /**
     * Whether the buyer is currently subscribed to marketing via this channel. When true, agents SHOULD render the consent checkbox as pre-checked. Defaults to false if omitted.
     *
     * @param bool|null $isSubscribed
     * @return self
     */
    public function setIsSubscribed(bool|null $isSubscribed): self;
}
