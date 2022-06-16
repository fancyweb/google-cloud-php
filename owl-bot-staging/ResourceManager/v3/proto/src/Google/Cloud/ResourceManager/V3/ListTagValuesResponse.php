<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/tag_values.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The ListTagValues response.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.ListTagValuesResponse</code>
 */
class ListTagValuesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A possibly paginated list of TagValues that are direct descendants of
     * the specified parent TagKey.
     *
     * Generated from protobuf field <code>repeated .google.cloud.resourcemanager.v3.TagValue tag_values = 1;</code>
     */
    private $tag_values;
    /**
     * A pagination token returned from a previous call to `ListTagValues`
     * that indicates from where listing should continue. This is currently not
     * used, but the server may at any point start supplying a valid token.
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
     *     @type \Google\Cloud\ResourceManager\V3\TagValue[]|\Google\Protobuf\Internal\RepeatedField $tag_values
     *           A possibly paginated list of TagValues that are direct descendants of
     *           the specified parent TagKey.
     *     @type string $next_page_token
     *           A pagination token returned from a previous call to `ListTagValues`
     *           that indicates from where listing should continue. This is currently not
     *           used, but the server may at any point start supplying a valid token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\TagValues::initOnce();
        parent::__construct($data);
    }

    /**
     * A possibly paginated list of TagValues that are direct descendants of
     * the specified parent TagKey.
     *
     * Generated from protobuf field <code>repeated .google.cloud.resourcemanager.v3.TagValue tag_values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTagValues()
    {
        return $this->tag_values;
    }

    /**
     * A possibly paginated list of TagValues that are direct descendants of
     * the specified parent TagKey.
     *
     * Generated from protobuf field <code>repeated .google.cloud.resourcemanager.v3.TagValue tag_values = 1;</code>
     * @param \Google\Cloud\ResourceManager\V3\TagValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTagValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ResourceManager\V3\TagValue::class);
        $this->tag_values = $arr;

        return $this;
    }

    /**
     * A pagination token returned from a previous call to `ListTagValues`
     * that indicates from where listing should continue. This is currently not
     * used, but the server may at any point start supplying a valid token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A pagination token returned from a previous call to `ListTagValues`
     * that indicates from where listing should continue. This is currently not
     * used, but the server may at any point start supplying a valid token.
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

