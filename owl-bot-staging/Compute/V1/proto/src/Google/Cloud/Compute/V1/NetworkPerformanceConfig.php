<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NetworkPerformanceConfig</code>
 */
class NetworkPerformanceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * 
     * Check the TotalEgressBandwidthTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string total_egress_bandwidth_tier = 130109439;</code>
     */
    protected $total_egress_bandwidth_tier = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $total_egress_bandwidth_tier
     *           
     *           Check the TotalEgressBandwidthTier enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * 
     * Check the TotalEgressBandwidthTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string total_egress_bandwidth_tier = 130109439;</code>
     * @return string
     */
    public function getTotalEgressBandwidthTier()
    {
        return isset($this->total_egress_bandwidth_tier) ? $this->total_egress_bandwidth_tier : '';
    }

    public function hasTotalEgressBandwidthTier()
    {
        return isset($this->total_egress_bandwidth_tier);
    }

    public function clearTotalEgressBandwidthTier()
    {
        unset($this->total_egress_bandwidth_tier);
    }

    /**
     * 
     * Check the TotalEgressBandwidthTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string total_egress_bandwidth_tier = 130109439;</code>
     * @param string $var
     * @return $this
     */
    public function setTotalEgressBandwidthTier($var)
    {
        GPBUtil::checkString($var, True);
        $this->total_egress_bandwidth_tier = $var;

        return $this;
    }

}

