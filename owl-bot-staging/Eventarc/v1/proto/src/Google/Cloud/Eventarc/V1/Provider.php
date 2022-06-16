<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/discovery.proto

namespace Google\Cloud\Eventarc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A representation of the Provider resource.
 *
 * Generated from protobuf message <code>google.cloud.eventarc.v1.Provider</code>
 */
class Provider extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. In `projects/{project}/locations/{location}/providers/{provider_id}`
     * format.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Human friendly name for the Provider. For example "Cloud Storage".
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $display_name = '';
    /**
     * Output only. Event types for this provider.
     *
     * Generated from protobuf field <code>repeated .google.cloud.eventarc.v1.EventType event_types = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $event_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. In `projects/{project}/locations/{location}/providers/{provider_id}`
     *           format.
     *     @type string $display_name
     *           Output only. Human friendly name for the Provider. For example "Cloud Storage".
     *     @type \Google\Cloud\Eventarc\V1\EventType[]|\Google\Protobuf\Internal\RepeatedField $event_types
     *           Output only. Event types for this provider.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\V1\Discovery::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. In `projects/{project}/locations/{location}/providers/{provider_id}`
     * format.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. In `projects/{project}/locations/{location}/providers/{provider_id}`
     * format.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Human friendly name for the Provider. For example "Cloud Storage".
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Output only. Human friendly name for the Provider. For example "Cloud Storage".
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. Event types for this provider.
     *
     * Generated from protobuf field <code>repeated .google.cloud.eventarc.v1.EventType event_types = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEventTypes()
    {
        return $this->event_types;
    }

    /**
     * Output only. Event types for this provider.
     *
     * Generated from protobuf field <code>repeated .google.cloud.eventarc.v1.EventType event_types = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Eventarc\V1\EventType[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEventTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Eventarc\V1\EventType::class);
        $this->event_types = $arr;

        return $this;
    }

}

