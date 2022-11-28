<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration options for the master authorized networks feature. Enabled
 * master authorized networks will disallow all external traffic to access
 * Kubernetes master through HTTPS except traffic from the given CIDR blocks,
 * Google Compute Engine Public IPs and Google Prod IPs.
 *
 * Generated from protobuf message <code>google.container.v1.MasterAuthorizedNetworksConfig</code>
 */
class MasterAuthorizedNetworksConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether or not master authorized networks is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     */
    protected $enabled = false;
    /**
     * cidr_blocks define up to 50 external networks that could access
     * Kubernetes master through HTTPS.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.MasterAuthorizedNetworksConfig.CidrBlock cidr_blocks = 2;</code>
     */
    private $cidr_blocks;
    /**
     * Whether master is accessbile via Google Compute Engine Public IP addresses.
     *
     * Generated from protobuf field <code>optional bool gcp_public_cidrs_access_enabled = 3;</code>
     */
    protected $gcp_public_cidrs_access_enabled = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *           Whether or not master authorized networks is enabled.
     *     @type array<\Google\Cloud\Container\V1\MasterAuthorizedNetworksConfig\CidrBlock>|\Google\Protobuf\Internal\RepeatedField $cidr_blocks
     *           cidr_blocks define up to 50 external networks that could access
     *           Kubernetes master through HTTPS.
     *     @type bool $gcp_public_cidrs_access_enabled
     *           Whether master is accessbile via Google Compute Engine Public IP addresses.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether or not master authorized networks is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Whether or not master authorized networks is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * cidr_blocks define up to 50 external networks that could access
     * Kubernetes master through HTTPS.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.MasterAuthorizedNetworksConfig.CidrBlock cidr_blocks = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCidrBlocks()
    {
        return $this->cidr_blocks;
    }

    /**
     * cidr_blocks define up to 50 external networks that could access
     * Kubernetes master through HTTPS.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.MasterAuthorizedNetworksConfig.CidrBlock cidr_blocks = 2;</code>
     * @param array<\Google\Cloud\Container\V1\MasterAuthorizedNetworksConfig\CidrBlock>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCidrBlocks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Container\V1\MasterAuthorizedNetworksConfig\CidrBlock::class);
        $this->cidr_blocks = $arr;

        return $this;
    }

    /**
     * Whether master is accessbile via Google Compute Engine Public IP addresses.
     *
     * Generated from protobuf field <code>optional bool gcp_public_cidrs_access_enabled = 3;</code>
     * @return bool
     */
    public function getGcpPublicCidrsAccessEnabled()
    {
        return isset($this->gcp_public_cidrs_access_enabled) ? $this->gcp_public_cidrs_access_enabled : false;
    }

    public function hasGcpPublicCidrsAccessEnabled()
    {
        return isset($this->gcp_public_cidrs_access_enabled);
    }

    public function clearGcpPublicCidrsAccessEnabled()
    {
        unset($this->gcp_public_cidrs_access_enabled);
    }

    /**
     * Whether master is accessbile via Google Compute Engine Public IP addresses.
     *
     * Generated from protobuf field <code>optional bool gcp_public_cidrs_access_enabled = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setGcpPublicCidrsAccessEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->gcp_public_cidrs_access_enabled = $var;

        return $this;
    }

}

