<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/scheduler/v1/cloudscheduler.proto

namespace Google\Cloud\Scheduler\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CreateJob][google.cloud.scheduler.v1.CloudScheduler.CreateJob].
 *
 * Generated from protobuf message <code>google.cloud.scheduler.v1.CreateJobRequest</code>
 */
class CreateJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The location name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The job to add. The user can optionally specify a name for the
     * job in [name][google.cloud.scheduler.v1.Job.name]. [name][google.cloud.scheduler.v1.Job.name] cannot be the same as an
     * existing job. If a name is not specified then the system will
     * generate a random unique name that will be returned
     * ([name][google.cloud.scheduler.v1.Job.name]) in the response.
     *
     * Generated from protobuf field <code>.google.cloud.scheduler.v1.Job job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The location name. For example:
     *           `projects/PROJECT_ID/locations/LOCATION_ID`.
     *     @type \Google\Cloud\Scheduler\V1\Job $job
     *           Required. The job to add. The user can optionally specify a name for the
     *           job in [name][google.cloud.scheduler.v1.Job.name]. [name][google.cloud.scheduler.v1.Job.name] cannot be the same as an
     *           existing job. If a name is not specified then the system will
     *           generate a random unique name that will be returned
     *           ([name][google.cloud.scheduler.v1.Job.name]) in the response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Scheduler\V1\Cloudscheduler::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The location name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The location name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The job to add. The user can optionally specify a name for the
     * job in [name][google.cloud.scheduler.v1.Job.name]. [name][google.cloud.scheduler.v1.Job.name] cannot be the same as an
     * existing job. If a name is not specified then the system will
     * generate a random unique name that will be returned
     * ([name][google.cloud.scheduler.v1.Job.name]) in the response.
     *
     * Generated from protobuf field <code>.google.cloud.scheduler.v1.Job job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Scheduler\V1\Job|null
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
     * Required. The job to add. The user can optionally specify a name for the
     * job in [name][google.cloud.scheduler.v1.Job.name]. [name][google.cloud.scheduler.v1.Job.name] cannot be the same as an
     * existing job. If a name is not specified then the system will
     * generate a random unique name that will be returned
     * ([name][google.cloud.scheduler.v1.Job.name]) in the response.
     *
     * Generated from protobuf field <code>.google.cloud.scheduler.v1.Job job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Scheduler\V1\Job $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Scheduler\V1\Job::class);
        $this->job = $var;

        return $this;
    }

}

