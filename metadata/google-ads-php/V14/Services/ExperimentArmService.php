<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/experiment_arm_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V14\Services;

class ExperimentArmService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v14/enums/response_content_type.protogoogle.ads.googleads.v14.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v14.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v14/enums;enums�GAA�Google.Ads.GoogleAds.V14.Enums�Google\\Ads\\GoogleAds\\V14\\Enums�"Google::Ads::GoogleAds::V14::Enumsbproto3
�
7google/ads/googleads/v14/resources/experiment_arm.proto"google.ads.googleads.v14.resourcesgoogle/api/resource.proto"�
ExperimentArmE
resource_name (	B.�A�A(
&googleads.googleapis.com/ExperimentArm?

experiment (	B+�A�A%
#googleads.googleapis.com/Experiment
name (	B�A
control (
traffic_split (9
	campaigns (	B&�A#
!googleads.googleapis.com/CampaignF
in_design_campaigns (	B)�A�A#
!googleads.googleapis.com/Campaign:m�Aj
&googleads.googleapis.com/ExperimentArm@customers/{customer_id}/experimentArms/{trial_id}~{trial_arm_id}B�
&com.google.ads.googleads.v14.resourcesBExperimentArmProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v14/resources;resources�GAA�"Google.Ads.GoogleAds.V14.Resources�"Google\\Ads\\GoogleAds\\V14\\Resources�&Google::Ads::GoogleAds::V14::Resourcesbproto3
�
>google/ads/googleads/v14/services/experiment_arm_service.proto!google.ads.googleads.v14.services7google/ads/googleads/v14/resources/experiment_arm.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateExperimentArmsRequest
customer_id (	B�AR

operations (29.google.ads.googleads.v14.services.ExperimentArmOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v14.enums.ResponseContentTypeEnum.ResponseContentType"�
ExperimentArmOperation/
update_mask (2.google.protobuf.FieldMaskC
create (21.google.ads.googleads.v14.resources.ExperimentArmH C
update (21.google.ads.googleads.v14.resources.ExperimentArmH =
remove (	B+�A(
&googleads.googleapis.com/ExperimentArmH B
	operation"�
MutateExperimentArmsResponse1
partial_failure_error (2.google.rpc.StatusM
results (2<.google.ads.googleads.v14.services.MutateExperimentArmResult"�
MutateExperimentArmResultB
resource_name (	B+�A(
&googleads.googleapis.com/ExperimentArmI
experiment_arm (21.google.ads.googleads.v14.resources.ExperimentArm2�
ExperimentArmService�
MutateExperimentArms>.google.ads.googleads.v14.services.MutateExperimentArmsRequest?.google.ads.googleads.v14.services.MutateExperimentArmsResponse"X���9"4/v14/customers/{customer_id=*}/experimentArms:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v14.servicesBExperimentArmServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v14/services;services�GAA�!Google.Ads.GoogleAds.V14.Services�!Google\\Ads\\GoogleAds\\V14\\Services�%Google::Ads::GoogleAds::V14::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

