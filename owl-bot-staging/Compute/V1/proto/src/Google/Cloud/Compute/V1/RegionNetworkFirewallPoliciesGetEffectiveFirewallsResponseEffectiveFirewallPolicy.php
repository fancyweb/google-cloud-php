<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RegionNetworkFirewallPoliciesGetEffectiveFirewallsResponseEffectiveFirewallPolicy</code>
 */
class RegionNetworkFirewallPoliciesGetEffectiveFirewallsResponseEffectiveFirewallPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The display name of the firewall policy.
     *
     * Generated from protobuf field <code>optional string display_name = 4473832;</code>
     */
    protected $display_name = null;
    /**
     * [Output Only] The name of the firewall policy.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    protected $name = null;
    /**
     * The rules that apply to the network.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyRule rules = 108873975;</code>
     */
    private $rules;
    /**
     * [Output Only] The type of the firewall policy. Can be one of HIERARCHY, NETWORK, NETWORK_REGIONAL.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     */
    protected $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           [Output Only] The display name of the firewall policy.
     *     @type string $name
     *           [Output Only] The name of the firewall policy.
     *     @type \Google\Cloud\Compute\V1\FirewallPolicyRule[]|\Google\Protobuf\Internal\RepeatedField $rules
     *           The rules that apply to the network.
     *     @type string $type
     *           [Output Only] The type of the firewall policy. Can be one of HIERARCHY, NETWORK, NETWORK_REGIONAL.
     *           Check the Type enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The display name of the firewall policy.
     *
     * Generated from protobuf field <code>optional string display_name = 4473832;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return isset($this->display_name) ? $this->display_name : '';
    }

    public function hasDisplayName()
    {
        return isset($this->display_name);
    }

    public function clearDisplayName()
    {
        unset($this->display_name);
    }

    /**
     * [Output Only] The display name of the firewall policy.
     *
     * Generated from protobuf field <code>optional string display_name = 4473832;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * [Output Only] The name of the firewall policy.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * [Output Only] The name of the firewall policy.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The rules that apply to the network.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyRule rules = 108873975;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * The rules that apply to the network.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyRule rules = 108873975;</code>
     * @param \Google\Cloud\Compute\V1\FirewallPolicyRule[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\FirewallPolicyRule::class);
        $this->rules = $arr;

        return $this;
    }

    /**
     * [Output Only] The type of the firewall policy. Can be one of HIERARCHY, NETWORK, NETWORK_REGIONAL.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @return string
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : '';
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * [Output Only] The type of the firewall policy. Can be one of HIERARCHY, NETWORK, NETWORK_REGIONAL.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}

