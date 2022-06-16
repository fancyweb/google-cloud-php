<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1beta1/webrisk.proto

namespace Google\Cloud\WebRisk\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.webrisk.v1beta1.SearchHashesResponse</code>
 */
class SearchHashesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The full hashes that matched the requested prefixes.
     * The hash will be populated in the key.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1beta1.SearchHashesResponse.ThreatHash threats = 1;</code>
     */
    private $threats;
    /**
     * For requested entities that did not match the threat list, how long to
     * cache the response until.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp negative_expire_time = 2;</code>
     */
    protected $negative_expire_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\WebRisk\V1beta1\SearchHashesResponse\ThreatHash[]|\Google\Protobuf\Internal\RepeatedField $threats
     *           The full hashes that matched the requested prefixes.
     *           The hash will be populated in the key.
     *     @type \Google\Protobuf\Timestamp $negative_expire_time
     *           For requested entities that did not match the threat list, how long to
     *           cache the response until.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Webrisk\V1Beta1\Webrisk::initOnce();
        parent::__construct($data);
    }

    /**
     * The full hashes that matched the requested prefixes.
     * The hash will be populated in the key.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1beta1.SearchHashesResponse.ThreatHash threats = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getThreats()
    {
        return $this->threats;
    }

    /**
     * The full hashes that matched the requested prefixes.
     * The hash will be populated in the key.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1beta1.SearchHashesResponse.ThreatHash threats = 1;</code>
     * @param \Google\Cloud\WebRisk\V1beta1\SearchHashesResponse\ThreatHash[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setThreats($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\WebRisk\V1beta1\SearchHashesResponse\ThreatHash::class);
        $this->threats = $arr;

        return $this;
    }

    /**
     * For requested entities that did not match the threat list, how long to
     * cache the response until.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp negative_expire_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getNegativeExpireTime()
    {
        return $this->negative_expire_time;
    }

    public function hasNegativeExpireTime()
    {
        return isset($this->negative_expire_time);
    }

    public function clearNegativeExpireTime()
    {
        unset($this->negative_expire_time);
    }

    /**
     * For requested entities that did not match the threat list, how long to
     * cache the response until.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp negative_expire_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setNegativeExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->negative_expire_time = $var;

        return $this;
    }

}

