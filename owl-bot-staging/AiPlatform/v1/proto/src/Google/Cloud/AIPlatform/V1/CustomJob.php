<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/custom_job.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a job that runs custom workloads such as a Docker container or a
 * Python package. A CustomJob can have multiple worker pools and each worker
 * pool can have its own machine and input spec. A CustomJob will be cleaned up
 * once the job enters terminal state (failed or succeeded).
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CustomJob</code>
 */
class CustomJob extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of a CustomJob.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Required. The display name of the CustomJob.
     * The name can be up to 128 characters long and can consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Required. Job spec.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CustomJobSpec job_spec = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $job_spec = null;
    /**
     * Output only. The detailed state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.JobState state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. Time when the CustomJob was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Time when the CustomJob for the first time entered the
     * `JOB_STATE_RUNNING` state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $start_time = null;
    /**
     * Output only. Time when the CustomJob entered any of the following states:
     * `JOB_STATE_SUCCEEDED`, `JOB_STATE_FAILED`, `JOB_STATE_CANCELLED`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $end_time = null;
    /**
     * Output only. Time when the CustomJob was most recently updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. Only populated when job's state is `JOB_STATE_FAILED` or
     * `JOB_STATE_CANCELLED`.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $error = null;
    /**
     * The labels with user-defined metadata to organize CustomJobs.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11;</code>
     */
    private $labels;
    /**
     * Customer-managed encryption key options for a CustomJob. If this is set,
     * then all resources created by the CustomJob will be encrypted with the
     * provided encryption key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 12;</code>
     */
    protected $encryption_spec = null;
    /**
     * Output only. URIs for accessing [interactive
     * shells](https://cloud.google.com/vertex-ai/docs/training/monitor-debug-interactive-shell)
     * (one URI for each training node). Only available if
     * [job_spec.enable_web_access][google.cloud.aiplatform.v1.CustomJobSpec.enable_web_access] is `true`.
     * The keys are names of each node in the training job; for example,
     * `workerpool0-0` for the primary node, `workerpool1-0` for the first node in
     * the second worker pool, and `workerpool1-1` for the second node in the
     * second worker pool.
     * The values are the URIs for each node's interactive shell.
     *
     * Generated from protobuf field <code>map<string, string> web_access_uris = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $web_access_uris;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of a CustomJob.
     *     @type string $display_name
     *           Required. The display name of the CustomJob.
     *           The name can be up to 128 characters long and can consist of any UTF-8
     *           characters.
     *     @type \Google\Cloud\AIPlatform\V1\CustomJobSpec $job_spec
     *           Required. Job spec.
     *     @type int $state
     *           Output only. The detailed state of the job.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when the CustomJob was created.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. Time when the CustomJob for the first time entered the
     *           `JOB_STATE_RUNNING` state.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. Time when the CustomJob entered any of the following states:
     *           `JOB_STATE_SUCCEEDED`, `JOB_STATE_FAILED`, `JOB_STATE_CANCELLED`.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time when the CustomJob was most recently updated.
     *     @type \Google\Rpc\Status $error
     *           Output only. Only populated when job's state is `JOB_STATE_FAILED` or
     *           `JOB_STATE_CANCELLED`.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The labels with user-defined metadata to organize CustomJobs.
     *           Label keys and values can be no longer than 64 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           See https://goo.gl/xmQnxf for more information and examples of labels.
     *     @type \Google\Cloud\AIPlatform\V1\EncryptionSpec $encryption_spec
     *           Customer-managed encryption key options for a CustomJob. If this is set,
     *           then all resources created by the CustomJob will be encrypted with the
     *           provided encryption key.
     *     @type array|\Google\Protobuf\Internal\MapField $web_access_uris
     *           Output only. URIs for accessing [interactive
     *           shells](https://cloud.google.com/vertex-ai/docs/training/monitor-debug-interactive-shell)
     *           (one URI for each training node). Only available if
     *           [job_spec.enable_web_access][google.cloud.aiplatform.v1.CustomJobSpec.enable_web_access] is `true`.
     *           The keys are names of each node in the training job; for example,
     *           `workerpool0-0` for the primary node, `workerpool1-0` for the first node in
     *           the second worker pool, and `workerpool1-1` for the second node in the
     *           second worker pool.
     *           The values are the URIs for each node's interactive shell.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\CustomJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of a CustomJob.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of a CustomJob.
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
     * Required. The display name of the CustomJob.
     * The name can be up to 128 characters long and can consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of the CustomJob.
     * The name can be up to 128 characters long and can consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Job spec.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CustomJobSpec job_spec = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\CustomJobSpec|null
     */
    public function getJobSpec()
    {
        return $this->job_spec;
    }

    public function hasJobSpec()
    {
        return isset($this->job_spec);
    }

    public function clearJobSpec()
    {
        unset($this->job_spec);
    }

    /**
     * Required. Job spec.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CustomJobSpec job_spec = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\CustomJobSpec $var
     * @return $this
     */
    public function setJobSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\CustomJobSpec::class);
        $this->job_spec = $var;

        return $this;
    }

    /**
     * Output only. The detailed state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.JobState state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The detailed state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.JobState state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\JobState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Time when the CustomJob was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time when the CustomJob was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time when the CustomJob for the first time entered the
     * `JOB_STATE_RUNNING` state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time when the CustomJob for the first time entered the
     * `JOB_STATE_RUNNING` state.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time when the CustomJob entered any of the following states:
     * `JOB_STATE_SUCCEEDED`, `JOB_STATE_FAILED`, `JOB_STATE_CANCELLED`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time when the CustomJob entered any of the following states:
     * `JOB_STATE_SUCCEEDED`, `JOB_STATE_FAILED`, `JOB_STATE_CANCELLED`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Output only. Time when the CustomJob was most recently updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time when the CustomJob was most recently updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Only populated when job's state is `JOB_STATE_FAILED` or
     * `JOB_STATE_CANCELLED`.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Output only. Only populated when job's state is `JOB_STATE_FAILED` or
     * `JOB_STATE_CANCELLED`.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

    /**
     * The labels with user-defined metadata to organize CustomJobs.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The labels with user-defined metadata to organize CustomJobs.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Customer-managed encryption key options for a CustomJob. If this is set,
     * then all resources created by the CustomJob will be encrypted with the
     * provided encryption key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 12;</code>
     * @return \Google\Cloud\AIPlatform\V1\EncryptionSpec|null
     */
    public function getEncryptionSpec()
    {
        return $this->encryption_spec;
    }

    public function hasEncryptionSpec()
    {
        return isset($this->encryption_spec);
    }

    public function clearEncryptionSpec()
    {
        unset($this->encryption_spec);
    }

    /**
     * Customer-managed encryption key options for a CustomJob. If this is set,
     * then all resources created by the CustomJob will be encrypted with the
     * provided encryption key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 12;</code>
     * @param \Google\Cloud\AIPlatform\V1\EncryptionSpec $var
     * @return $this
     */
    public function setEncryptionSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\EncryptionSpec::class);
        $this->encryption_spec = $var;

        return $this;
    }

    /**
     * Output only. URIs for accessing [interactive
     * shells](https://cloud.google.com/vertex-ai/docs/training/monitor-debug-interactive-shell)
     * (one URI for each training node). Only available if
     * [job_spec.enable_web_access][google.cloud.aiplatform.v1.CustomJobSpec.enable_web_access] is `true`.
     * The keys are names of each node in the training job; for example,
     * `workerpool0-0` for the primary node, `workerpool1-0` for the first node in
     * the second worker pool, and `workerpool1-1` for the second node in the
     * second worker pool.
     * The values are the URIs for each node's interactive shell.
     *
     * Generated from protobuf field <code>map<string, string> web_access_uris = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getWebAccessUris()
    {
        return $this->web_access_uris;
    }

    /**
     * Output only. URIs for accessing [interactive
     * shells](https://cloud.google.com/vertex-ai/docs/training/monitor-debug-interactive-shell)
     * (one URI for each training node). Only available if
     * [job_spec.enable_web_access][google.cloud.aiplatform.v1.CustomJobSpec.enable_web_access] is `true`.
     * The keys are names of each node in the training job; for example,
     * `workerpool0-0` for the primary node, `workerpool1-0` for the first node in
     * the second worker pool, and `workerpool1-1` for the second node in the
     * second worker pool.
     * The values are the URIs for each node's interactive shell.
     *
     * Generated from protobuf field <code>map<string, string> web_access_uris = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setWebAccessUris($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->web_access_uris = $arr;

        return $this;
    }

}

