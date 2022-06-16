<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Summary of the result of a failed request to write data to a time series.
 *
 * Generated from protobuf message <code>google.monitoring.v3.CreateTimeSeriesSummary</code>
 */
class CreateTimeSeriesSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of points in the request.
     *
     * Generated from protobuf field <code>int32 total_point_count = 1;</code>
     */
    protected $total_point_count = 0;
    /**
     * The number of points that were successfully written.
     *
     * Generated from protobuf field <code>int32 success_point_count = 2;</code>
     */
    protected $success_point_count = 0;
    /**
     * The number of points that failed to be written. Order is not guaranteed.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.CreateTimeSeriesSummary.Error errors = 3;</code>
     */
    private $errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total_point_count
     *           The number of points in the request.
     *     @type int $success_point_count
     *           The number of points that were successfully written.
     *     @type \Google\Cloud\Monitoring\V3\CreateTimeSeriesSummary\Error[]|\Google\Protobuf\Internal\RepeatedField $errors
     *           The number of points that failed to be written. Order is not guaranteed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\MetricService::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of points in the request.
     *
     * Generated from protobuf field <code>int32 total_point_count = 1;</code>
     * @return int
     */
    public function getTotalPointCount()
    {
        return $this->total_point_count;
    }

    /**
     * The number of points in the request.
     *
     * Generated from protobuf field <code>int32 total_point_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalPointCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_point_count = $var;

        return $this;
    }

    /**
     * The number of points that were successfully written.
     *
     * Generated from protobuf field <code>int32 success_point_count = 2;</code>
     * @return int
     */
    public function getSuccessPointCount()
    {
        return $this->success_point_count;
    }

    /**
     * The number of points that were successfully written.
     *
     * Generated from protobuf field <code>int32 success_point_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSuccessPointCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->success_point_count = $var;

        return $this;
    }

    /**
     * The number of points that failed to be written. Order is not guaranteed.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.CreateTimeSeriesSummary.Error errors = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * The number of points that failed to be written. Order is not guaranteed.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.CreateTimeSeriesSummary.Error errors = 3;</code>
     * @param \Google\Cloud\Monitoring\V3\CreateTimeSeriesSummary\Error[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Monitoring\V3\CreateTimeSeriesSummary\Error::class);
        $this->errors = $arr;

        return $this;
    }

}

