<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/simulation.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V14\Common;

class Simulation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
σ
0google/ads/googleads/v14/common/simulation.protogoogle.ads.googleads.v14.common"c
CpcBidSimulationPointListF
points (26.google.ads.googleads.v14.common.CpcBidSimulationPoint"c
CpvBidSimulationPointListF
points (26.google.ads.googleads.v14.common.CpvBidSimulationPoint"i
TargetCpaSimulationPointListI
points (29.google.ads.googleads.v14.common.TargetCpaSimulationPoint"k
TargetRoasSimulationPointListJ
points (2:.google.ads.googleads.v14.common.TargetRoasSimulationPoint"q
 PercentCpcBidSimulationPointListM
points (2=.google.ads.googleads.v14.common.PercentCpcBidSimulationPoint"c
BudgetSimulationPointListF
points (26.google.ads.googleads.v14.common.BudgetSimulationPoint"
(TargetImpressionShareSimulationPointListU
points (2E.google.ads.googleads.v14.common.TargetImpressionShareSimulationPoint"Μ
CpcBidSimulationPoint%
required_budget_amount_micros (!
biddable_conversions	 (H\'
biddable_conversions_value
 (H
clicks (H
cost_micros (H
impressions (H!
top_slot_impressions (H
cpc_bid_micros (H "
cpc_bid_scaling_modifier (H B
cpc_simulation_key_valueB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressions"Ή
CpvBidSimulationPoint
cpv_bid_micros (H 
cost_micros (H
impressions (H
views (HB
_cpv_bid_microsB
_cost_microsB
_impressionsB
_views"
TargetCpaSimulationPoint%
required_budget_amount_micros (!
biddable_conversions	 (H\'
biddable_conversions_value
 (H
app_installs (
in_app_actions (
clicks (H
cost_micros (H
impressions (H!
top_slot_impressions (H
target_cpa_micros (H %
target_cpa_scaling_modifier (H B!
target_cpa_simulation_key_valueB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressions" 
TargetRoasSimulationPoint
target_roas (H %
required_budget_amount_micros (!
biddable_conversions	 (H\'
biddable_conversions_value
 (H
clicks (H
cost_micros (H
impressions (H!
top_slot_impressions (HB
_target_roasB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressions"
PercentCpcBidSimulationPoint#
percent_cpc_bid_micros (H !
biddable_conversions (H\'
biddable_conversions_value (H
clicks (H
cost_micros (H
impressions (H!
top_slot_impressions (HB
_percent_cpc_bid_microsB
_biddable_conversionsB
_biddable_conversions_valueB	
_clicksB
_cost_microsB
_impressionsB
_top_slot_impressions"ψ
BudgetSimulationPoint
budget_amount_micros (\'
required_cpc_bid_ceiling_micros (
biddable_conversions ("
biddable_conversions_value (
clicks (
cost_micros (
impressions (
top_slot_impressions ("Ϊ
$TargetImpressionShareSimulationPoint&
target_impression_share_micros (\'
required_cpc_bid_ceiling_micros (%
required_budget_amount_micros (
biddable_conversions ("
biddable_conversions_value (
clicks (
cost_micros (
impressions (
top_slot_impressions	 ( 
absolute_top_impressions
 (Bο
#com.google.ads.googleads.v14.commonBSimulationProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v14/common;common’GAAͺGoogle.Ads.GoogleAds.V14.CommonΚGoogle\\Ads\\GoogleAds\\V14\\Commonκ#Google::Ads::GoogleAds::V14::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

