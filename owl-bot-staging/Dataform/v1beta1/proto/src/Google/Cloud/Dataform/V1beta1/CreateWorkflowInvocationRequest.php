<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `CreateWorkflowInvocation` request message.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.CreateWorkflowInvocationRequest</code>
 */
class CreateWorkflowInvocationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The repository in which to create the workflow invocation. Must be in the
     * format `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The workflow invocation resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.WorkflowInvocation workflow_invocation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $workflow_invocation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The repository in which to create the workflow invocation. Must be in the
     *           format `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;`.
     *     @type \Google\Cloud\Dataform\V1beta1\WorkflowInvocation $workflow_invocation
     *           Required. The workflow invocation resource to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The repository in which to create the workflow invocation. Must be in the
     * format `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The repository in which to create the workflow invocation. Must be in the
     * format `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;`.
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
     * Required. The workflow invocation resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.WorkflowInvocation workflow_invocation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataform\V1beta1\WorkflowInvocation|null
     */
    public function getWorkflowInvocation()
    {
        return $this->workflow_invocation;
    }

    public function hasWorkflowInvocation()
    {
        return isset($this->workflow_invocation);
    }

    public function clearWorkflowInvocation()
    {
        unset($this->workflow_invocation);
    }

    /**
     * Required. The workflow invocation resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.WorkflowInvocation workflow_invocation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataform\V1beta1\WorkflowInvocation $var
     * @return $this
     */
    public function setWorkflowInvocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataform\V1beta1\WorkflowInvocation::class);
        $this->workflow_invocation = $var;

        return $this;
    }

}

