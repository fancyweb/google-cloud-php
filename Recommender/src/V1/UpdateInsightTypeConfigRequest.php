<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1/recommender_service.proto

namespace Google\Cloud\Recommender\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `UpdateInsightTypeConfig` method.
 *
 * Generated from protobuf message <code>google.cloud.recommender.v1.UpdateInsightTypeConfigRequest</code>
 */
class UpdateInsightTypeConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The InsightTypeConfig to update.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.InsightTypeConfig insight_type_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $insight_type_config = null;
    /**
     * The list of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;
    /**
     * If true, validate the request and preview the change, but do not actually
     * update it.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     */
    private $validate_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Recommender\V1\InsightTypeConfig $insight_type_config
     *           Required. The InsightTypeConfig to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The list of fields to be updated.
     *     @type bool $validate_only
     *           If true, validate the request and preview the change, but do not actually
     *           update it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommender\V1\RecommenderService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The InsightTypeConfig to update.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.InsightTypeConfig insight_type_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Recommender\V1\InsightTypeConfig|null
     */
    public function getInsightTypeConfig()
    {
        return $this->insight_type_config;
    }

    public function hasInsightTypeConfig()
    {
        return isset($this->insight_type_config);
    }

    public function clearInsightTypeConfig()
    {
        unset($this->insight_type_config);
    }

    /**
     * Required. The InsightTypeConfig to update.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.InsightTypeConfig insight_type_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Recommender\V1\InsightTypeConfig $var
     * @return $this
     */
    public function setInsightTypeConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Recommender\V1\InsightTypeConfig::class);
        $this->insight_type_config = $var;

        return $this;
    }

    /**
     * The list of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
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
     * The list of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
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
     * If true, validate the request and preview the change, but do not actually
     * update it.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If true, validate the request and preview the change, but do not actually
     * update it.
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

}

