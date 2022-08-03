<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/job_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [JobService.CreateCustomJob][google.cloud.aiplatform.v1.JobService.CreateCustomJob].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreateCustomJobRequest</code>
 */
class CreateCustomJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location to create the CustomJob in.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The CustomJob to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CustomJob custom_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $custom_job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location to create the CustomJob in.
     *           Format: `projects/{project}/locations/{location}`
     *     @type \Google\Cloud\AIPlatform\V1\CustomJob $custom_job
     *           Required. The CustomJob to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\JobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location to create the CustomJob in.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location to create the CustomJob in.
     * Format: `projects/{project}/locations/{location}`
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
     * Required. The CustomJob to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CustomJob custom_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\CustomJob|null
     */
    public function getCustomJob()
    {
        return $this->custom_job;
    }

    public function hasCustomJob()
    {
        return isset($this->custom_job);
    }

    public function clearCustomJob()
    {
        unset($this->custom_job);
    }

    /**
     * Required. The CustomJob to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CustomJob custom_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\CustomJob $var
     * @return $this
     */
    public function setCustomJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\CustomJob::class);
        $this->custom_job = $var;

        return $this;
    }

}

