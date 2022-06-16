<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datafusion/v1/datafusion.proto

namespace Google\Cloud\DataFusion\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for the list available versions request.
 *
 * Generated from protobuf message <code>google.cloud.datafusion.v1.ListAvailableVersionsResponse</code>
 */
class ListAvailableVersionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Represents a list of versions that are supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datafusion.v1.Version available_versions = 1;</code>
     */
    private $available_versions;
    /**
     * Token to retrieve the next page of results or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataFusion\V1\Version[]|\Google\Protobuf\Internal\RepeatedField $available_versions
     *           Represents a list of versions that are supported.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results or empty if there are no more
     *           results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datafusion\V1\Datafusion::initOnce();
        parent::__construct($data);
    }

    /**
     * Represents a list of versions that are supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datafusion.v1.Version available_versions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvailableVersions()
    {
        return $this->available_versions;
    }

    /**
     * Represents a list of versions that are supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datafusion.v1.Version available_versions = 1;</code>
     * @param \Google\Cloud\DataFusion\V1\Version[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvailableVersions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataFusion\V1\Version::class);
        $this->available_versions = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results or empty if there are no more
     * results in the list.
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

