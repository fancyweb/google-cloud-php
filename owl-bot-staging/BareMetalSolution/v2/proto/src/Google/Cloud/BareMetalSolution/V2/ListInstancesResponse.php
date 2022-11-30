<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/instance.proto

namespace Google\Cloud\BareMetalSolution\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for the list of servers.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.ListInstancesResponse</code>
 */
class ListInstancesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of servers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.baremetalsolution.v2.Instance instances = 1;</code>
     */
    private $instances;
    /**
     * A token identifying a page of results from the server.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\BareMetalSolution\V2\Instance>|\Google\Protobuf\Internal\RepeatedField $instances
     *           The list of servers.
     *     @type string $next_page_token
     *           A token identifying a page of results from the server.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\Instance::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of servers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.baremetalsolution.v2.Instance instances = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * The list of servers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.baremetalsolution.v2.Instance instances = 1;</code>
     * @param array<\Google\Cloud\BareMetalSolution\V2\Instance>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BareMetalSolution\V2\Instance::class);
        $this->instances = $arr;

        return $this;
    }

    /**
     * A token identifying a page of results from the server.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token identifying a page of results from the server.
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

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

