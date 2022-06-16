<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datatransfer.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1\StartManualTransferRunsRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A specification for a time range, this will request transfer runs with
 * run_time between start_time (inclusive) and end_time (exclusive).
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datatransfer.v1.StartManualTransferRunsRequest.TimeRange</code>
 */
class TimeRange extends \Google\Protobuf\Internal\Message
{
    /**
     * Start time of the range of transfer runs. For example,
     * `"2017-05-25T00:00:00+00:00"`. The start_time must be strictly less than
     * the end_time. Creates transfer runs where run_time is in the range
     * between start_time (inclusive) and end_time (exclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    protected $start_time = null;
    /**
     * End time of the range of transfer runs. For example,
     * `"2017-05-30T00:00:00+00:00"`. The end_time must not be in the future.
     * Creates transfer runs where run_time is in the range between start_time
     * (inclusive) and end_time (exclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    protected $end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Start time of the range of transfer runs. For example,
     *           `"2017-05-25T00:00:00+00:00"`. The start_time must be strictly less than
     *           the end_time. Creates transfer runs where run_time is in the range
     *           between start_time (inclusive) and end_time (exclusive).
     *     @type \Google\Protobuf\Timestamp $end_time
     *           End time of the range of transfer runs. For example,
     *           `"2017-05-30T00:00:00+00:00"`. The end_time must not be in the future.
     *           Creates transfer runs where run_time is in the range between start_time
     *           (inclusive) and end_time (exclusive).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Datatransfer::initOnce();
        parent::__construct($data);
    }

    /**
     * Start time of the range of transfer runs. For example,
     * `"2017-05-25T00:00:00+00:00"`. The start_time must be strictly less than
     * the end_time. Creates transfer runs where run_time is in the range
     * between start_time (inclusive) and end_time (exclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Start time of the range of transfer runs. For example,
     * `"2017-05-25T00:00:00+00:00"`. The start_time must be strictly less than
     * the end_time. Creates transfer runs where run_time is in the range
     * between start_time (inclusive) and end_time (exclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * End time of the range of transfer runs. For example,
     * `"2017-05-30T00:00:00+00:00"`. The end_time must not be in the future.
     * Creates transfer runs where run_time is in the range between start_time
     * (inclusive) and end_time (exclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * End time of the range of transfer runs. For example,
     * `"2017-05-30T00:00:00+00:00"`. The end_time must not be in the future.
     * Creates transfer runs where run_time is in the range between start_time
     * (inclusive) and end_time (exclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TimeRange::class, \Google\Cloud\BigQuery\DataTransfer\V1\StartManualTransferRunsRequest_TimeRange::class);

