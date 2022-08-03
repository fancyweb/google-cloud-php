<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response from ListAgentPools.
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.ListAgentPoolsResponse</code>
 */
class ListAgentPoolsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of agent pools.
     *
     * Generated from protobuf field <code>repeated .google.storagetransfer.v1.AgentPool agent_pools = 1;</code>
     */
    private $agent_pools;
    /**
     * The list next page token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\StorageTransfer\V1\AgentPool[]|\Google\Protobuf\Internal\RepeatedField $agent_pools
     *           A list of agent pools.
     *     @type string $next_page_token
     *           The list next page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\Transfer::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of agent pools.
     *
     * Generated from protobuf field <code>repeated .google.storagetransfer.v1.AgentPool agent_pools = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAgentPools()
    {
        return $this->agent_pools;
    }

    /**
     * A list of agent pools.
     *
     * Generated from protobuf field <code>repeated .google.storagetransfer.v1.AgentPool agent_pools = 1;</code>
     * @param \Google\Cloud\StorageTransfer\V1\AgentPool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAgentPools($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\StorageTransfer\V1\AgentPool::class);
        $this->agent_pools = $arr;

        return $this;
    }

    /**
     * The list next page token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The list next page token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

