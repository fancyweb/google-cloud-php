<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/evaluation_job.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Records a failed evaluation job run.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.Attempt</code>
 */
class Attempt extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp attempt_time = 1;</code>
     */
    protected $attempt_time = null;
    /**
     * Details of errors that occurred.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status partial_failures = 2;</code>
     */
    private $partial_failures;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $attempt_time
     *     @type array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $partial_failures
     *           Details of errors that occurred.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\EvaluationJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp attempt_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getAttemptTime()
    {
        return $this->attempt_time;
    }

    public function hasAttemptTime()
    {
        return isset($this->attempt_time);
    }

    public function clearAttemptTime()
    {
        unset($this->attempt_time);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp attempt_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setAttemptTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->attempt_time = $var;

        return $this;
    }

    /**
     * Details of errors that occurred.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status partial_failures = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartialFailures()
    {
        return $this->partial_failures;
    }

    /**
     * Details of errors that occurred.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status partial_failures = 2;</code>
     * @param array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartialFailures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Rpc\Status::class);
        $this->partial_failures = $arr;

        return $this;
    }

}

