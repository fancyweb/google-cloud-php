<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/job.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for updating a Job.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.UpdateJobRequest</code>
 */
class UpdateJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Job to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.Job job = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $job = null;
    /**
     * Indicates that the request should be validated and default values
     * populated, without persisting the request or updating any resources.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     */
    protected $validate_only = false;
    /**
     * If set to true, and if the Job does not exist, it will create a new
     * one. Caller must have both create and update permissions for this call if
     * this is set to true.
     *
     * Generated from protobuf field <code>bool allow_missing = 4;</code>
     */
    protected $allow_missing = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Run\V2\Job $job
     *           Required. The Job to be updated.
     *     @type bool $validate_only
     *           Indicates that the request should be validated and default values
     *           populated, without persisting the request or updating any resources.
     *     @type bool $allow_missing
     *           If set to true, and if the Job does not exist, it will create a new
     *           one. Caller must have both create and update permissions for this call if
     *           this is set to true.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Job to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.Job job = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Run\V2\Job|null
     */
    public function getJob()
    {
        return $this->job;
    }

    public function hasJob()
    {
        return isset($this->job);
    }

    public function clearJob()
    {
        unset($this->job);
    }

    /**
     * Required. The Job to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.Job job = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Run\V2\Job $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Run\V2\Job::class);
        $this->job = $var;

        return $this;
    }

    /**
     * Indicates that the request should be validated and default values
     * populated, without persisting the request or updating any resources.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Indicates that the request should be validated and default values
     * populated, without persisting the request or updating any resources.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * If set to true, and if the Job does not exist, it will create a new
     * one. Caller must have both create and update permissions for this call if
     * this is set to true.
     *
     * Generated from protobuf field <code>bool allow_missing = 4;</code>
     * @return bool
     */
    public function getAllowMissing()
    {
        return $this->allow_missing;
    }

    /**
     * If set to true, and if the Job does not exist, it will create a new
     * one. Caller must have both create and update permissions for this call if
     * this is set to true.
     *
     * Generated from protobuf field <code>bool allow_missing = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_missing = $var;

        return $this;
    }

}

