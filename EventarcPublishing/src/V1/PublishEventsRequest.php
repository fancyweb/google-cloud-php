<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/publishing/v1/publisher.proto

namespace Google\Cloud\Eventarc\Publishing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for the PublishEvents method.
 *
 * Generated from protobuf message <code>google.cloud.eventarc.publishing.v1.PublishEventsRequest</code>
 */
class PublishEventsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The full name of the channel to publish to. For example:
     * `projects/{project}/locations/{location}/channels/{channel-id}`.
     *
     * Generated from protobuf field <code>string channel = 1;</code>
     */
    private $channel = '';
    /**
     * The CloudEvents v1.0 events to publish. No other types are allowed.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any events = 2;</code>
     */
    private $events;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $channel
     *           The full name of the channel to publish to. For example:
     *           `projects/{project}/locations/{location}/channels/{channel-id}`.
     *     @type \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $events
     *           The CloudEvents v1.0 events to publish. No other types are allowed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\Publishing\V1\Publisher::initOnce();
        parent::__construct($data);
    }

    /**
     * The full name of the channel to publish to. For example:
     * `projects/{project}/locations/{location}/channels/{channel-id}`.
     *
     * Generated from protobuf field <code>string channel = 1;</code>
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * The full name of the channel to publish to. For example:
     * `projects/{project}/locations/{location}/channels/{channel-id}`.
     *
     * Generated from protobuf field <code>string channel = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel = $var;

        return $this;
    }

    /**
     * The CloudEvents v1.0 events to publish. No other types are allowed.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any events = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * The CloudEvents v1.0 events to publish. No other types are allowed.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any events = 2;</code>
     * @param \Google\Protobuf\Any[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->events = $arr;

        return $this;
    }

}

