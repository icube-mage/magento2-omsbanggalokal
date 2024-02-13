<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/feed_item_target_type.proto

namespace Google\Ads\GoogleAds\V15\Enums\FeedItemTargetTypeEnum;

use UnexpectedValueException;

/**
 * Possible type of a feed item target.
 *
 * Protobuf type <code>google.ads.googleads.v15.enums.FeedItemTargetTypeEnum.FeedItemTargetType</code>
 */
class FeedItemTargetType
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
     * Feed item targets a campaign.
     *
     * Generated from protobuf enum <code>CAMPAIGN = 2;</code>
     */
    const CAMPAIGN = 2;
    /**
     * Feed item targets an ad group.
     *
     * Generated from protobuf enum <code>AD_GROUP = 3;</code>
     */
    const AD_GROUP = 3;
    /**
     * Feed item targets a criterion.
     *
     * Generated from protobuf enum <code>CRITERION = 4;</code>
     */
    const CRITERION = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CAMPAIGN => 'CAMPAIGN',
        self::AD_GROUP => 'AD_GROUP',
        self::CRITERION => 'CRITERION',
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
class_alias(FeedItemTargetType::class, \Google\Ads\GoogleAds\V15\Enums\FeedItemTargetTypeEnum_FeedItemTargetType::class);

