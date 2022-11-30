<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [TensorboardService.UpdateTensorboardTimeSeries][google.cloud.aiplatform.v1.TensorboardService.UpdateTensorboardTimeSeries].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UpdateTensorboardTimeSeriesRequest</code>
 */
class UpdateTensorboardTimeSeriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * TensorboardTimeSeries resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten if new
     * values are specified.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;
    /**
     * Required. The TensorboardTimeSeries' `name` field is used to identify the
     * TensorboardTimeSeries to be updated.
     * Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardTimeSeries tensorboard_time_series = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $tensorboard_time_series = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Field mask is used to specify the fields to be overwritten in the
     *           TensorboardTimeSeries resource by the update.
     *           The fields specified in the update_mask are relative to the resource, not
     *           the full request. A field will be overwritten if it is in the mask. If the
     *           user does not provide a mask then all fields will be overwritten if new
     *           values are specified.
     *     @type \Google\Cloud\AIPlatform\V1\TensorboardTimeSeries $tensorboard_time_series
     *           Required. The TensorboardTimeSeries' `name` field is used to identify the
     *           TensorboardTimeSeries to be updated.
     *           Format:
     *           `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * TensorboardTimeSeries resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten if new
     * values are specified.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * TensorboardTimeSeries resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten if new
     * values are specified.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. The TensorboardTimeSeries' `name` field is used to identify the
     * TensorboardTimeSeries to be updated.
     * Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardTimeSeries tensorboard_time_series = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\TensorboardTimeSeries|null
     */
    public function getTensorboardTimeSeries()
    {
        return $this->tensorboard_time_series;
    }

    public function hasTensorboardTimeSeries()
    {
        return isset($this->tensorboard_time_series);
    }

    public function clearTensorboardTimeSeries()
    {
        unset($this->tensorboard_time_series);
    }

    /**
     * Required. The TensorboardTimeSeries' `name` field is used to identify the
     * TensorboardTimeSeries to be updated.
     * Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardTimeSeries tensorboard_time_series = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\TensorboardTimeSeries $var
     * @return $this
     */
    public function setTensorboardTimeSeries($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\TensorboardTimeSeries::class);
        $this->tensorboard_time_series = $var;

        return $this;
    }

}

