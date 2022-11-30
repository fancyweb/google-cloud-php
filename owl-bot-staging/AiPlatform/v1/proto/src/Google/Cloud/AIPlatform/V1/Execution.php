<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/execution.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Instance of a general execution.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Execution</code>
 */
class Execution extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the Execution.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * User provided display name of the Execution.
     * May be up to 128 Unicode characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * The state of this Execution. This is a property of the Execution, and does
     * not imply or capture any ongoing process. This property is managed by
     * clients (such as Vertex AI Pipelines) and the system does not prescribe
     * or check the validity of state transitions.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Execution.State state = 6;</code>
     */
    protected $state = 0;
    /**
     * An eTag used to perform consistent read-modify-write updates. If not set, a
     * blind "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 9;</code>
     */
    protected $etag = '';
    /**
     * The labels with user-defined metadata to organize your Executions.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * No more than 64 user labels can be associated with one Execution (System
     * labels are excluded).
     *
     * Generated from protobuf field <code>map<string, string> labels = 10;</code>
     */
    private $labels;
    /**
     * Output only. Timestamp when this Execution was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Timestamp when this Execution was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * The title of the schema describing the metadata.
     * Schema title and version is expected to be registered in earlier Create
     * Schema calls. And both are used together as unique identifiers to identify
     * schemas within the local metadata store.
     *
     * Generated from protobuf field <code>string schema_title = 13;</code>
     */
    protected $schema_title = '';
    /**
     * The version of the schema in `schema_title` to use.
     * Schema title and version is expected to be registered in earlier Create
     * Schema calls. And both are used together as unique identifiers to identify
     * schemas within the local metadata store.
     *
     * Generated from protobuf field <code>string schema_version = 14;</code>
     */
    protected $schema_version = '';
    /**
     * Properties of the Execution.
     * Top level metadata keys' heading and trailing spaces will be trimmed.
     * The size of this field should not exceed 200KB.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 15;</code>
     */
    protected $metadata = null;
    /**
     * Description of the Execution
     *
     * Generated from protobuf field <code>string description = 16;</code>
     */
    protected $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the Execution.
     *     @type string $display_name
     *           User provided display name of the Execution.
     *           May be up to 128 Unicode characters.
     *     @type int $state
     *           The state of this Execution. This is a property of the Execution, and does
     *           not imply or capture any ongoing process. This property is managed by
     *           clients (such as Vertex AI Pipelines) and the system does not prescribe
     *           or check the validity of state transitions.
     *     @type string $etag
     *           An eTag used to perform consistent read-modify-write updates. If not set, a
     *           blind "overwrite" update happens.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The labels with user-defined metadata to organize your Executions.
     *           Label keys and values can be no longer than 64 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           No more than 64 user labels can be associated with one Execution (System
     *           labels are excluded).
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when this Execution was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp when this Execution was last updated.
     *     @type string $schema_title
     *           The title of the schema describing the metadata.
     *           Schema title and version is expected to be registered in earlier Create
     *           Schema calls. And both are used together as unique identifiers to identify
     *           schemas within the local metadata store.
     *     @type string $schema_version
     *           The version of the schema in `schema_title` to use.
     *           Schema title and version is expected to be registered in earlier Create
     *           Schema calls. And both are used together as unique identifiers to identify
     *           schemas within the local metadata store.
     *     @type \Google\Protobuf\Struct $metadata
     *           Properties of the Execution.
     *           Top level metadata keys' heading and trailing spaces will be trimmed.
     *           The size of this field should not exceed 200KB.
     *     @type string $description
     *           Description of the Execution
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Execution::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the Execution.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the Execution.
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
     * User provided display name of the Execution.
     * May be up to 128 Unicode characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * User provided display name of the Execution.
     * May be up to 128 Unicode characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
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
     * The state of this Execution. This is a property of the Execution, and does
     * not imply or capture any ongoing process. This property is managed by
     * clients (such as Vertex AI Pipelines) and the system does not prescribe
     * or check the validity of state transitions.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Execution.State state = 6;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The state of this Execution. This is a property of the Execution, and does
     * not imply or capture any ongoing process. This property is managed by
     * clients (such as Vertex AI Pipelines) and the system does not prescribe
     * or check the validity of state transitions.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Execution.State state = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\Execution\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * An eTag used to perform consistent read-modify-write updates. If not set, a
     * blind "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 9;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * An eTag used to perform consistent read-modify-write updates. If not set, a
     * blind "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 9;</code>
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
     * The labels with user-defined metadata to organize your Executions.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * No more than 64 user labels can be associated with one Execution (System
     * labels are excluded).
     *
     * Generated from protobuf field <code>map<string, string> labels = 10;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The labels with user-defined metadata to organize your Executions.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * No more than 64 user labels can be associated with one Execution (System
     * labels are excluded).
     *
     * Generated from protobuf field <code>map<string, string> labels = 10;</code>
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
     * Output only. Timestamp when this Execution was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this Execution was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this Execution was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this Execution was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * The title of the schema describing the metadata.
     * Schema title and version is expected to be registered in earlier Create
     * Schema calls. And both are used together as unique identifiers to identify
     * schemas within the local metadata store.
     *
     * Generated from protobuf field <code>string schema_title = 13;</code>
     * @return string
     */
    public function getSchemaTitle()
    {
        return $this->schema_title;
    }

    /**
     * The title of the schema describing the metadata.
     * Schema title and version is expected to be registered in earlier Create
     * Schema calls. And both are used together as unique identifiers to identify
     * schemas within the local metadata store.
     *
     * Generated from protobuf field <code>string schema_title = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setSchemaTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->schema_title = $var;

        return $this;
    }

    /**
     * The version of the schema in `schema_title` to use.
     * Schema title and version is expected to be registered in earlier Create
     * Schema calls. And both are used together as unique identifiers to identify
     * schemas within the local metadata store.
     *
     * Generated from protobuf field <code>string schema_version = 14;</code>
     * @return string
     */
    public function getSchemaVersion()
    {
        return $this->schema_version;
    }

    /**
     * The version of the schema in `schema_title` to use.
     * Schema title and version is expected to be registered in earlier Create
     * Schema calls. And both are used together as unique identifiers to identify
     * schemas within the local metadata store.
     *
     * Generated from protobuf field <code>string schema_version = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setSchemaVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->schema_version = $var;

        return $this;
    }

    /**
     * Properties of the Execution.
     * Top level metadata keys' heading and trailing spaces will be trimmed.
     * The size of this field should not exceed 200KB.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 15;</code>
     * @return \Google\Protobuf\Struct|null
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
     * Properties of the Execution.
     * Top level metadata keys' heading and trailing spaces will be trimmed.
     * The size of this field should not exceed 200KB.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 15;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Description of the Execution
     *
     * Generated from protobuf field <code>string description = 16;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the Execution
     *
     * Generated from protobuf field <code>string description = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

