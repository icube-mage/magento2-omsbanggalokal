<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/customer_manager_link.proto

namespace Google\Ads\GoogleAds\V14\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents customer-manager link relationship.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.CustomerManagerLink</code>
 */
class CustomerManagerLink extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Name of the resource.
     * CustomerManagerLink resource names have the form:
     * `customers/{customer_id}/customerManagerLinks/{manager_customer_id}~{manager_link_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The manager customer linked to the customer.
     *
     * Generated from protobuf field <code>optional string manager_customer = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $manager_customer = null;
    /**
     * Output only. ID of the customer-manager link. This field is read only.
     *
     * Generated from protobuf field <code>optional int64 manager_link_id = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $manager_link_id = null;
    /**
     * Status of the link between the customer and the manager.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ManagerLinkStatusEnum.ManagerLinkStatus status = 5;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. Name of the resource.
     *           CustomerManagerLink resource names have the form:
     *           `customers/{customer_id}/customerManagerLinks/{manager_customer_id}~{manager_link_id}`
     *     @type string $manager_customer
     *           Output only. The manager customer linked to the customer.
     *     @type int|string $manager_link_id
     *           Output only. ID of the customer-manager link. This field is read only.
     *     @type int $status
     *           Status of the link between the customer and the manager.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\CustomerManagerLink::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Name of the resource.
     * CustomerManagerLink resource names have the form:
     * `customers/{customer_id}/customerManagerLinks/{manager_customer_id}~{manager_link_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. Name of the resource.
     * CustomerManagerLink resource names have the form:
     * `customers/{customer_id}/customerManagerLinks/{manager_customer_id}~{manager_link_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The manager customer linked to the customer.
     *
     * Generated from protobuf field <code>optional string manager_customer = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getManagerCustomer()
    {
        return isset($this->manager_customer) ? $this->manager_customer : '';
    }

    public function hasManagerCustomer()
    {
        return isset($this->manager_customer);
    }

    public function clearManagerCustomer()
    {
        unset($this->manager_customer);
    }

    /**
     * Output only. The manager customer linked to the customer.
     *
     * Generated from protobuf field <code>optional string manager_customer = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setManagerCustomer($var)
    {
        GPBUtil::checkString($var, True);
        $this->manager_customer = $var;

        return $this;
    }

    /**
     * Output only. ID of the customer-manager link. This field is read only.
     *
     * Generated from protobuf field <code>optional int64 manager_link_id = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getManagerLinkId()
    {
        return isset($this->manager_link_id) ? $this->manager_link_id : 0;
    }

    public function hasManagerLinkId()
    {
        return isset($this->manager_link_id);
    }

    public function clearManagerLinkId()
    {
        unset($this->manager_link_id);
    }

    /**
     * Output only. ID of the customer-manager link. This field is read only.
     *
     * Generated from protobuf field <code>optional int64 manager_link_id = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setManagerLinkId($var)
    {
        GPBUtil::checkInt64($var);
        $this->manager_link_id = $var;

        return $this;
    }

    /**
     * Status of the link between the customer and the manager.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ManagerLinkStatusEnum.ManagerLinkStatus status = 5;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the link between the customer and the manager.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ManagerLinkStatusEnum.ManagerLinkStatus status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\ManagerLinkStatusEnum\ManagerLinkStatus::class);
        $this->status = $var;

        return $this;
    }

}

