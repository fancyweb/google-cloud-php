<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/revision.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message containing a list of Revisions.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.ListRevisionsResponse</code>
 */
class ListRevisionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The resulting list of Revisions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.Revision revisions = 1;</code>
     */
    private $revisions;
    /**
     * A token indicating there are more items than page_size. Use it in the next
     * ListRevisions request to continue.
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
     *     @type array<\Google\Cloud\Run\V2\Revision>|\Google\Protobuf\Internal\RepeatedField $revisions
     *           The resulting list of Revisions.
     *     @type string $next_page_token
     *           A token indicating there are more items than page_size. Use it in the next
     *           ListRevisions request to continue.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\Revision::initOnce();
        parent::__construct($data);
    }

    /**
     * The resulting list of Revisions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.Revision revisions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRevisions()
    {
        return $this->revisions;
    }

    /**
     * The resulting list of Revisions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.Revision revisions = 1;</code>
     * @param array<\Google\Cloud\Run\V2\Revision>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRevisions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Run\V2\Revision::class);
        $this->revisions = $arr;

        return $this;
    }

    /**
     * A token indicating there are more items than page_size. Use it in the next
     * ListRevisions request to continue.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token indicating there are more items than page_size. Use it in the next
     * ListRevisions request to continue.
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

