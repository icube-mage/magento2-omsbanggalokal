<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/common/extensions.proto

namespace Google\Ads\GoogleAds\V15\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an App extension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.common.AppFeedItem</code>
 */
class AppFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The visible text displayed when the link is rendered in an ad.
     * This string must not be empty, and the length of this string should
     * be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>optional string link_text = 9;</code>
     */
    protected $link_text = null;
    /**
     * The store-specific ID for the target application.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>optional string app_id = 10;</code>
     */
    protected $app_id = null;
    /**
     * The application store that the target application belongs to.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.AppStoreEnum.AppStore app_store = 3;</code>
     */
    protected $app_store = 0;
    /**
     * A list of possible final URLs after all cross domain redirects.
     * This list must not be empty.
     *
     * Generated from protobuf field <code>repeated string final_urls = 11;</code>
     */
    private $final_urls;
    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 12;</code>
     */
    private $final_mobile_urls;
    /**
     * URL template for constructing a tracking URL. Default value is "{lpurl}".
     *
     * Generated from protobuf field <code>optional string tracking_url_template = 13;</code>
     */
    protected $tracking_url_template = null;
    /**
     * A list of mappings to be used for substituting URL custom parameter tags in
     * the tracking_url_template, final_urls, and/or final_mobile_urls.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.common.CustomParameter url_custom_parameters = 7;</code>
     */
    private $url_custom_parameters;
    /**
     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>optional string final_url_suffix = 14;</code>
     */
    protected $final_url_suffix = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $link_text
     *           The visible text displayed when the link is rendered in an ad.
     *           This string must not be empty, and the length of this string should
     *           be between 1 and 25, inclusive.
     *     @type string $app_id
     *           The store-specific ID for the target application.
     *           This string must not be empty.
     *     @type int $app_store
     *           The application store that the target application belongs to.
     *           This field is required.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $final_urls
     *           A list of possible final URLs after all cross domain redirects.
     *           This list must not be empty.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $final_mobile_urls
     *           A list of possible final mobile URLs after all cross domain redirects.
     *     @type string $tracking_url_template
     *           URL template for constructing a tracking URL. Default value is "{lpurl}".
     *     @type array<\Google\Ads\GoogleAds\V15\Common\CustomParameter>|\Google\Protobuf\Internal\RepeatedField $url_custom_parameters
     *           A list of mappings to be used for substituting URL custom parameter tags in
     *           the tracking_url_template, final_urls, and/or final_mobile_urls.
     *     @type string $final_url_suffix
     *           URL template for appending params to landing page URLs served with parallel
     *           tracking.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * The visible text displayed when the link is rendered in an ad.
     * This string must not be empty, and the length of this string should
     * be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>optional string link_text = 9;</code>
     * @return string
     */
    public function getLinkText()
    {
        return isset($this->link_text) ? $this->link_text : '';
    }

    public function hasLinkText()
    {
        return isset($this->link_text);
    }

    public function clearLinkText()
    {
        unset($this->link_text);
    }

    /**
     * The visible text displayed when the link is rendered in an ad.
     * This string must not be empty, and the length of this string should
     * be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>optional string link_text = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setLinkText($var)
    {
        GPBUtil::checkString($var, True);
        $this->link_text = $var;

        return $this;
    }

    /**
     * The store-specific ID for the target application.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>optional string app_id = 10;</code>
     * @return string
     */
    public function getAppId()
    {
        return isset($this->app_id) ? $this->app_id : '';
    }

    public function hasAppId()
    {
        return isset($this->app_id);
    }

    public function clearAppId()
    {
        unset($this->app_id);
    }

    /**
     * The store-specific ID for the target application.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>optional string app_id = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

    /**
     * The application store that the target application belongs to.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.AppStoreEnum.AppStore app_store = 3;</code>
     * @return int
     */
    public function getAppStore()
    {
        return $this->app_store;
    }

    /**
     * The application store that the target application belongs to.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.AppStoreEnum.AppStore app_store = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAppStore($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\AppStoreEnum\AppStore::class);
        $this->app_store = $var;

        return $this;
    }

    /**
     * A list of possible final URLs after all cross domain redirects.
     * This list must not be empty.
     *
     * Generated from protobuf field <code>repeated string final_urls = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalUrls()
    {
        return $this->final_urls;
    }

    /**
     * A list of possible final URLs after all cross domain redirects.
     * This list must not be empty.
     *
     * Generated from protobuf field <code>repeated string final_urls = 11;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->final_urls = $arr;

        return $this;
    }

    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalMobileUrls()
    {
        return $this->final_mobile_urls;
    }

    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 12;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalMobileUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->final_mobile_urls = $arr;

        return $this;
    }

    /**
     * URL template for constructing a tracking URL. Default value is "{lpurl}".
     *
     * Generated from protobuf field <code>optional string tracking_url_template = 13;</code>
     * @return string
     */
    public function getTrackingUrlTemplate()
    {
        return isset($this->tracking_url_template) ? $this->tracking_url_template : '';
    }

    public function hasTrackingUrlTemplate()
    {
        return isset($this->tracking_url_template);
    }

    public function clearTrackingUrlTemplate()
    {
        unset($this->tracking_url_template);
    }

    /**
     * URL template for constructing a tracking URL. Default value is "{lpurl}".
     *
     * Generated from protobuf field <code>optional string tracking_url_template = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setTrackingUrlTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->tracking_url_template = $var;

        return $this;
    }

    /**
     * A list of mappings to be used for substituting URL custom parameter tags in
     * the tracking_url_template, final_urls, and/or final_mobile_urls.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.common.CustomParameter url_custom_parameters = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUrlCustomParameters()
    {
        return $this->url_custom_parameters;
    }

    /**
     * A list of mappings to be used for substituting URL custom parameter tags in
     * the tracking_url_template, final_urls, and/or final_mobile_urls.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.common.CustomParameter url_custom_parameters = 7;</code>
     * @param array<\Google\Ads\GoogleAds\V15\Common\CustomParameter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUrlCustomParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V15\Common\CustomParameter::class);
        $this->url_custom_parameters = $arr;

        return $this;
    }

    /**
     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>optional string final_url_suffix = 14;</code>
     * @return string
     */
    public function getFinalUrlSuffix()
    {
        return isset($this->final_url_suffix) ? $this->final_url_suffix : '';
    }

    public function hasFinalUrlSuffix()
    {
        return isset($this->final_url_suffix);
    }

    public function clearFinalUrlSuffix()
    {
        unset($this->final_url_suffix);
    }

    /**
     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>optional string final_url_suffix = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setFinalUrlSuffix($var)
    {
        GPBUtil::checkString($var, True);
        $this->final_url_suffix = $var;

        return $this;
    }

}

