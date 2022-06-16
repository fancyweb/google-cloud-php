<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/v1/cloud_redis.proto

namespace Google\Cloud\Redis\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Instance AUTH string details.
 *
 * Generated from protobuf message <code>google.cloud.redis.v1.InstanceAuthString</code>
 */
class InstanceAuthString extends \Google\Protobuf\Internal\Message
{
    /**
     * AUTH string set on the instance.
     *
     * Generated from protobuf field <code>string auth_string = 1;</code>
     */
    protected $auth_string = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $auth_string
     *           AUTH string set on the instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\V1\CloudRedis::initOnce();
        parent::__construct($data);
    }

    /**
     * AUTH string set on the instance.
     *
     * Generated from protobuf field <code>string auth_string = 1;</code>
     * @return string
     */
    public function getAuthString()
    {
        return $this->auth_string;
    }

    /**
     * AUTH string set on the instance.
     *
     * Generated from protobuf field <code>string auth_string = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthString($var)
    {
        GPBUtil::checkString($var, True);
        $this->auth_string = $var;

        return $this;
    }

}

