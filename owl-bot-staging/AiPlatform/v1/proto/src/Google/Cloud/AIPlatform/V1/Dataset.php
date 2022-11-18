<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/dataset.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of DataItems and Annotations on them.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Dataset</code>
 */
class Dataset extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the Dataset.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Required. The user-defined name of the Dataset.
     * The name can be up to 128 characters long and can be consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Optional. The description of the Dataset.
     *
     * Generated from protobuf field <code>string description = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Required. Points to a YAML file stored on Google Cloud Storage describing additional
     * information about the Dataset.
     * The schema is defined as an OpenAPI 3.0.2 Schema Object.
     * The schema files that can be used here are found in
     * gs://google-cloud-aiplatform/schema/dataset/metadata/.
     *
     * Generated from protobuf field <code>string metadata_schema_uri = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $metadata_schema_uri = '';
    /**
     * Required. Additional information about the Dataset.
     *
     * Generated from protobuf field <code>.google.protobuf.Value metadata = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $metadata = null;
    /**
     * Output only. Timestamp when this Dataset was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Timestamp when this Dataset was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Used to perform consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     */
    protected $etag = '';
    /**
     * The labels with user-defined metadata to organize your Datasets.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * No more than 64 user labels can be associated with one Dataset (System
     * labels are excluded).
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable. Following system labels exist for each Dataset:
     * * "aiplatform.googleapis.com/dataset_metadata_schema": output only, its
     *   value is the [metadata_schema's][google.cloud.aiplatform.v1.Dataset.metadata_schema_uri] title.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     */
    private $labels;
    /**
     * Customer-managed encryption key spec for a Dataset. If set, this Dataset
     * and all sub-resources of this Dataset will be secured by this key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 11;</code>
     */
    protected $encryption_spec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the Dataset.
     *     @type string $display_name
     *           Required. The user-defined name of the Dataset.
     *           The name can be up to 128 characters long and can be consist of any UTF-8
     *           characters.
     *     @type string $description
     *           Optional. The description of the Dataset.
     *     @type string $metadata_schema_uri
     *           Required. Points to a YAML file stored on Google Cloud Storage describing additional
     *           information about the Dataset.
     *           The schema is defined as an OpenAPI 3.0.2 Schema Object.
     *           The schema files that can be used here are found in
     *           gs://google-cloud-aiplatform/schema/dataset/metadata/.
     *     @type \Google\Protobuf\Value $metadata
     *           Required. Additional information about the Dataset.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when this Dataset was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp when this Dataset was last updated.
     *     @type string $etag
     *           Used to perform consistent read-modify-write updates. If not set, a blind
     *           "overwrite" update happens.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The labels with user-defined metadata to organize your Datasets.
     *           Label keys and values can be no longer than 64 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           No more than 64 user labels can be associated with one Dataset (System
     *           labels are excluded).
     *           See https://goo.gl/xmQnxf for more information and examples of labels.
     *           System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     *           and are immutable. Following system labels exist for each Dataset:
     *           * "aiplatform.googleapis.com/dataset_metadata_schema": output only, its
     *             value is the [metadata_schema's][google.cloud.aiplatform.v1.Dataset.metadata_schema_uri] title.
     *     @type \Google\Cloud\AIPlatform\V1\EncryptionSpec $encryption_spec
     *           Customer-managed encryption key spec for a Dataset. If set, this Dataset
     *           and all sub-resources of this Dataset will be secured by this key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Dataset::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the Dataset.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the Dataset.
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
     * Required. The user-defined name of the Dataset.
     * The name can be up to 128 characters long and can be consist of any UTF-8
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
     * Required. The user-defined name of the Dataset.
     * The name can be up to 128 characters long and can be consist of any UTF-8
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
     * Optional. The description of the Dataset.
     *
     * Generated from protobuf field <code>string description = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. The description of the Dataset.
     *
     * Generated from protobuf field <code>string description = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Required. Points to a YAML file stored on Google Cloud Storage describing additional
     * information about the Dataset.
     * The schema is defined as an OpenAPI 3.0.2 Schema Object.
     * The schema files that can be used here are found in
     * gs://google-cloud-aiplatform/schema/dataset/metadata/.
     *
     * Generated from protobuf field <code>string metadata_schema_uri = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getMetadataSchemaUri()
    {
        return $this->metadata_schema_uri;
    }

    /**
     * Required. Points to a YAML file stored on Google Cloud Storage describing additional
     * information about the Dataset.
     * The schema is defined as an OpenAPI 3.0.2 Schema Object.
     * The schema files that can be used here are found in
     * gs://google-cloud-aiplatform/schema/dataset/metadata/.
     *
     * Generated from protobuf field <code>string metadata_schema_uri = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setMetadataSchemaUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->metadata_schema_uri = $var;

        return $this;
    }

    /**
     * Required. Additional information about the Dataset.
     *
     * Generated from protobuf field <code>.google.protobuf.Value metadata = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Required. Additional information about the Dataset.
     *
     * Generated from protobuf field <code>.google.protobuf.Value metadata = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this Dataset was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this Dataset was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this Dataset was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this Dataset was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Used to perform consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Used to perform consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * The labels with user-defined metadata to organize your Datasets.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * No more than 64 user labels can be associated with one Dataset (System
     * labels are excluded).
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable. Following system labels exist for each Dataset:
     * * "aiplatform.googleapis.com/dataset_metadata_schema": output only, its
     *   value is the [metadata_schema's][google.cloud.aiplatform.v1.Dataset.metadata_schema_uri] title.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The labels with user-defined metadata to organize your Datasets.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * No more than 64 user labels can be associated with one Dataset (System
     * labels are excluded).
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable. Following system labels exist for each Dataset:
     * * "aiplatform.googleapis.com/dataset_metadata_schema": output only, its
     *   value is the [metadata_schema's][google.cloud.aiplatform.v1.Dataset.metadata_schema_uri] title.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
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
     * Customer-managed encryption key spec for a Dataset. If set, this Dataset
     * and all sub-resources of this Dataset will be secured by this key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 11;</code>
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
     * Customer-managed encryption key spec for a Dataset. If set, this Dataset
     * and all sub-resources of this Dataset will be secured by this key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 11;</code>
     * @param \Google\Cloud\AIPlatform\V1\EncryptionSpec $var
     * @return $this
     */
    public function setEncryptionSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\EncryptionSpec::class);
        $this->encryption_spec = $var;

        return $this;
    }

}

