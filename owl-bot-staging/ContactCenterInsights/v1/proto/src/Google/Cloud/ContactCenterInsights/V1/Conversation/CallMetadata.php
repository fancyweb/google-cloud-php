<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1\Conversation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Call-specific metadata.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.Conversation.CallMetadata</code>
 */
class CallMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The audio channel that contains the customer.
     *
     * Generated from protobuf field <code>int32 customer_channel = 1;</code>
     */
    protected $customer_channel = 0;
    /**
     * The audio channel that contains the agent.
     *
     * Generated from protobuf field <code>int32 agent_channel = 2;</code>
     */
    protected $agent_channel = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $customer_channel
     *           The audio channel that contains the customer.
     *     @type int $agent_channel
     *           The audio channel that contains the agent.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The audio channel that contains the customer.
     *
     * Generated from protobuf field <code>int32 customer_channel = 1;</code>
     * @return int
     */
    public function getCustomerChannel()
    {
        return $this->customer_channel;
    }

    /**
     * The audio channel that contains the customer.
     *
     * Generated from protobuf field <code>int32 customer_channel = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCustomerChannel($var)
    {
        GPBUtil::checkInt32($var);
        $this->customer_channel = $var;

        return $this;
    }

    /**
     * The audio channel that contains the agent.
     *
     * Generated from protobuf field <code>int32 agent_channel = 2;</code>
     * @return int
     */
    public function getAgentChannel()
    {
        return $this->agent_channel;
    }

    /**
     * The audio channel that contains the agent.
     *
     * Generated from protobuf field <code>int32 agent_channel = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAgentChannel($var)
    {
        GPBUtil::checkInt32($var);
        $this->agent_channel = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CallMetadata::class, \Google\Cloud\ContactCenterInsights\V1\Conversation_CallMetadata::class);

