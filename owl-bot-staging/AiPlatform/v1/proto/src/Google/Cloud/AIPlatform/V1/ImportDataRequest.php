<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/dataset_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [DatasetService.ImportData][google.cloud.aiplatform.v1.DatasetService.ImportData].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ImportDataRequest</code>
 */
class ImportDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Dataset resource.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The desired input locations. The contents of all input locations will be
     * imported in one batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ImportDataConfig import_configs = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $import_configs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the Dataset resource.
     *           Format:
     *           `projects/{project}/locations/{location}/datasets/{dataset}`
     *     @type array<\Google\Cloud\AIPlatform\V1\ImportDataConfig>|\Google\Protobuf\Internal\RepeatedField $import_configs
     *           Required. The desired input locations. The contents of all input locations will be
     *           imported in one batch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DatasetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Dataset resource.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the Dataset resource.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The desired input locations. The contents of all input locations will be
     * imported in one batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ImportDataConfig import_configs = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImportConfigs()
    {
        return $this->import_configs;
    }

    /**
     * Required. The desired input locations. The contents of all input locations will be
     * imported in one batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ImportDataConfig import_configs = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\ImportDataConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImportConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\ImportDataConfig::class);
        $this->import_configs = $arr;

        return $this;
    }

}

