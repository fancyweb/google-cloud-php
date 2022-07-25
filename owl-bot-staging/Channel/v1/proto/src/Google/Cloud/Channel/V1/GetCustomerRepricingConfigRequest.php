<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CloudChannelService.GetCustomerRepricingConfig][google.cloud.channel.v1.CloudChannelService.GetCustomerRepricingConfig].
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.GetCustomerRepricingConfigRequest</code>
 */
class GetCustomerRepricingConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the CustomerRepricingConfig.
     * Format:
     * accounts/{account_id}/customers/{customer_id}/customerRepricingConfigs/{id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the CustomerRepricingConfig.
     *           Format:
     *           accounts/{account_id}/customers/{customer_id}/customerRepricingConfigs/{id}.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the CustomerRepricingConfig.
     * Format:
     * accounts/{account_id}/customers/{customer_id}/customerRepricingConfigs/{id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the CustomerRepricingConfig.
     * Format:
     * accounts/{account_id}/customers/{customer_id}/customerRepricingConfigs/{id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

