<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/offline_user_data_job_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Enums;

class OfflineUserDataJobStatus
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Agoogle/ads/googleads/v15/enums/offline_user_data_job_status.protogoogle.ads.googleads.v15.enums"�
OfflineUserDataJobStatusEnum"k
OfflineUserDataJobStatus
UNSPECIFIED 
UNKNOWN
PENDING
RUNNING
SUCCESS

FAILEDB�
"com.google.ads.googleads.v15.enumsBOfflineUserDataJobStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

