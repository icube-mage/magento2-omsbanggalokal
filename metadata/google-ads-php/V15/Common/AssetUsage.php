<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/common/asset_usage.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Common;

class AssetUsage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
<google/ads/googleads/v15/enums/served_asset_field_type.protogoogle.ads.googleads.v15.enums"�
ServedAssetFieldTypeEnum"�
ServedAssetFieldType
UNSPECIFIED 
UNKNOWN

HEADLINE_1

HEADLINE_2

HEADLINE_3
DESCRIPTION_1
DESCRIPTION_2
HEADLINE
HEADLINE_IN_PORTRAIT
LONG_HEADLINE	
DESCRIPTION

DESCRIPTION_IN_PORTRAIT
BUSINESS_NAME_IN_PORTRAIT
BUSINESS_NAME
MARKETING_IMAGE
MARKETING_IMAGE_IN_PORTRAIT
SQUARE_MARKETING_IMAGE
PORTRAIT_MARKETING_IMAGE
LOGO
LANDSCAPE_LOGO
CALL_TO_ACTION
YOU_TUBE_VIDEO
SITELINK
CALL

MOBILE_APP
CALLOUT
STRUCTURED_SNIPPET	
PRICE
	PROMOTION
AD_IMAGE
	LEAD_FORM
BUSINESS_LOGOB�
"com.google.ads.googleads.v15.enumsBServedAssetFieldTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
1google/ads/googleads/v15/common/asset_usage.protogoogle.ads.googleads.v15.common"�

AssetUsage
asset (	n
served_asset_field_type (2M.google.ads.googleads.v15.enums.ServedAssetFieldTypeEnum.ServedAssetFieldTypeB�
#com.google.ads.googleads.v15.commonBAssetUsageProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v15/common;common�GAA�Google.Ads.GoogleAds.V15.Common�Google\\Ads\\GoogleAds\\V15\\Common�#Google::Ads::GoogleAds::V15::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

