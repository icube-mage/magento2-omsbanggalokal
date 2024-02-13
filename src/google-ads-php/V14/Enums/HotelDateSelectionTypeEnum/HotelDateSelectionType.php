<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/hotel_date_selection_type.proto

namespace Google\Ads\GoogleAds\V14\Enums\HotelDateSelectionTypeEnum;

use UnexpectedValueException;

/**
 * Enum describing possible hotel date selection types.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.HotelDateSelectionTypeEnum.HotelDateSelectionType</code>
 */
class HotelDateSelectionType
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
     * Dates selected by default.
     *
     * Generated from protobuf enum <code>DEFAULT_SELECTION = 50;</code>
     */
    const DEFAULT_SELECTION = 50;
    /**
     * Dates selected by the user.
     *
     * Generated from protobuf enum <code>USER_SELECTED = 51;</code>
     */
    const USER_SELECTED = 51;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::DEFAULT_SELECTION => 'DEFAULT_SELECTION',
        self::USER_SELECTED => 'USER_SELECTED',
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
class_alias(HotelDateSelectionType::class, \Google\Ads\GoogleAds\V14\Enums\HotelDateSelectionTypeEnum_HotelDateSelectionType::class);

