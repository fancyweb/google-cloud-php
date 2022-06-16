<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/resources.proto

namespace Google\Cloud\Iot\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Gateway-related configuration and state.
 *
 * Generated from protobuf message <code>google.cloud.iot.v1.GatewayConfig</code>
 */
class GatewayConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates whether the device is a gateway.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.GatewayType gateway_type = 1;</code>
     */
    protected $gateway_type = 0;
    /**
     * Indicates how to authorize and/or authenticate devices to access the
     * gateway.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.GatewayAuthMethod gateway_auth_method = 2;</code>
     */
    protected $gateway_auth_method = 0;
    /**
     * [Output only] The ID of the gateway the device accessed most recently.
     *
     * Generated from protobuf field <code>string last_accessed_gateway_id = 3;</code>
     */
    protected $last_accessed_gateway_id = '';
    /**
     * [Output only] The most recent time at which the device accessed the gateway
     * specified in `last_accessed_gateway`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_accessed_gateway_time = 4;</code>
     */
    protected $last_accessed_gateway_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $gateway_type
     *           Indicates whether the device is a gateway.
     *     @type int $gateway_auth_method
     *           Indicates how to authorize and/or authenticate devices to access the
     *           gateway.
     *     @type string $last_accessed_gateway_id
     *           [Output only] The ID of the gateway the device accessed most recently.
     *     @type \Google\Protobuf\Timestamp $last_accessed_gateway_time
     *           [Output only] The most recent time at which the device accessed the gateway
     *           specified in `last_accessed_gateway`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iot\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates whether the device is a gateway.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.GatewayType gateway_type = 1;</code>
     * @return int
     */
    public function getGatewayType()
    {
        return $this->gateway_type;
    }

    /**
     * Indicates whether the device is a gateway.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.GatewayType gateway_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGatewayType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Iot\V1\GatewayType::class);
        $this->gateway_type = $var;

        return $this;
    }

    /**
     * Indicates how to authorize and/or authenticate devices to access the
     * gateway.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.GatewayAuthMethod gateway_auth_method = 2;</code>
     * @return int
     */
    public function getGatewayAuthMethod()
    {
        return $this->gateway_auth_method;
    }

    /**
     * Indicates how to authorize and/or authenticate devices to access the
     * gateway.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.GatewayAuthMethod gateway_auth_method = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setGatewayAuthMethod($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Iot\V1\GatewayAuthMethod::class);
        $this->gateway_auth_method = $var;

        return $this;
    }

    /**
     * [Output only] The ID of the gateway the device accessed most recently.
     *
     * Generated from protobuf field <code>string last_accessed_gateway_id = 3;</code>
     * @return string
     */
    public function getLastAccessedGatewayId()
    {
        return $this->last_accessed_gateway_id;
    }

    /**
     * [Output only] The ID of the gateway the device accessed most recently.
     *
     * Generated from protobuf field <code>string last_accessed_gateway_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLastAccessedGatewayId($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_accessed_gateway_id = $var;

        return $this;
    }

    /**
     * [Output only] The most recent time at which the device accessed the gateway
     * specified in `last_accessed_gateway`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_accessed_gateway_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastAccessedGatewayTime()
    {
        return $this->last_accessed_gateway_time;
    }

    public function hasLastAccessedGatewayTime()
    {
        return isset($this->last_accessed_gateway_time);
    }

    public function clearLastAccessedGatewayTime()
    {
        unset($this->last_accessed_gateway_time);
    }

    /**
     * [Output only] The most recent time at which the device accessed the gateway
     * specified in `last_accessed_gateway`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_accessed_gateway_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastAccessedGatewayTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_accessed_gateway_time = $var;

        return $this;
    }

}

