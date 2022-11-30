<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a single action in a workflow invocation.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.WorkflowInvocationAction</code>
 */
class WorkflowInvocationAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. This action's identifier. Unique within the workflow invocation.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Target target = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $target = null;
    /**
     * Output only. The action's identifier if the project had been compiled without any
     * overrides configured. Unique within the compilation result.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Target canonical_target = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $canonical_target = null;
    /**
     * Output only. This action's current state.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.WorkflowInvocationAction.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. If and only if action's state is FAILED a failure reason is set.
     *
     * Generated from protobuf field <code>string failure_reason = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $failure_reason = '';
    /**
     * Output only. This action's timing details.
     * `start_time` will be set if the action is in [RUNNING, SUCCEEDED,
     * CANCELLED, FAILED] state.
     * `end_time` will be set if the action is in [SUCCEEDED, CANCELLED, FAILED]
     * state.
     *
     * Generated from protobuf field <code>.google.type.Interval invocation_timing = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $invocation_timing = null;
    /**
     * Output only. The workflow action's bigquery action details.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.WorkflowInvocationAction.BigQueryAction bigquery_action = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $bigquery_action = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataform\V1beta1\Target $target
     *           Output only. This action's identifier. Unique within the workflow invocation.
     *     @type \Google\Cloud\Dataform\V1beta1\Target $canonical_target
     *           Output only. The action's identifier if the project had been compiled without any
     *           overrides configured. Unique within the compilation result.
     *     @type int $state
     *           Output only. This action's current state.
     *     @type string $failure_reason
     *           Output only. If and only if action's state is FAILED a failure reason is set.
     *     @type \Google\Type\Interval $invocation_timing
     *           Output only. This action's timing details.
     *           `start_time` will be set if the action is in [RUNNING, SUCCEEDED,
     *           CANCELLED, FAILED] state.
     *           `end_time` will be set if the action is in [SUCCEEDED, CANCELLED, FAILED]
     *           state.
     *     @type \Google\Cloud\Dataform\V1beta1\WorkflowInvocationAction\BigQueryAction $bigquery_action
     *           Output only. The workflow action's bigquery action details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. This action's identifier. Unique within the workflow invocation.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Target target = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataform\V1beta1\Target|null
     */
    public function getTarget()
    {
        return $this->target;
    }

    public function hasTarget()
    {
        return isset($this->target);
    }

    public function clearTarget()
    {
        unset($this->target);
    }

    /**
     * Output only. This action's identifier. Unique within the workflow invocation.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Target target = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataform\V1beta1\Target $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataform\V1beta1\Target::class);
        $this->target = $var;

        return $this;
    }

    /**
     * Output only. The action's identifier if the project had been compiled without any
     * overrides configured. Unique within the compilation result.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Target canonical_target = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataform\V1beta1\Target|null
     */
    public function getCanonicalTarget()
    {
        return $this->canonical_target;
    }

    public function hasCanonicalTarget()
    {
        return isset($this->canonical_target);
    }

    public function clearCanonicalTarget()
    {
        unset($this->canonical_target);
    }

    /**
     * Output only. The action's identifier if the project had been compiled without any
     * overrides configured. Unique within the compilation result.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Target canonical_target = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataform\V1beta1\Target $var
     * @return $this
     */
    public function setCanonicalTarget($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataform\V1beta1\Target::class);
        $this->canonical_target = $var;

        return $this;
    }

    /**
     * Output only. This action's current state.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.WorkflowInvocationAction.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. This action's current state.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.WorkflowInvocationAction.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataform\V1beta1\WorkflowInvocationAction\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. If and only if action's state is FAILED a failure reason is set.
     *
     * Generated from protobuf field <code>string failure_reason = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFailureReason()
    {
        return $this->failure_reason;
    }

    /**
     * Output only. If and only if action's state is FAILED a failure reason is set.
     *
     * Generated from protobuf field <code>string failure_reason = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFailureReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->failure_reason = $var;

        return $this;
    }

    /**
     * Output only. This action's timing details.
     * `start_time` will be set if the action is in [RUNNING, SUCCEEDED,
     * CANCELLED, FAILED] state.
     * `end_time` will be set if the action is in [SUCCEEDED, CANCELLED, FAILED]
     * state.
     *
     * Generated from protobuf field <code>.google.type.Interval invocation_timing = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Type\Interval|null
     */
    public function getInvocationTiming()
    {
        return $this->invocation_timing;
    }

    public function hasInvocationTiming()
    {
        return isset($this->invocation_timing);
    }

    public function clearInvocationTiming()
    {
        unset($this->invocation_timing);
    }

    /**
     * Output only. This action's timing details.
     * `start_time` will be set if the action is in [RUNNING, SUCCEEDED,
     * CANCELLED, FAILED] state.
     * `end_time` will be set if the action is in [SUCCEEDED, CANCELLED, FAILED]
     * state.
     *
     * Generated from protobuf field <code>.google.type.Interval invocation_timing = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Type\Interval $var
     * @return $this
     */
    public function setInvocationTiming($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Interval::class);
        $this->invocation_timing = $var;

        return $this;
    }

    /**
     * Output only. The workflow action's bigquery action details.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.WorkflowInvocationAction.BigQueryAction bigquery_action = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataform\V1beta1\WorkflowInvocationAction\BigQueryAction|null
     */
    public function getBigqueryAction()
    {
        return $this->bigquery_action;
    }

    public function hasBigqueryAction()
    {
        return isset($this->bigquery_action);
    }

    public function clearBigqueryAction()
    {
        unset($this->bigquery_action);
    }

    /**
     * Output only. The workflow action's bigquery action details.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.WorkflowInvocationAction.BigQueryAction bigquery_action = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataform\V1beta1\WorkflowInvocationAction\BigQueryAction $var
     * @return $this
     */
    public function setBigqueryAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataform\V1beta1\WorkflowInvocationAction\BigQueryAction::class);
        $this->bigquery_action = $var;

        return $this;
    }

}

