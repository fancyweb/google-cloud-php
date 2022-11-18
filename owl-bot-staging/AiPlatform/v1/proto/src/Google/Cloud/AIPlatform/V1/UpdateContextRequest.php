<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/metadata_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [MetadataService.UpdateContext][google.cloud.aiplatform.v1.MetadataService.UpdateContext].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UpdateContextRequest</code>
 */
class UpdateContextRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Context containing updates.
     * The Context's [Context.name][google.cloud.aiplatform.v1.Context.name] field is used to identify the Context to be
     * updated.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Context context = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $context = null;
    /**
     * Optional. A FieldMask indicating which fields should be updated.
     * Functionality of this field is not yet supported.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;
    /**
     * If set to true, and the [Context][google.cloud.aiplatform.v1.Context] is not found, a new [Context][google.cloud.aiplatform.v1.Context] is
     * created.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     */
    protected $allow_missing = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\Context $context
     *           Required. The Context containing updates.
     *           The Context's [Context.name][google.cloud.aiplatform.v1.Context.name] field is used to identify the Context to be
     *           updated.
     *           Format:
     *           `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. A FieldMask indicating which fields should be updated.
     *           Functionality of this field is not yet supported.
     *     @type bool $allow_missing
     *           If set to true, and the [Context][google.cloud.aiplatform.v1.Context] is not found, a new [Context][google.cloud.aiplatform.v1.Context] is
     *           created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MetadataService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Context containing updates.
     * The Context's [Context.name][google.cloud.aiplatform.v1.Context.name] field is used to identify the Context to be
     * updated.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Context context = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\Context|null
     */
    public function getContext()
    {
        return $this->context;
    }

    public function hasContext()
    {
        return isset($this->context);
    }

    public function clearContext()
    {
        unset($this->context);
    }

    /**
     * Required. The Context containing updates.
     * The Context's [Context.name][google.cloud.aiplatform.v1.Context.name] field is used to identify the Context to be
     * updated.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Context context = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\Context $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Context::class);
        $this->context = $var;

        return $this;
    }

    /**
     * Optional. A FieldMask indicating which fields should be updated.
     * Functionality of this field is not yet supported.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. A FieldMask indicating which fields should be updated.
     * Functionality of this field is not yet supported.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * If set to true, and the [Context][google.cloud.aiplatform.v1.Context] is not found, a new [Context][google.cloud.aiplatform.v1.Context] is
     * created.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @return bool
     */
    public function getAllowMissing()
    {
        return $this->allow_missing;
    }

    /**
     * If set to true, and the [Context][google.cloud.aiplatform.v1.Context] is not found, a new [Context][google.cloud.aiplatform.v1.Context] is
     * created.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
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

