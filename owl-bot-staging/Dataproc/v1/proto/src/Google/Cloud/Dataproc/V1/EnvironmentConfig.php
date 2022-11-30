<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Environment configuration for a workload.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.EnvironmentConfig</code>
 */
class EnvironmentConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Execution configuration for a workload.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ExecutionConfig execution_config = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $execution_config = null;
    /**
     * Optional. Peripherals configuration that workload has access to.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.PeripheralsConfig peripherals_config = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $peripherals_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataproc\V1\ExecutionConfig $execution_config
     *           Optional. Execution configuration for a workload.
     *     @type \Google\Cloud\Dataproc\V1\PeripheralsConfig $peripherals_config
     *           Optional. Peripherals configuration that workload has access to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Shared::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Execution configuration for a workload.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ExecutionConfig execution_config = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\ExecutionConfig|null
     */
    public function getExecutionConfig()
    {
        return $this->execution_config;
    }

    public function hasExecutionConfig()
    {
        return isset($this->execution_config);
    }

    public function clearExecutionConfig()
    {
        unset($this->execution_config);
    }

    /**
     * Optional. Execution configuration for a workload.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ExecutionConfig execution_config = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\ExecutionConfig $var
     * @return $this
     */
    public function setExecutionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\ExecutionConfig::class);
        $this->execution_config = $var;

        return $this;
    }

    /**
     * Optional. Peripherals configuration that workload has access to.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.PeripheralsConfig peripherals_config = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\PeripheralsConfig|null
     */
    public function getPeripheralsConfig()
    {
        return $this->peripherals_config;
    }

    public function hasPeripheralsConfig()
    {
        return isset($this->peripherals_config);
    }

    public function clearPeripheralsConfig()
    {
        unset($this->peripherals_config);
    }

    /**
     * Optional. Peripherals configuration that workload has access to.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.PeripheralsConfig peripherals_config = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\PeripheralsConfig $var
     * @return $this
     */
    public function setPeripheralsConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\PeripheralsConfig::class);
        $this->peripherals_config = $var;

        return $this;
    }

}

