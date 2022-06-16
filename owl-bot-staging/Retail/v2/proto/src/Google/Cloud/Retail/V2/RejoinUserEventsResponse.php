<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/user_event_service.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for RejoinUserEvents method.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.RejoinUserEventsResponse</code>
 */
class RejoinUserEventsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of user events that were joined with latest product catalog.
     *
     * Generated from protobuf field <code>int64 rejoined_user_events_count = 1;</code>
     */
    protected $rejoined_user_events_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $rejoined_user_events_count
     *           Number of user events that were joined with latest product catalog.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\UserEventService::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of user events that were joined with latest product catalog.
     *
     * Generated from protobuf field <code>int64 rejoined_user_events_count = 1;</code>
     * @return int|string
     */
    public function getRejoinedUserEventsCount()
    {
        return $this->rejoined_user_events_count;
    }

    /**
     * Number of user events that were joined with latest product catalog.
     *
     * Generated from protobuf field <code>int64 rejoined_user_events_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRejoinedUserEventsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->rejoined_user_events_count = $var;

        return $this;
    }

}

