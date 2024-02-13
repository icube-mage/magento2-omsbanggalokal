<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/common/audiences.proto

namespace Google\Ads\GoogleAds\V15\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User interest segment.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.common.UserInterestSegment</code>
 */
class UserInterestSegment extends \Google\Protobuf\Internal\Message
{
    /**
     * The user interest resource.
     *
     * Generated from protobuf field <code>optional string user_interest_category = 1;</code>
     */
    protected $user_interest_category = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_interest_category
     *           The user interest resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Common\Audiences::initOnce();
        parent::__construct($data);
    }

    /**
     * The user interest resource.
     *
     * Generated from protobuf field <code>optional string user_interest_category = 1;</code>
     * @return string
     */
    public function getUserInterestCategory()
    {
        return isset($this->user_interest_category) ? $this->user_interest_category : '';
    }

    public function hasUserInterestCategory()
    {
        return isset($this->user_interest_category);
    }

    public function clearUserInterestCategory()
    {
        unset($this->user_interest_category);
    }

    /**
     * The user interest resource.
     *
     * Generated from protobuf field <code>optional string user_interest_category = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUserInterestCategory($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_interest_category = $var;

        return $this;
    }

}

