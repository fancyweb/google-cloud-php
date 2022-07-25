<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/study.proto

namespace Google\Cloud\AIPlatform\V1\StudySpec\ParameterSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Value specification for a parameter in `DISCRETE` type.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.StudySpec.ParameterSpec.DiscreteValueSpec</code>
 */
class DiscreteValueSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A list of possible values.
     * The list should be in increasing order and at least 1e-10 apart.
     * For instance, this parameter might have possible settings of 1.5, 2.5,
     * and 4.0. This list should not contain more than 1,000 values.
     *
     * Generated from protobuf field <code>repeated double values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $values;
    /**
     * A default value for a `DISCRETE` parameter that is assumed to be a
     * relatively good starting point.  Unset value signals that there is no
     * offered starting point.  It automatically rounds to the
     * nearest feasible discrete point.
     * Currently only supported by the Vizier service. Not supported by
     * HyperparamterTuningJob or TrainingPipeline.
     *
     * Generated from protobuf field <code>optional double default_value = 3;</code>
     */
    private $default_value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<float>|\Google\Protobuf\Internal\RepeatedField $values
     *           Required. A list of possible values.
     *           The list should be in increasing order and at least 1e-10 apart.
     *           For instance, this parameter might have possible settings of 1.5, 2.5,
     *           and 4.0. This list should not contain more than 1,000 values.
     *     @type float $default_value
     *           A default value for a `DISCRETE` parameter that is assumed to be a
     *           relatively good starting point.  Unset value signals that there is no
     *           offered starting point.  It automatically rounds to the
     *           nearest feasible discrete point.
     *           Currently only supported by the Vizier service. Not supported by
     *           HyperparamterTuningJob or TrainingPipeline.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Study::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A list of possible values.
     * The list should be in increasing order and at least 1e-10 apart.
     * For instance, this parameter might have possible settings of 1.5, 2.5,
     * and 4.0. This list should not contain more than 1,000 values.
     *
     * Generated from protobuf field <code>repeated double values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Required. A list of possible values.
     * The list should be in increasing order and at least 1e-10 apart.
     * For instance, this parameter might have possible settings of 1.5, 2.5,
     * and 4.0. This list should not contain more than 1,000 values.
     *
     * Generated from protobuf field <code>repeated double values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<float>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::DOUBLE);
        $this->values = $arr;

        return $this;
    }

    /**
     * A default value for a `DISCRETE` parameter that is assumed to be a
     * relatively good starting point.  Unset value signals that there is no
     * offered starting point.  It automatically rounds to the
     * nearest feasible discrete point.
     * Currently only supported by the Vizier service. Not supported by
     * HyperparamterTuningJob or TrainingPipeline.
     *
     * Generated from protobuf field <code>optional double default_value = 3;</code>
     * @return float
     */
    public function getDefaultValue()
    {
        return isset($this->default_value) ? $this->default_value : 0.0;
    }

    public function hasDefaultValue()
    {
        return isset($this->default_value);
    }

    public function clearDefaultValue()
    {
        unset($this->default_value);
    }

    /**
     * A default value for a `DISCRETE` parameter that is assumed to be a
     * relatively good starting point.  Unset value signals that there is no
     * offered starting point.  It automatically rounds to the
     * nearest feasible discrete point.
     * Currently only supported by the Vizier service. Not supported by
     * HyperparamterTuningJob or TrainingPipeline.
     *
     * Generated from protobuf field <code>optional double default_value = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setDefaultValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->default_value = $var;

        return $this;
    }

}


