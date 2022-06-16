<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DeidentifyTemplates contains instructions on how to de-identify content.
 * See https://cloud.google.com/dlp/docs/concepts-templates to learn more.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DeidentifyTemplate</code>
 */
class DeidentifyTemplate extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The template name.
     * The template will have one of the following formats:
     * `projects/PROJECT_ID/deidentifyTemplates/TEMPLATE_ID` OR
     * `organizations/ORGANIZATION_ID/deidentifyTemplates/TEMPLATE_ID`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Display name (max 256 chars).
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Short description (max 256 chars).
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * Output only. The creation timestamp of an inspectTemplate.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The last update timestamp of an inspectTemplate.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * The core content of the template.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyConfig deidentify_config = 6;</code>
     */
    protected $deidentify_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The template name.
     *           The template will have one of the following formats:
     *           `projects/PROJECT_ID/deidentifyTemplates/TEMPLATE_ID` OR
     *           `organizations/ORGANIZATION_ID/deidentifyTemplates/TEMPLATE_ID`
     *     @type string $display_name
     *           Display name (max 256 chars).
     *     @type string $description
     *           Short description (max 256 chars).
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The creation timestamp of an inspectTemplate.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last update timestamp of an inspectTemplate.
     *     @type \Google\Cloud\Dlp\V2\DeidentifyConfig $deidentify_config
     *           The core content of the template.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The template name.
     * The template will have one of the following formats:
     * `projects/PROJECT_ID/deidentifyTemplates/TEMPLATE_ID` OR
     * `organizations/ORGANIZATION_ID/deidentifyTemplates/TEMPLATE_ID`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The template name.
     * The template will have one of the following formats:
     * `projects/PROJECT_ID/deidentifyTemplates/TEMPLATE_ID` OR
     * `organizations/ORGANIZATION_ID/deidentifyTemplates/TEMPLATE_ID`
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
     * Display name (max 256 chars).
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Display name (max 256 chars).
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
     * Short description (max 256 chars).
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Short description (max 256 chars).
     *
     * Generated from protobuf field <code>string description = 3;</code>
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
     * Output only. The creation timestamp of an inspectTemplate.
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
     * Output only. The creation timestamp of an inspectTemplate.
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
     * Output only. The last update timestamp of an inspectTemplate.
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
     * Output only. The last update timestamp of an inspectTemplate.
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
     * The core content of the template.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyConfig deidentify_config = 6;</code>
     * @return \Google\Cloud\Dlp\V2\DeidentifyConfig|null
     */
    public function getDeidentifyConfig()
    {
        return $this->deidentify_config;
    }

    public function hasDeidentifyConfig()
    {
        return isset($this->deidentify_config);
    }

    public function clearDeidentifyConfig()
    {
        unset($this->deidentify_config);
    }

    /**
     * The core content of the template.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyConfig deidentify_config = 6;</code>
     * @param \Google\Cloud\Dlp\V2\DeidentifyConfig $var
     * @return $this
     */
    public function setDeidentifyConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DeidentifyConfig::class);
        $this->deidentify_config = $var;

        return $this;
    }

}

