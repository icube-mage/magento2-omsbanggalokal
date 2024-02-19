<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/services/keyword_plan_idea_service.proto

namespace Google\Ads\GoogleAds\V15\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Site Seed
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.services.SiteSeed</code>
 */
class SiteSeed extends \Google\Protobuf\Internal\Message
{
    /**
     * The domain name of the site. If the customer requesting the ideas doesn't
     * own the site provided only public information is returned.
     *
     * Generated from protobuf field <code>optional string site = 2;</code>
     */
    protected $site = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $site
     *           The domain name of the site. If the customer requesting the ideas doesn't
     *           own the site provided only public information is returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Services\KeywordPlanIdeaService::initOnce();
        parent::__construct($data);
    }

    /**
     * The domain name of the site. If the customer requesting the ideas doesn't
     * own the site provided only public information is returned.
     *
     * Generated from protobuf field <code>optional string site = 2;</code>
     * @return string
     */
    public function getSite()
    {
        return isset($this->site) ? $this->site : '';
    }

    public function hasSite()
    {
        return isset($this->site);
    }

    public function clearSite()
    {
        unset($this->site);
    }

    /**
     * The domain name of the site. If the customer requesting the ideas doesn't
     * own the site provided only public information is returned.
     *
     * Generated from protobuf field <code>optional string site = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSite($var)
    {
        GPBUtil::checkString($var, True);
        $this->site = $var;

        return $this;
    }

}

