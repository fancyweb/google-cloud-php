<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/study.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message representing a Measurement of a Trial. A Measurement contains
 * the Metrics got by executing a Trial using suggested hyperparameter
 * values.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Measurement</code>
 */
class Measurement extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Time that the Trial has been running at the point of this Measurement.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration elapsed_duration = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $elapsed_duration = null;
    /**
     * Output only. The number of steps the machine learning model has been trained for.
     * Must be non-negative.
     *
     * Generated from protobuf field <code>int64 step_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $step_count = 0;
    /**
     * Output only. A list of metrics got by evaluating the objective functions using suggested
     * Parameter values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Measurement.Metric metrics = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $metrics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $elapsed_duration
     *           Output only. Time that the Trial has been running at the point of this Measurement.
     *     @type int|string $step_count
     *           Output only. The number of steps the machine learning model has been trained for.
     *           Must be non-negative.
     *     @type array<\Google\Cloud\AIPlatform\V1\Measurement\Metric>|\Google\Protobuf\Internal\RepeatedField $metrics
     *           Output only. A list of metrics got by evaluating the objective functions using suggested
     *           Parameter values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Study::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Time that the Trial has been running at the point of this Measurement.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration elapsed_duration = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getElapsedDuration()
    {
        return $this->elapsed_duration;
    }

    public function hasElapsedDuration()
    {
        return isset($this->elapsed_duration);
    }

    public function clearElapsedDuration()
    {
        unset($this->elapsed_duration);
    }

    /**
     * Output only. Time that the Trial has been running at the point of this Measurement.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration elapsed_duration = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setElapsedDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->elapsed_duration = $var;

        return $this;
    }

    /**
     * Output only. The number of steps the machine learning model has been trained for.
     * Must be non-negative.
     *
     * Generated from protobuf field <code>int64 step_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getStepCount()
    {
        return $this->step_count;
    }

    /**
     * Output only. The number of steps the machine learning model has been trained for.
     * Must be non-negative.
     *
     * Generated from protobuf field <code>int64 step_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setStepCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->step_count = $var;

        return $this;
    }

    /**
     * Output only. A list of metrics got by evaluating the objective functions using suggested
     * Parameter values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Measurement.Metric metrics = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * Output only. A list of metrics got by evaluating the objective functions using suggested
     * Parameter values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Measurement.Metric metrics = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\Measurement\Metric>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Measurement\Metric::class);
        $this->metrics = $arr;

        return $this;
    }

}

