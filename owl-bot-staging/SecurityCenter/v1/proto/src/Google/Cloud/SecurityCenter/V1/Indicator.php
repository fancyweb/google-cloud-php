<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/indicator.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents what's commonly known as an Indicator of compromise (IoC) in
 * computer forensics. This is an artifact observed on a network or in an
 * operating system that, with high confidence, indicates a computer intrusion.
 * Reference: https://en.wikipedia.org/wiki/Indicator_of_compromise
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.Indicator</code>
 */
class Indicator extends \Google\Protobuf\Internal\Message
{
    /**
     * List of ip addresses associated to the Finding.
     *
     * Generated from protobuf field <code>repeated string ip_addresses = 1;</code>
     */
    private $ip_addresses;
    /**
     * List of domains associated to the Finding.
     *
     * Generated from protobuf field <code>repeated string domains = 2;</code>
     */
    private $domains;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $ip_addresses
     *           List of ip addresses associated to the Finding.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $domains
     *           List of domains associated to the Finding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Indicator::initOnce();
        parent::__construct($data);
    }

    /**
     * List of ip addresses associated to the Finding.
     *
     * Generated from protobuf field <code>repeated string ip_addresses = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIpAddresses()
    {
        return $this->ip_addresses;
    }

    /**
     * List of ip addresses associated to the Finding.
     *
     * Generated from protobuf field <code>repeated string ip_addresses = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIpAddresses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ip_addresses = $arr;

        return $this;
    }

    /**
     * List of domains associated to the Finding.
     *
     * Generated from protobuf field <code>repeated string domains = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDomains()
    {
        return $this->domains;
    }

    /**
     * List of domains associated to the Finding.
     *
     * Generated from protobuf field <code>repeated string domains = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDomains($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->domains = $arr;

        return $this;
    }

}

