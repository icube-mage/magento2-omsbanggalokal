<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/services/offline_user_data_job_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Services;

class OfflineUserDataJobService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
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
"com.google.ads.googleads.v15.enumsBOfflineUserDataJobStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
Igoogle/ads/googleads/v15/enums/offline_user_data_job_failure_reason.protogoogle.ads.googleads.v15.enums"�
#OfflineUserDataJobFailureReasonEnum"�
OfflineUserDataJobFailureReason
UNSPECIFIED 
UNKNOWN%
!INSUFFICIENT_MATCHED_TRANSACTIONS
INSUFFICIENT_TRANSACTIONS"
HIGH_AVERAGE_TRANSACTION_VALUE!
LOW_AVERAGE_TRANSACTION_VALUE 
NEWLY_OBSERVED_CURRENCY_CODEB�
"com.google.ads.googleads.v15.enumsB$OfflineUserDataJobFailureReasonProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
Kgoogle/ads/googleads/v15/enums/offline_user_data_job_match_rate_range.protogoogle.ads.googleads.v15.enums"�
$OfflineUserDataJobMatchRateRangeEnum"�
 OfflineUserDataJobMatchRateRange
UNSPECIFIED 
UNKNOWN
MATCH_RANGE_LESS_THAN_20
MATCH_RANGE_20_TO_30
MATCH_RANGE_31_TO_40
MATCH_RANGE_41_TO_50
MATCH_RANGE_51_TO_60
MATCH_RANGE_61_TO_70
MATCH_RANGE_71_TO_80
MATCH_RANGE_81_TO_90	
MATCH_RANGE_91_TO_100
B�
"com.google.ads.googleads.v15.enumsB%OfflineUserDataJobMatchRateRangeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
?google/ads/googleads/v15/enums/offline_user_data_job_type.protogoogle.ads.googleads.v15.enums"�
OfflineUserDataJobTypeEnum"�
OfflineUserDataJobType
UNSPECIFIED 
UNKNOWN"
STORE_SALES_UPLOAD_FIRST_PARTY"
STORE_SALES_UPLOAD_THIRD_PARTY
CUSTOMER_MATCH_USER_LIST"
CUSTOMER_MATCH_WITH_ATTRIBUTESB�
"com.google.ads.googleads.v15.enumsBOfflineUserDataJobTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
;google/ads/googleads/v15/enums/user_identifier_source.protogoogle.ads.googleads.v15.enums"r
UserIdentifierSourceEnum"V
UserIdentifierSource
UNSPECIFIED 
UNKNOWN
FIRST_PARTY
THIRD_PARTYB�
"com.google.ads.googleads.v15.enumsBUserIdentifierSourceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
3google/ads/googleads/v15/enums/consent_status.protogoogle.ads.googleads.v15.enums"[
ConsentStatusEnum"F
ConsentStatus
UNSPECIFIED 
UNKNOWN
GRANTED

