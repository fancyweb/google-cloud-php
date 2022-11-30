<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Standard represents the standard deployment strategy.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.Standard</code>
 */
class Standard extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether to verify a deployment.
     *
     * Generated from protobuf field <code>bool verify = 1;</code>
     */
    protected $verify = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $verify
     *           Whether to verify a deployment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether to verify a deployment.
     *
     * Generated from protobuf field <code>bool verify = 1;</code>
     * @return bool
     */
    public function getVerify()
    {
        return $this->verify;
    }

    /**
     * Whether to verify a deployment.
     *
     * Generated from protobuf field <code>bool verify = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setVerify($var)
    {
        GPBUtil::checkBool($var);
        $this->verify = $var;

        return $this;
    }

}

