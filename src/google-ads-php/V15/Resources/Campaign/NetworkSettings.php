<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/campaign.proto

namespace Google\Ads\GoogleAds\V15\Resources\Campaign;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The network settings for the campaign.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.resources.Campaign.NetworkSettings</code>
 */
class NetworkSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether ads will be served with google.com search results.
     *
     * Generated from protobuf field <code>optional bool target_google_search = 5;</code>
     */
    protected $target_google_search = null;
    /**
     * Whether ads will be served on partner sites in the Google Search Network
     * (requires `target_google_search` to also be `true`).
     *
     * Generated from protobuf field <code>optional bool target_search_network = 6;</code>
     */
    protected $target_search_network = null;
    /**
     * Whether ads will be served on specified placements in the Google Display
     * Network. Placements are specified using the Placement criterion.
     *
     * Generated from protobuf field <code>optional bool target_content_network = 7;</code>
     */
    protected $target_content_network = null;
    /**
     * Whether ads will be served on the Google Partner Network.
     * This is available only to some select Google partner accounts.
     *
     * Generated from protobuf field <code>optional bool target_partner_search_network = 8;</code>
     */
    protected $target_partner_search_network = null;
    /**
     * Whether ads will be served on YouTube.
     *
     * Generated from protobuf field <code>optional bool target_youtube = 9;</code>
     */
    protected $target_youtube = null;
    /**
     * Whether ads will be served on the Google TV network.
     *
     * Generated from protobuf field <code>optional bool target_google_tv_network = 10;</code>
     */
    protected $target_google_tv_network = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $target_google_search
     *           Whether ads will be served with google.com search results.
     *     @type bool $target_search_network
     *           Whether ads will be served on partner sites in the Google Search Network
     *           (requires `target_google_search` to also be `true`).
     *     @type bool $target_content_network
     *           Whether ads will be served on specified placements in the Google Display
     *           Network. Placements are specified using the Placement criterion.
     *     @type bool $target_partner_search_network
     *           Whether ads will be served on the Google Partner Network.
     *           This is available only to some select Google partner accounts.
     *     @type bool $target_youtube
     *           Whether ads will be served on YouTube.
     *     @type bool $target_google_tv_network
     *           Whether ads will be served on the Google TV network.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Resources\Campaign::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether ads will be served with google.com search results.
     *
     * Generated from protobuf field <code>optional bool target_google_search = 5;</code>
     * @return bool
     */
    public function getTargetGoogleSearch()
    {
        return isset($this->target_google_search) ? $this->target_google_search : false;
    }

    public function hasTargetGoogleSearch()
    {
        return isset($this->target_google_search);
    }

    public function clearTargetGoogleSearch()
    {
        unset($this->target_google_search);
    }

    /**
     * Whether ads will be served with google.com search results.
     *
     * Generated from protobuf field <code>optional bool target_google_search = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setTargetGoogleSearch($var)
    {
        GPBUtil::checkBool($var);
        $this->target_google_search = $var;

        return $this;
    }

    /**
     * Whether ads will be served on partner sites in the Google Search Network
     * (requires `target_google_search` to also be `true`).
     *
     * Generated from protobuf field <code>optional bool target_search_network = 6;</code>
     * @return bool
     */
    public function getTargetSearchNetwork()
    {
        return isset($this->target_search_network) ? $this->target_search_network : false;
    }

    public function hasTargetSearchNetwork()
    {
        return isset($this->target_search_network);
    }

    public function clearTargetSearchNetwork()
    {
        unset($this->target_search_network);
    }

    /**
     * Whether ads will be served on partner sites in the Google Search Network
     * (requires `target_google_search` to also be `true`).
     *
     * Generated from protobuf field <code>optional bool target_search_network = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setTargetSearchNetwork($var)
    {
        GPBUtil::checkBool($var);
        $this->target_search_network = $var;

        return $this;
    }

    /**
     * Whether ads will be served on specified placements in the Google Display
     * Network. Placements are specified using the Placement criterion.
     *
     * Generated from protobuf field <code>optional bool target_content_network = 7;</code>
     * @return bool
     */
    public function getTargetContentNetwork()
    {
        return isset($this->target_content_network) ? $this->target_content_network : false;
    }

    public function hasTargetContentNetwork()
    {
        return isset($this->target_content_network);
    }

    public function clearTargetContentNetwork()
    {
        unset($this->target_content_network);
    }

    /**
     * Whether ads will be served on specified placements in the Google Display
     * Network. Placements are specified using the Placement criterion.
     *
     * Generated from protobuf field <code>optional bool target_content_network = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setTargetContentNetwork($var)
    {
        GPBUtil::checkBool($var);
        $this->target_content_network = $var;

        return $this;
    }

    /**
     * Whether ads will be served on the Google Partner Network.
     * This is available only to some select Google partner accounts.
     *
     * Generated from protobuf field <code>optional bool target_partner_search_network = 8;</code>
     * @return bool
     */
    public function getTargetPartnerSearchNetwork()
    {
        return isset($this->target_partner_search_network) ? $this->target_partner_search_network : false;
    }

    public function hasTargetPartnerSearchNetwork()
    {
        return isset($this->target_partner_search_network);
    }

    public function clearTargetPartnerSearchNetwork()
    {
        unset($this->target_partner_search_network);
    }

    /**
     * Whether ads will be served on the Google Partner Network.
     * This is available only to some select Google partner accounts.
     *
     * Generated from protobuf field <code>optional bool target_partner_search_network = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setTargetPartnerSearchNetwork($var)
    {
        GPBUtil::checkBool($var);
        $this->target_partner_search_network = $var;

        return $this;
    }

    /**
     * Whether ads will be served on YouTube.
     *
     * Generated from protobuf field <code>optional bool target_youtube = 9;</code>
     * @return bool
     */
    public function getTargetYoutube()
    {
        return isset($this->target_youtube) ? $this->target_youtube : false;
    }

    public function hasTargetYoutube()
    {
        return isset($this->target_youtube);
    }

    public function clearTargetYoutube()
    {
        unset($this->target_youtube);
    }

    /**
     * Whether ads will be served on YouTube.
     *
     * Generated from protobuf field <code>optional bool target_youtube = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setTargetYoutube($var)
    {
        GPBUtil::checkBool($var);
        $this->target_youtube = $var;

        return $this;
    }

    /**
     * Whether ads will be served on the Google TV network.
     *
     * Generated from protobuf field <code>optional bool target_google_tv_network = 10;</code>
     * @return bool
     */
    public function getTargetGoogleTvNetwork()
    {
        return isset($this->target_google_tv_network) ? $this->target_google_tv_network : false;
    }

    public function hasTargetGoogleTvNetwork()
    {
        return isset($this->target_google_tv_network);
    }

    public function clearTargetGoogleTvNetwork()
    {
        unset($this->target_google_tv_network);
    }

    /**
     * Whether ads will be served on the Google TV network.
     *
     * Generated from protobuf field <code>optional bool target_google_tv_network = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setTargetGoogleTvNetwork($var)
    {
        GPBUtil::checkBool($var);
        $this->target_google_tv_network = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NetworkSettings::class, \Google\Ads\GoogleAds\V15\Resources\Campaign_NetworkSettings::class);

