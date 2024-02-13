<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/customer.proto

namespace Google\Ads\GoogleAds\V15\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Customer Agreement Setting for a customer.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.resources.CustomerAgreementSetting</code>
 */
class CustomerAgreementSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Whether the customer has accepted lead form term of service.
     *
     * Generated from protobuf field <code>bool accepted_lead_form_terms = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $accepted_lead_form_terms = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $accepted_lead_form_terms
     *           Output only. Whether the customer has accepted lead form term of service.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Resources\Customer::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Whether the customer has accepted lead form term of service.
     *
     * Generated from protobuf field <code>bool accepted_lead_form_terms = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getAcceptedLeadFormTerms()
    {
        return $this->accepted_lead_form_terms;
    }

    /**
     * Output only. Whether the customer has accepted lead form term of service.
     *
     * Generated from protobuf field <code>bool accepted_lead_form_terms = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setAcceptedLeadFormTerms($var)
    {
        GPBUtil::checkBool($var);
        $this->accepted_lead_form_terms = $var;

        return $this;
    }

}

