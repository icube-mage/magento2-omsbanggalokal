<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/ad_group_criterion_label.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Resources;

class AdGroupCriterionLabel
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Agoogle/ads/googleads/v15/resources/ad_group_criterion_label.proto"google.ads.googleads.v15.resourcesgoogle/api/resource.proto"�
AdGroupCriterionLabelM
resource_name (	B6�A�A0
.googleads.googleapis.com/AdGroupCriterionLabelR
ad_group_criterion (	B1�A�A+
)googleads.googleapis.com/AdGroupCriterionH �:
label (	B&�A�A 
googleads.googleapis.com/LabelH�:��A�
.googleads.googleapis.com/AdGroupCriterionLabelVcustomers/{customer_id}/adGroupCriterionLabels/{ad_group_id}~{criterion_id}~{label_id}B
_ad_group_criterionB
_labelB�
&com.google.ads.googleads.v15.resourcesBAdGroupCriterionLabelProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v15/resources;resources�GAA�"Google.Ads.GoogleAds.V15.Resources�"Google\\Ads\\GoogleAds\\V15\\Resources�&Google::Ads::GoogleAds::V15::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

