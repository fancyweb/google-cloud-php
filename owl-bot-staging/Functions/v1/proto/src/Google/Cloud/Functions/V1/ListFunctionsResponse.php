<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v1/functions.proto

namespace Google\Cloud\Functions\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the `ListFunctions` method.
 *
 * Generated from protobuf message <code>google.cloud.functions.v1.ListFunctionsResponse</code>
 */
class ListFunctionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The functions that match the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v1.CloudFunction functions = 1;</code>
     */
    private $functions;
    /**
     * If not empty, indicates that there may be more functions that match
     * the request; this value should be passed in a new
     * [google.cloud.functions.v1.ListFunctionsRequest][google.cloud.functions.v1.ListFunctionsRequest]
     * to get more functions.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Locations that could not be reached. The response does not include any
     * functions from these locations.
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
     *     @type \Google\Cloud\Functions\V1\CloudFunction[]|\Google\Protobuf\Internal\RepeatedField $functions
     *           The functions that match the request.
     *     @type string $next_page_token
     *           If not empty, indicates that there may be more functions that match
     *           the request; this value should be passed in a new
     *           [google.cloud.functions.v1.ListFunctionsRequest][google.cloud.functions.v1.ListFunctionsRequest]
     *           to get more functions.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached. The response does not include any
     *           functions from these locations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Functions\V1\Functions::initOnce();
        parent::__construct($data);
    }

    /**
     * The functions that match the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v1.CloudFunction functions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFunctions()
    {
        return $this->functions;
    }

    /**
     * The functions that match the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v1.CloudFunction functions = 1;</code>
     * @param \Google\Cloud\Functions\V1\CloudFunction[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFunctions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Functions\V1\CloudFunction::class);
        $this->functions = $arr;

        return $this;
    }

    /**
     * If not empty, indicates that there may be more functions that match
     * the request; this value should be passed in a new
     * [google.cloud.functions.v1.ListFunctionsRequest][google.cloud.functions.v1.ListFunctionsRequest]
     * to get more functions.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If not empty, indicates that there may be more functions that match
     * the request; this value should be passed in a new
     * [google.cloud.functions.v1.ListFunctionsRequest][google.cloud.functions.v1.ListFunctionsRequest]
     * to get more functions.
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
     * Locations that could not be reached. The response does not include any
     * functions from these locations.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached. The response does not include any
     * functions from these locations.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

