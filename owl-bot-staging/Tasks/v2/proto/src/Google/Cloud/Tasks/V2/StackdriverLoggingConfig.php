<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2/queue.proto

namespace Google\Cloud\Tasks\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration options for writing logs to
 * [Stackdriver Logging](https://cloud.google.com/logging/docs/).
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2.StackdriverLoggingConfig</code>
 */
class StackdriverLoggingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies the fraction of operations to write to
     * [Stackdriver Logging](https://cloud.google.com/logging/docs/).
     * This field may contain any value between 0.0 and 1.0, inclusive.
     * 0.0 is the default and means that no operations are logged.
     *
     * Generated from protobuf field <code>double sampling_ratio = 1;</code>
     */
    protected $sampling_ratio = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $sampling_ratio
     *           Specifies the fraction of operations to write to
     *           [Stackdriver Logging](https://cloud.google.com/logging/docs/).
     *           This field may contain any value between 0.0 and 1.0, inclusive.
     *           0.0 is the default and means that no operations are logged.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2\Queue::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies the fraction of operations to write to
     * [Stackdriver Logging](https://cloud.google.com/logging/docs/).
     * This field may contain any value between 0.0 and 1.0, inclusive.
     * 0.0 is the default and means that no operations are logged.
     *
     * Generated from protobuf field <code>double sampling_ratio = 1;</code>
     * @return float
     */
    public function getSamplingRatio()
    {
        return $this->sampling_ratio;
    }

    /**
     * Specifies the fraction of operations to write to
     * [Stackdriver Logging](https://cloud.google.com/logging/docs/).
     * This field may contain any value between 0.0 and 1.0, inclusive.
     * 0.0 is the default and means that no operations are logged.
     *
     * Generated from protobuf field <code>double sampling_ratio = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setSamplingRatio($var)
    {
        GPBUtil::checkDouble($var);
        $this->sampling_ratio = $var;

        return $this;
    }

}

