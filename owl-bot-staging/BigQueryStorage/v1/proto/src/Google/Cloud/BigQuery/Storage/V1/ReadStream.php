<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/stream.proto

namespace Google\Cloud\BigQuery\Storage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about a single stream that gets data out of the storage system.
 * Most of the information about `ReadStream` instances is aggregated, making
 * `ReadStream` lightweight.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.ReadStream</code>
 */
class ReadStream extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Name of the stream, in the form
     * `projects/{project_id}/locations/{location}/sessions/{session_id}/streams/{stream_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Name of the stream, in the form
     *           `projects/{project_id}/locations/{location}/sessions/{session_id}/streams/{stream_id}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Stream::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Name of the stream, in the form
     * `projects/{project_id}/locations/{location}/sessions/{session_id}/streams/{stream_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Name of the stream, in the form
     * `projects/{project_id}/locations/{location}/sessions/{session_id}/streams/{stream_id}`.
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

}