DENIEDB�
"com.google.ads.googleads.v15.enumsBConsentStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
-google/ads/googleads/v15/common/consent.protogoogle.ads.googleads.v15.common"�
ConsentU
ad_user_data (2?.google.ads.googleads.v15.enums.ConsentStatusEnum.ConsentStatus[
ad_personalization (2?.google.ads.googleads.v15.enums.ConsentStatusEnum.ConsentStatusB�
#com.google.ads.googleads.v15.commonBConsentProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v15/common;common�GAA�Google.Ads.GoogleAds.V15.Common�Google\\Ads\\GoogleAds\\V15\\Common�#Google::Ads::GoogleAds::V15::Commonbproto3
�
7google/ads/googleads/v15/common/offline_user_data.protogoogle.ads.googleads.v15.common;google/ads/googleads/v15/enums/user_identifier_source.protogoogle/api/field_behavior.proto"�
OfflineUserAddressInfo
hashed_first_name (	H �
hashed_last_name (	H�
city	 (	H�
state
 (	H�
country_code (	H�
postal_code (	H�"
hashed_street_address (	H�B
_hashed_first_nameB
_hashed_last_nameB
_cityB
_stateB
_country_codeB
_postal_codeB
_hashed_street_address"�
UserIdentifierm
user_identifier_source (2M.google.ads.googleads.v15.enums.UserIdentifierSourceEnum.UserIdentifierSource
hashed_email (	H 
hashed_phone_number (	H 
	mobile_id	 (	H 
third_party_user_id
 (	H O
address_info (27.google.ads.googleads.v15.common.OfflineUserAddressInfoH B

identifier"�
TransactionAttribute"
transaction_date_time (	H �&
transaction_amount_micros	 (H�
currency_code
 (	H�
conversion_action (	H�
order_id (	H�H
store_attribute (2/.google.ads.googleads.v15.common.StoreAttribute
custom_value (	H�F
item_attribute (2..google.ads.googleads.v15.common.ItemAttributeB
_transaction_date_timeB
_transaction_amount_microsB
_currency_codeB
_conversion_actionB
	_order_idB
_custom_value"8
StoreAttribute

store_code (	H �B
_store_code"�
ItemAttribute
item_id (	
merchant_id (H �
country_code (	
language_code (	
quantity (B
_merchant_id"�
UserDataI
user_identifiers (2/.google.ads.googleads.v15.common.UserIdentifierT
transaction_attribute (25.google.ads.googleads.v15.common.TransactionAttributeF
user_attribute (2..google.ads.googleads.v15.common.UserAttribute>
consent (2(.google.ads.googleads.v15.common.ConsentH �B

_consent"�
UserAttribute"
lifetime_value_micros (H �"
lifetime_value_bucket (H�
last_purchase_date_time (	
average_purchase_count (%
average_purchase_value_micros (
acquisition_date_time (	O
shopping_loyalty (20.google.ads.googleads.v15.common.ShoppingLoyaltyH�
lifecycle_stage (	B�A%
first_purchase_date_time	 (	B�AM
event_attribute
 (2/.google.ads.googleads.v15.common.EventAttributeB�AB
_lifetime_value_microsB
_lifetime_value_bucketB
_shopping_loyalty"�
EventAttribute
event (	B�A
event_date_time (	B�AP
item_attribute (23.google.ads.googleads.v15.common.EventItemAttributeB�A"*
EventItemAttribute
item_id (	B�A"=
ShoppingLoyalty
loyalty_tier (	H �B
_loyalty_tier"�
CustomerMatchUserListMetadata
	user_list (	H �>
consent (2(.google.ads.googleads.v15.common.ConsentH�B

_user_listB

_consent"�
StoreSalesMetadata
loyalty_fraction (H �(
transaction_upload_fraction (H�

custom_key (	H�[
third_party_metadata (2=.google.ads.googleads.v15.common.StoreSalesThirdPartyMetadataB
_loyalty_fractionB
_transaction_upload_fractionB
_custom_key"�
StoreSalesThirdPartyMetadata(
advertiser_upload_date_time (	H �\'
valid_transaction_fraction (H�#
partner_match_fraction	 (H�$
partner_upload_fraction
 (H�"
bridge_map_version_id (	H�

partner_id (H�B
_advertiser_upload_date_timeB
_valid_transaction_fractionB
_partner_match_fractionB
_partner_upload_fractionB
_bridge_map_version_idB
_partner_idB�
#com.google.ads.googleads.v15.commonBOfflineUserDataProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v15/common;common�GAA�Google.Ads.GoogleAds.V15.Common�Google\\Ads\\GoogleAds\\V15\\Common�#Google::Ads::GoogleAds::V15::Commonbproto3
�
>google/ads/googleads/v15/resources/offline_user_data_job.proto"google.ads.googleads.v15.resourcesIgoogle/ads/googleads/v15/enums/offline_user_data_job_failure_reason.protoKgoogle/ads/googleads/v15/enums/offline_user_data_job_match_rate_range.protoAgoogle/ads/googleads/v15/enums/offline_user_data_job_status.proto?google/ads/googleads/v15/enums/offline_user_data_job_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
OfflineUserDataJobJ
resource_name (	B3�A�A-
+googleads.googleapis.com/OfflineUserDataJob
id	 (B�AH�
external_id
 (B�AH�d
type (2Q.google.ads.googleads.v15.enums.OfflineUserDataJobTypeEnum.OfflineUserDataJobTypeB�Aj
status (2U.google.ads.googleads.v15.enums.OfflineUserDataJobStatusEnum.OfflineUserDataJobStatusB�A�
failure_reason (2c.google.ads.googleads.v15.enums.OfflineUserDataJobFailureReasonEnum.OfflineUserDataJobFailureReasonB�A_
operation_metadata (2>.google.ads.googleads.v15.resources.OfflineUserDataJobMetadataB�Ap
!customer_match_user_list_metadata (2>.google.ads.googleads.v15.common.CustomerMatchUserListMetadataB�AH X
store_sales_metadata (23.google.ads.googleads.v15.common.StoreSalesMetadataB�AH :{�Ax
+googleads.googleapis.com/OfflineUserDataJobIcustomers/{customer_id}/offlineUserDataJobs/{offline_user_data_update_id}B

metadataB
_idB
_external_id"�
OfflineUserDataJobMetadata�
match_rate_range (2e.google.ads.googleads.v15.enums.OfflineUserDataJobMatchRateRangeEnum.OfflineUserDataJobMatchRateRangeB�AB�
&com.google.ads.googleads.v15.resourcesBOfflineUserDataJobProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v15/resources;resources�GAA�"Google.Ads.GoogleAds.V15.Resources�"Google\\Ads\\GoogleAds\\V15\\Resources�&Google::Ads::GoogleAds::V15::Resourcesbproto3
�
Egoogle/ads/googleads/v15/services/offline_user_data_job_service.proto!google.ads.googleads.v15.services>google/ads/googleads/v15/resources/offline_user_data_job.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/empty.protogoogle/rpc/status.proto"�
CreateOfflineUserDataJobRequest
customer_id (	B�AH
job (26.google.ads.googleads.v15.resources.OfflineUserDataJobB�A
validate_only (\'
enable_match_rate_range_preview ("k
 CreateOfflineUserDataJobResponseG
resource_name (	B0�A-
+googleads.googleapis.com/OfflineUserDataJob"�
RunOfflineUserDataJobRequestJ
resource_name (	B3�A�A-
+googleads.googleapis.com/OfflineUserDataJob
validate_only ("�
&AddOfflineUserDataJobOperationsRequestJ
resource_name (	B3�A�A-
+googleads.googleapis.com/OfflineUserDataJob#
enable_partial_failure (H �
enable_warnings (H�W

operations (2>.google.ads.googleads.v15.services.OfflineUserDataJobOperationB�A
validate_only (B
_enable_partial_failureB
_enable_warnings"�
OfflineUserDataJobOperation;
create (2).google.ads.googleads.v15.common.UserDataH ;
remove (2).google.ads.googleads.v15.common.UserDataH 

remove_all (H B
	operation"�
\'AddOfflineUserDataJobOperationsResponse1
partial_failure_error (2.google.rpc.Status#
warning (2.google.rpc.Status2�
OfflineUserDataJobService�
CreateOfflineUserDataJobB.google.ads.googleads.v15.services.CreateOfflineUserDataJobRequestC.google.ads.googleads.v15.services.CreateOfflineUserDataJobResponse"V���>"9/v15/customers/{customer_id=*}/offlineUserDataJobs:create:*�Acustomer_id,job�
AddOfflineUserDataJobOperationsI.google.ads.googleads.v15.services.AddOfflineUserDataJobOperationsRequestJ.google.ads.googleads.v15.services.AddOfflineUserDataJobOperationsResponse"j���I"D/v15/{resource_name=customers/*/offlineUserDataJobs/*}:addOperations:*�Aresource_name,operations�
RunOfflineUserDataJob?.google.ads.googleads.v15.services.RunOfflineUserDataJobRequest.google.longrunning.Operation"����?":/v15/{resource_name=customers/*/offlineUserDataJobs/*}:run:*�Aresource_name�AV
google.protobuf.Empty=google.ads.googleads.v15.resources.OfflineUserDataJobMetadataE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v15.servicesBOfflineUserDataJobServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v15/services;services�GAA�!Google.Ads.GoogleAds.V15.Services�!Google\\Ads\\GoogleAds\\V15\\Services�%Google::Ads::GoogleAds::V15::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

