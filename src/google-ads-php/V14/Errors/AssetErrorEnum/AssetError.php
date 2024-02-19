<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/errors/asset_error.proto

namespace Google\Ads\GoogleAds\V14\Errors\AssetErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible asset errors.
 *
 * Protobuf type <code>google.ads.googleads.v14.errors.AssetErrorEnum.AssetError</code>
 */
class AssetError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The customer is not is not on the allow-list for this asset type.
     *
     * Generated from protobuf enum <code>CUSTOMER_NOT_ON_ALLOWLIST_FOR_ASSET_TYPE = 13;</code>
     */
    const CUSTOMER_NOT_ON_ALLOWLIST_FOR_ASSET_TYPE = 13;
    /**
     * Assets are duplicated across operations.
     *
     * Generated from protobuf enum <code>DUPLICATE_ASSET = 3;</code>
     */
    const DUPLICATE_ASSET = 3;
    /**
     * The asset name is duplicated, either across operations or with an
     * existing asset.
     *
     * Generated from protobuf enum <code>DUPLICATE_ASSET_NAME = 4;</code>
     */
    const DUPLICATE_ASSET_NAME = 4;
    /**
     * The Asset.asset_data oneof is empty.
     *
     * Generated from protobuf enum <code>ASSET_DATA_IS_MISSING = 5;</code>
     */
    const ASSET_DATA_IS_MISSING = 5;
    /**
     * The asset has a name which is different from an existing duplicate that
     * represents the same content.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_ASSET_NAME = 6;</code>
     */
    const CANNOT_MODIFY_ASSET_NAME = 6;
    /**
     * The field cannot be set for this asset type.
     *
     * Generated from protobuf enum <code>FIELD_INCOMPATIBLE_WITH_ASSET_TYPE = 7;</code>
     */
    const FIELD_INCOMPATIBLE_WITH_ASSET_TYPE = 7;
    /**
     * Call to action must come from the list of supported values.
     *
     * Generated from protobuf enum <code>INVALID_CALL_TO_ACTION_TEXT = 8;</code>
     */
    const INVALID_CALL_TO_ACTION_TEXT = 8;
    /**
     * A lead form asset is created with an invalid combination of input fields.
     *
     * Generated from protobuf enum <code>LEAD_FORM_INVALID_FIELDS_COMBINATION = 9;</code>
     */
    const LEAD_FORM_INVALID_FIELDS_COMBINATION = 9;
    /**
     * Lead forms require that the Terms of Service have been agreed to before
     * mutates can be executed.
     *
     * Generated from protobuf enum <code>LEAD_FORM_MISSING_AGREEMENT = 10;</code>
     */
    const LEAD_FORM_MISSING_AGREEMENT = 10;
    /**
     * Asset status is invalid in this operation.
     *
     * Generated from protobuf enum <code>INVALID_ASSET_STATUS = 11;</code>
     */
    const INVALID_ASSET_STATUS = 11;
    /**
     * The field cannot be modified by this asset type.
     *
     * Generated from protobuf enum <code>FIELD_CANNOT_BE_MODIFIED_FOR_ASSET_TYPE = 12;</code>
     */
    const FIELD_CANNOT_BE_MODIFIED_FOR_ASSET_TYPE = 12;
    /**
     * Ad schedules for the same asset cannot overlap.
     *
     * Generated from protobuf enum <code>SCHEDULES_CANNOT_OVERLAP = 14;</code>
     */
    const SCHEDULES_CANNOT_OVERLAP = 14;
    /**
     * Cannot set both percent off and money amount off fields of promotion
     * asset.
     *
     * Generated from protobuf enum <code>PROMOTION_CANNOT_SET_PERCENT_OFF_AND_MONEY_AMOUNT_OFF = 15;</code>
     */
    const PROMOTION_CANNOT_SET_PERCENT_OFF_AND_MONEY_AMOUNT_OFF = 15;
    /**
     * Cannot set both promotion code and orders over amount fields of promotion
     * asset.
     *
     * Generated from protobuf enum <code>PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT = 16;</code>
     */
    const PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT = 16;
    /**
     * The field has too many decimal places specified.
     *
     * Generated from protobuf enum <code>TOO_MANY_DECIMAL_PLACES_SPECIFIED = 17;</code>
     */
    const TOO_MANY_DECIMAL_PLACES_SPECIFIED = 17;
    /**
     * Duplicate assets across operations, which have identical Asset.asset_data
     * oneof, cannot have different asset level fields for asset types which are
     * deduped.
     *
     * Generated from protobuf enum <code>DUPLICATE_ASSETS_WITH_DIFFERENT_FIELD_VALUE = 18;</code>
     */
    const DUPLICATE_ASSETS_WITH_DIFFERENT_FIELD_VALUE = 18;
    /**
     * Carrier specific short number is not allowed.
     *
     * Generated from protobuf enum <code>CALL_CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED = 19;</code>
     */
    const CALL_CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED = 19;
    /**
     * Customer consent required for call recording Terms of Service.
     *
     * Generated from protobuf enum <code>CALL_CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED = 20;</code>
     */
    const CALL_CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED = 20;
    /**
     * The type of the specified phone number is not allowed.
     *
     * Generated from protobuf enum <code>CALL_DISALLOWED_NUMBER_TYPE = 21;</code>
     */
    const CALL_DISALLOWED_NUMBER_TYPE = 21;
    /**
     * If the default call_conversion_action is not used, the customer must have
     * a ConversionAction with the same id and the ConversionAction must be call
     * conversion type.
     *
     * Generated from protobuf enum <code>CALL_INVALID_CONVERSION_ACTION = 22;</code>
     */
    const CALL_INVALID_CONVERSION_ACTION = 22;
    /**
     * The country code of the phone number is invalid.
     *
     * Generated from protobuf enum <code>CALL_INVALID_COUNTRY_CODE = 23;</code>
     */
    const CALL_INVALID_COUNTRY_CODE = 23;
    /**
     * The format of the phone number is incorrect.
     *
     * Generated from protobuf enum <code>CALL_INVALID_DOMESTIC_PHONE_NUMBER_FORMAT = 24;</code>
     */
    const CALL_INVALID_DOMESTIC_PHONE_NUMBER_FORMAT = 24;
    /**
     * The input phone number is not a valid phone number.
     *
     * Generated from protobuf enum <code>CALL_INVALID_PHONE_NUMBER = 25;</code>
     */
    const CALL_INVALID_PHONE_NUMBER = 25;
    /**
     * The phone number is not supported for country.
     *
     * Generated from protobuf enum <code>CALL_PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY = 26;</code>
     */
    const CALL_PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY = 26;
    /**
     * Premium rate phone number is not allowed.
     *
     * Generated from protobuf enum <code>CALL_PREMIUM_RATE_NUMBER_NOT_ALLOWED = 27;</code>
     */
    const CALL_PREMIUM_RATE_NUMBER_NOT_ALLOWED = 27;
    /**
     * Vanity phone number is not allowed.
     *
     * Generated from protobuf enum <code>CALL_VANITY_PHONE_NUMBER_NOT_ALLOWED = 28;</code>
     */
    const CALL_VANITY_PHONE_NUMBER_NOT_ALLOWED = 28;
    /**
     * PriceOffering cannot have the same value for header and description.
     *
     * Generated from protobuf enum <code>PRICE_HEADER_SAME_AS_DESCRIPTION = 29;</code>
     */
    const PRICE_HEADER_SAME_AS_DESCRIPTION = 29;
    /**
     * AppId is invalid.
     *
     * Generated from protobuf enum <code>MOBILE_APP_INVALID_APP_ID = 30;</code>
     */
    const MOBILE_APP_INVALID_APP_ID = 30;
    /**
     * Invalid App download URL in final URLs.
     *
     * Generated from protobuf enum <code>MOBILE_APP_INVALID_FINAL_URL_FOR_APP_DOWNLOAD_URL = 31;</code>
     */
    const MOBILE_APP_INVALID_FINAL_URL_FOR_APP_DOWNLOAD_URL = 31;
    /**
     * Asset name is required for the asset type.
     *
     * Generated from protobuf enum <code>NAME_REQUIRED_FOR_ASSET_TYPE = 32;</code>
     */
    const NAME_REQUIRED_FOR_ASSET_TYPE = 32;
    /**
     * Legacy qualifying questions cannot be in the same Lead Form as
     * custom questions.
     *
     * Generated from protobuf enum <code>LEAD_FORM_LEGACY_QUALIFYING_QUESTIONS_DISALLOWED = 33;</code>
     */
    const LEAD_FORM_LEGACY_QUALIFYING_QUESTIONS_DISALLOWED = 33;
    /**
     * Unique name is required for this asset type.
     *
     * Generated from protobuf enum <code>NAME_CONFLICT_FOR_ASSET_TYPE = 34;</code>
     */
    const NAME_CONFLICT_FOR_ASSET_TYPE = 34;
    /**
     * Cannot modify asset source.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_ASSET_SOURCE = 35;</code>
     */
    const CANNOT_MODIFY_ASSET_SOURCE = 35;
    /**
     * User can not modify the automatically created asset.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_AUTOMATICALLY_CREATED_ASSET = 36;</code>
     */
    const CANNOT_MODIFY_AUTOMATICALLY_CREATED_ASSET = 36;
    /**
     * Lead Form is disallowed to use "LOCATION" answer type.
     *
     * Generated from protobuf enum <code>LEAD_FORM_LOCATION_ANSWER_TYPE_DISALLOWED = 37;</code>
     */
    const LEAD_FORM_LOCATION_ANSWER_TYPE_DISALLOWED = 37;
    /**
     * Page Feed label text contains invalid characters.
     *
     * Generated from protobuf enum <code>PAGE_FEED_INVALID_LABEL_TEXT = 38;</code>
     */
    const PAGE_FEED_INVALID_LABEL_TEXT = 38;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CUSTOMER_NOT_ON_ALLOWLIST_FOR_ASSET_TYPE => 'CUSTOMER_NOT_ON_ALLOWLIST_FOR_ASSET_TYPE',
        self::DUPLICATE_ASSET => 'DUPLICATE_ASSET',
        self::DUPLICATE_ASSET_NAME => 'DUPLICATE_ASSET_NAME',
        self::ASSET_DATA_IS_MISSING => 'ASSET_DATA_IS_MISSING',
        self::CANNOT_MODIFY_ASSET_NAME => 'CANNOT_MODIFY_ASSET_NAME',
        self::FIELD_INCOMPATIBLE_WITH_ASSET_TYPE => 'FIELD_INCOMPATIBLE_WITH_ASSET_TYPE',
        self::INVALID_CALL_TO_ACTION_TEXT => 'INVALID_CALL_TO_ACTION_TEXT',
        self::LEAD_FORM_INVALID_FIELDS_COMBINATION => 'LEAD_FORM_INVALID_FIELDS_COMBINATION',
        self::LEAD_FORM_MISSING_AGREEMENT => 'LEAD_FORM_MISSING_AGREEMENT',
        self::INVALID_ASSET_STATUS => 'INVALID_ASSET_STATUS',
        self::FIELD_CANNOT_BE_MODIFIED_FOR_ASSET_TYPE => 'FIELD_CANNOT_BE_MODIFIED_FOR_ASSET_TYPE',
        self::SCHEDULES_CANNOT_OVERLAP => 'SCHEDULES_CANNOT_OVERLAP',
        self::PROMOTION_CANNOT_SET_PERCENT_OFF_AND_MONEY_AMOUNT_OFF => 'PROMOTION_CANNOT_SET_PERCENT_OFF_AND_MONEY_AMOUNT_OFF',
        self::PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT => 'PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT',
        self::TOO_MANY_DECIMAL_PLACES_SPECIFIED => 'TOO_MANY_DECIMAL_PLACES_SPECIFIED',
        self::DUPLICATE_ASSETS_WITH_DIFFERENT_FIELD_VALUE => 'DUPLICATE_ASSETS_WITH_DIFFERENT_FIELD_VALUE',
        self::CALL_CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED => 'CALL_CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED',
        self::CALL_CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED => 'CALL_CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED',
        self::CALL_DISALLOWED_NUMBER_TYPE => 'CALL_DISALLOWED_NUMBER_TYPE',
        self::CALL_INVALID_CONVERSION_ACTION => 'CALL_INVALID_CONVERSION_ACTION',
        self::CALL_INVALID_COUNTRY_CODE => 'CALL_INVALID_COUNTRY_CODE',
        self::CALL_INVALID_DOMESTIC_PHONE_NUMBER_FORMAT => 'CALL_INVALID_DOMESTIC_PHONE_NUMBER_FORMAT',
        self::CALL_INVALID_PHONE_NUMBER => 'CALL_INVALID_PHONE_NUMBER',
        self::CALL_PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY => 'CALL_PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY',
        self::CALL_PREMIUM_RATE_NUMBER_NOT_ALLOWED => 'CALL_PREMIUM_RATE_NUMBER_NOT_ALLOWED',
        self::CALL_VANITY_PHONE_NUMBER_NOT_ALLOWED => 'CALL_VANITY_PHONE_NUMBER_NOT_ALLOWED',
        self::PRICE_HEADER_SAME_AS_DESCRIPTION => 'PRICE_HEADER_SAME_AS_DESCRIPTION',
        self::MOBILE_APP_INVALID_APP_ID => 'MOBILE_APP_INVALID_APP_ID',
        self::MOBILE_APP_INVALID_FINAL_URL_FOR_APP_DOWNLOAD_URL => 'MOBILE_APP_INVALID_FINAL_URL_FOR_APP_DOWNLOAD_URL',
        self::NAME_REQUIRED_FOR_ASSET_TYPE => 'NAME_REQUIRED_FOR_ASSET_TYPE',
        self::LEAD_FORM_LEGACY_QUALIFYING_QUESTIONS_DISALLOWED => 'LEAD_FORM_LEGACY_QUALIFYING_QUESTIONS_DISALLOWED',
        self::NAME_CONFLICT_FOR_ASSET_TYPE => 'NAME_CONFLICT_FOR_ASSET_TYPE',
        self::CANNOT_MODIFY_ASSET_SOURCE => 'CANNOT_MODIFY_ASSET_SOURCE',
        self::CANNOT_MODIFY_AUTOMATICALLY_CREATED_ASSET => 'CANNOT_MODIFY_AUTOMATICALLY_CREATED_ASSET',
        self::LEAD_FORM_LOCATION_ANSWER_TYPE_DISALLOWED => 'LEAD_FORM_LOCATION_ANSWER_TYPE_DISALLOWED',
        self::PAGE_FEED_INVALID_LABEL_TEXT => 'PAGE_FEED_INVALID_LABEL_TEXT',
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
class_alias(AssetError::class, \Google\Ads\GoogleAds\V14\Errors\AssetErrorEnum_AssetError::class);

