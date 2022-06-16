<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/content.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List content response.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.ListContentResponse</code>
 */
class ListContentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Content under the given parent lake.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.Content content = 1;</code>
     */
    private $content;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
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
     *     @type \Google\Cloud\Dataplex\V1\Content[]|\Google\Protobuf\Internal\RepeatedField $content
     *           Content under the given parent lake.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Content::initOnce();
        parent::__construct($data);
    }

    /**
     * Content under the given parent lake.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.Content content = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Content under the given parent lake.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.Content content = 1;</code>
     * @param \Google\Cloud\Dataplex\V1\Content[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContent($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataplex\V1\Content::class);
        $this->content = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
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
     * Token to retrieve the next page of results, or empty if there are no more
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

