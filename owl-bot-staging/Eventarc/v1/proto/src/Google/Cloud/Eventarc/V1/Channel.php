<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/channel.proto

namespace Google\Cloud\Eventarc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A representation of the Channel resource.
 * A Channel is a resource on which event providers publish their events.
 * The published events are delivered through the transport associated with the
 * channel. Note that a channel is associated with exactly one event provider.
 *
 * Generated from protobuf message <code>google.cloud.eventarc.v1.Channel</code>
 */
class Channel extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the channel. Must be unique within the location
     * on the project and must be in
     * `projects/{project}/locations/{location}/channels/{channel_id}` format.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Output only. Server assigned unique identifier for the channel. The value is a UUID4
     * string and guaranteed to remain unchanged until the resource is deleted.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Required. The name of the event provider (e.g. Eventarc SaaS partner) associated
     * with the channel. This provider will be granted permissions to publish
     * events to the channel. Format:
     * `projects/{project}/locations/{location}/providers/{provider_id}`.
     *
     * Generated from protobuf field <code>string provider = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $provider = '';
    /**
     * Output only. The state of a Channel.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.Channel.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. The activation token for the channel. The token must be used by the
     * provider to register the channel for publishing.
     *
     * Generated from protobuf field <code>string activation_token = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $activation_token = '';
    protected $transport;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the channel. Must be unique within the location
     *           on the project and must be in
     *           `projects/{project}/locations/{location}/channels/{channel_id}` format.
     *     @type string $uid
     *           Output only. Server assigned unique identifier for the channel. The value is a UUID4
     *           string and guaranteed to remain unchanged until the resource is deleted.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The creation time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last-modified time.
     *     @type string $provider
     *           Required. The name of the event provider (e.g. Eventarc SaaS partner) associated
     *           with the channel. This provider will be granted permissions to publish
     *           events to the channel. Format:
     *           `projects/{project}/locations/{location}/providers/{provider_id}`.
     *     @type string $pubsub_topic
     *           Output only. The name of the Pub/Sub topic created and managed by Eventarc system as
     *           a transport for the event delivery. Format:
     *           `projects/{project}/topics/{topic_id}`.
     *     @type int $state
     *           Output only. The state of a Channel.
     *     @type string $activation_token
     *           Output only. The activation token for the channel. The token must be used by the
     *           provider to register the channel for publishing.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\V1\Channel::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the channel. Must be unique within the location
     * on the project and must be in
     * `projects/{project}/locations/{location}/channels/{channel_id}` format.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the channel. Must be unique within the location
     * on the project and must be in
     * `projects/{project}/locations/{location}/channels/{channel_id}` format.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Server assigned unique identifier for the channel. The value is a UUID4
     * string and guaranteed to remain unchanged until the resource is deleted.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. Server assigned unique identifier for the channel. The value is a UUID4
     * string and guaranteed to remain unchanged until the resource is deleted.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Required. The name of the event provider (e.g. Eventarc SaaS partner) associated
     * with the channel. This provider will be granted permissions to publish
     * events to the channel. Format:
     * `projects/{project}/locations/{location}/providers/{provider_id}`.
     *
     * Generated from protobuf field <code>string provider = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Required. The name of the event provider (e.g. Eventarc SaaS partner) associated
     * with the channel. This provider will be granted permissions to publish
     * events to the channel. Format:
     * `projects/{project}/locations/{location}/providers/{provider_id}`.
     *
     * Generated from protobuf field <code>string provider = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProvider($var)
    {
        GPBUtil::checkString($var, True);
        $this->provider = $var;

        return $this;
    }

    /**
     * Output only. The name of the Pub/Sub topic created and managed by Eventarc system as
     * a transport for the event delivery. Format:
     * `projects/{project}/topics/{topic_id}`.
     *
     * Generated from protobuf field <code>string pubsub_topic = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPubsubTopic()
    {
        return $this->readOneof(8);
    }

    public function hasPubsubTopic()
    {
        return $this->hasOneof(8);
    }

    /**
     * Output only. The name of the Pub/Sub topic created and managed by Eventarc system as
     * a transport for the event delivery. Format:
     * `projects/{project}/topics/{topic_id}`.
     *
     * Generated from protobuf field <code>string pubsub_topic = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPubsubTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Output only. The state of a Channel.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.Channel.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The state of a Channel.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.Channel.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Eventarc\V1\Channel\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The activation token for the channel. The token must be used by the
     * provider to register the channel for publishing.
     *
     * Generated from protobuf field <code>string activation_token = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getActivationToken()
    {
        return $this->activation_token;
    }

    /**
     * Output only. The activation token for the channel. The token must be used by the
     * provider to register the channel for publishing.
     *
     * Generated from protobuf field <code>string activation_token = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setActivationToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->activation_token = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransport()
    {
        return $this->whichOneof("transport");
    }

}

