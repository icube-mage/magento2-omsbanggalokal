<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/services/billing_setup_service.proto

namespace Google\Ads\GoogleAds\V15\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for billing setup mutate operations.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.services.MutateBillingSetupRequest</code>
 */
class MutateBillingSetupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Id of the customer to apply the billing setup mutate operation
     * to.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The operation to perform.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.services.BillingSetupOperation operation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $operation = null;

    /**
     * @param string                                                   $customerId Required. Id of the customer to apply the billing setup mutate operation
     *                                                                             to.
     * @param \Google\Ads\GoogleAds\V15\Services\BillingSetupOperation $operation  Required. The operation to perform.
     *
     * @return \Google\Ads\GoogleAds\V15\Services\MutateBillingSetupRequest
     *
     * @experimental
     */
    public static function build(string $customerId, \Google\Ads\GoogleAds\V15\Services\BillingSetupOperation $operation): self
    {
        return (new self())
            ->setCustomerId($customerId)
            ->setOperation($operation);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. Id of the customer to apply the billing setup mutate operation
     *           to.
     *     @type \Google\Ads\GoogleAds\V15\Services\BillingSetupOperation $operation
     *           Required. The operation to perform.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Services\BillingSetupService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Id of the customer to apply the billing setup mutate operation
     * to.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. Id of the customer to apply the billing setup mutate operation
     * to.
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
     * Required. The operation to perform.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.services.BillingSetupOperation operation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\GoogleAds\V15\Services\BillingSetupOperation|null
     */
    public function getOperation()
    {
        return $this->operation;
    }

    public function hasOperation()
    {
        return isset($this->operation);
    }

    public function clearOperation()
    {
        unset($this->operation);
    }

    /**
     * Required. The operation to perform.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.services.BillingSetupOperation operation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V15\Services\BillingSetupOperation $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V15\Services\BillingSetupOperation::class);
        $this->operation = $var;

        return $this;
    }

}

