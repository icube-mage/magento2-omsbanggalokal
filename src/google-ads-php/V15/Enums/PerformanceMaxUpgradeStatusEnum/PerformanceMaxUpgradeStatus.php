<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/performance_max_upgrade_status.proto

namespace Google\Ads\GoogleAds\V15\Enums\PerformanceMaxUpgradeStatusEnum;

use UnexpectedValueException;

/**
 * Performance Max Upgrade status enum for campaign.
 *
 * Protobuf type <code>google.ads.googleads.v15.enums.PerformanceMaxUpgradeStatusEnum.PerformanceMaxUpgradeStatus</code>
 */
class PerformanceMaxUpgradeStatus
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The upgrade to a Performance Max campaign is in progress.
     *
     * Generated from protobuf enum <code>UPGRADE_IN_PROGRESS = 3;</code>
     */
    const UPGRADE_IN_PROGRESS = 3;
    /**
     * The upgrade to a Performance Max campaign is complete.
     *
     * Generated from protobuf enum <code>UPGRADE_COMPLETE = 4;</code>
     */
    const UPGRADE_COMPLETE = 4;
    /**
     * The upgrade to a Performance Max campaign failed.
     * The campaign will still serve as it was before upgrade was attempted.
     *
     * Generated from protobuf enum <code>UPGRADE_FAILED = 5;</code>
     */
    const UPGRADE_FAILED = 5;
    /**
     * The campaign is eligible for upgrade to a Performance Max campaign.
     *
     * Generated from protobuf enum <code>UPGRADE_ELIGIBLE = 6;</code>
     */
    const UPGRADE_ELIGIBLE = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::UPGRADE_IN_PROGRESS => 'UPGRADE_IN_PROGRESS',
        self::UPGRADE_COMPLETE => 'UPGRADE_COMPLETE',
        self::UPGRADE_FAILED => 'UPGRADE_FAILED',
        self::UPGRADE_ELIGIBLE => 'UPGRADE_ELIGIBLE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PerformanceMaxUpgradeStatus::class, \Google\Ads\GoogleAds\V15\Enums\PerformanceMaxUpgradeStatusEnum_PerformanceMaxUpgradeStatus::class);

