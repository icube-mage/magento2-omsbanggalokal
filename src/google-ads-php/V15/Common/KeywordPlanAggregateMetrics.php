<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/common/keyword_plan_common.proto

namespace Google\Ads\GoogleAds\V15\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The aggregate metrics specification of the request.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.common.KeywordPlanAggregateMetrics</code>
 */
class KeywordPlanAggregateMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of aggregate metrics to fetch data.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.enums.KeywordPlanAggregateMetricTypeEnum.KeywordPlanAggregateMetricType aggregate_metric_types = 1;</code>
     */
    private $aggregate_metric_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $aggregate_metric_types
     *           The list of aggregate metrics to fetch data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Common\KeywordPlanCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of aggregate metrics to fetch data.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.enums.KeywordPlanAggregateMetricTypeEnum.KeywordPlanAggregateMetricType aggregate_metric_types = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAggregateMetricTypes()
    {
        return $this->aggregate_metric_types;
    }

    /**
     * The list of aggregate metrics to fetch data.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.enums.KeywordPlanAggregateMetricTypeEnum.KeywordPlanAggregateMetricType aggregate_metric_types = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAggregateMetricTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V15\Enums\KeywordPlanAggregateMetricTypeEnum\KeywordPlanAggregateMetricType::class);
        $this->aggregate_metric_types = $arr;

        return $this;
    }

}

