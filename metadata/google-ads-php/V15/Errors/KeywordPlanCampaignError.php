<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/errors/keyword_plan_campaign_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Errors;

class KeywordPlanCampaignError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Agoogle/ads/googleads/v15/errors/keyword_plan_campaign_error.protogoogle.ads.googleads.v15.errors"�
KeywordPlanCampaignErrorEnum"�
KeywordPlanCampaignError
UNSPECIFIED 
UNKNOWN
INVALID_NAME
INVALID_LANGUAGES
INVALID_GEOS
DUPLICATE_NAME
MAX_GEOS_EXCEEDED
MAX_LANGUAGES_EXCEEDEDB�
#com.google.ads.googleads.v15.errorsBKeywordPlanCampaignErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v15/errors;errors�GAA�Google.Ads.GoogleAds.V15.Errors�Google\\Ads\\GoogleAds\\V15\\Errors�#Google::Ads::GoogleAds::V15::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

