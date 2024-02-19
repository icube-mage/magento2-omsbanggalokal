<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/services/google_ads_service.proto

namespace Google\Ads\GoogleAds\V15\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [GoogleAdsService.Search][google.ads.googleads.v15.services.GoogleAdsService.Search].
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.services.SearchGoogleAdsRequest</code>
 */
class SearchGoogleAdsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer being queried.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The query string.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $query = '';
    /**
     * Token of the page to retrieve. If not specified, the first
     * page of results will be returned. Use the value obtained from
     * `next_page_token` in the previous response in order to request
     * the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * Number of elements to retrieve in a single page.
     * When too large a page is requested, the server may decide to
     * further limit the number of returned resources.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     */
    protected $page_size = 0;
    /**
     * If true, the request is validated but not executed.
     *
     * Generated from protobuf field <code>bool validate_only = 5;</code>
     */
    protected $validate_only = false;
    /**
     * If true, the total number of results that match the query ignoring the
     * LIMIT clause will be included in the response.
     * Default is false.
     *
     * Generated from protobuf field <code>bool return_total_results_count = 7;</code>
     */
    protected $return_total_results_count = false;
    /**
     * Determines whether a summary row will be returned. By default, summary row
     * is not returned. If requested, the summary row will be sent in a response
     * by itself after all other query results are returned.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.SummaryRowSettingEnum.SummaryRowSetting summary_row_setting = 8;</code>
     */
    protected $summary_row_setting = 0;

    /**
     * @param string $customerId Required. The ID of the customer being queried.
     * @param string $query      Required. The query string.
     *
     * @return \Google\Ads\GoogleAds\V15\Services\SearchGoogleAdsRequest
     *
     * @experimental
     */
    public static function build(string $customerId, string $query): self
    {
        return (new self())
            ->setCustomerId($customerId)
            ->setQuery($query);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer being queried.
     *     @type string $query
     *           Required. The query string.
     *     @type string $page_token
     *           Token of the page to retrieve. If not specified, the first
     *           page of results will be returned. Use the value obtained from
     *           `next_page_token` in the previous response in order to request
     *           the next page of results.
     *     @type int $page_size
     *           Number of elements to retrieve in a single page.
     *           When too large a page is requested, the server may decide to
     *           further limit the number of returned resources.
     *     @type bool $validate_only
     *           If true, the request is validated but not executed.
     *     @type bool $return_total_results_count
     *           If true, the total number of results that match the query ignoring the
     *           LIMIT clause will be included in the response.
     *           Default is false.
     *     @type int $summary_row_setting
     *           Determines whether a summary row will be returned. By default, summary row
     *           is not returned. If requested, the summary row will be sent in a response
     *           by itself after all other query results are returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Services\GoogleAdsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer being queried.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer being queried.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. The query string.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Required. The query string.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Token of the page to retrieve. If not specified, the first
     * page of results will be returned. Use the value obtained from
     * `next_page_token` in the previous response in order to request
     * the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Token of the page to retrieve. If not specified, the first
     * page of results will be returned. Use the value obtained from
     * `next_page_token` in the previous response in order to request
     * the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Number of elements to retrieve in a single page.
     * When too large a page is requested, the server may decide to
     * further limit the number of returned resources.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Number of elements to retrieve in a single page.
     * When too large a page is requested, the server may decide to
     * further limit the number of returned resources.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * If true, the request is validated but not executed.
     *
     * Generated from protobuf field <code>bool validate_only = 5;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If true, the request is validated but not executed.
     *
     * Generated from protobuf field <code>bool validate_only = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * If true, the total number of results that match the query ignoring the
     * LIMIT clause will be included in the response.
     * Default is false.
     *
     * Generated from protobuf field <code>bool return_total_results_count = 7;</code>
     * @return bool
     */
    public function getReturnTotalResultsCount()
    {
        return $this->return_total_results_count;
    }

    /**
     * If true, the total number of results that match the query ignoring the
     * LIMIT clause will be included in the response.
     * Default is false.
     *
     * Generated from protobuf field <code>bool return_total_results_count = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setReturnTotalResultsCount($var)
    {
        GPBUtil::checkBool($var);
        $this->return_total_results_count = $var;

        return $this;
    }

    /**
     * Determines whether a summary row will be returned. By default, summary row
     * is not returned. If requested, the summary row will be sent in a response
     * by itself after all other query results are returned.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.SummaryRowSettingEnum.SummaryRowSetting summary_row_setting = 8;</code>
     * @return int
     */
    public function getSummaryRowSetting()
    {
        return $this->summary_row_setting;
    }

    /**
     * Determines whether a summary row will be returned. By default, summary row
     * is not returned. If requested, the summary row will be sent in a response
     * by itself after all other query results are returned.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.SummaryRowSettingEnum.SummaryRowSetting summary_row_setting = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setSummaryRowSetting($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\SummaryRowSettingEnum\SummaryRowSetting::class);
        $this->summary_row_setting = $var;

        return $this;
    }

}

