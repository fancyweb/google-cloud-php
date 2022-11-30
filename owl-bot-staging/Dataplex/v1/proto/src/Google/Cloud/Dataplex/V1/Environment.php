<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/analyze.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Environment represents a user-visible compute infrastructure for analytics
 * within a lake.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Environment</code>
 */
class Environment extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The relative resource name of the environment, of the form:
     * projects/{project_id}/locations/{location_id}/lakes/{lake_id}/environment/{environment_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $display_name = '';
    /**
     * Output only. System generated globally unique ID for the environment. This ID will be
     * different if the environment is deleted and re-created with the same name.
     *
     * Generated from protobuf field <code>string uid = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Output only. Environment creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time when the environment was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. User defined labels for the environment.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Description of the environment.
     *
     * Generated from protobuf field <code>string description = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Output only. Current state of the environment.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Required. Infrastructure specification for the Environment.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment.InfrastructureSpec infrastructure_spec = 100 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $infrastructure_spec = null;
    /**
     * Optional. Configuration for sessions created for this environment.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment.SessionSpec session_spec = 101 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $session_spec = null;
    /**
     * Output only. Status of sessions created for this environment.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment.SessionStatus session_status = 102 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $session_status = null;
    /**
     * Output only. URI Endpoints to access sessions associated with the Environment.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment.Endpoints endpoints = 200 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $endpoints = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The relative resource name of the environment, of the form:
     *           projects/{project_id}/locations/{location_id}/lakes/{lake_id}/environment/{environment_id}
     *     @type string $display_name
     *           Optional. User friendly display name.
     *     @type string $uid
     *           Output only. System generated globally unique ID for the environment. This ID will be
     *           different if the environment is deleted and re-created with the same name.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Environment creation time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the environment was last updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. User defined labels for the environment.
     *     @type string $description
     *           Optional. Description of the environment.
     *     @type int $state
     *           Output only. Current state of the environment.
     *     @type \Google\Cloud\Dataplex\V1\Environment\InfrastructureSpec $infrastructure_spec
     *           Required. Infrastructure specification for the Environment.
     *     @type \Google\Cloud\Dataplex\V1\Environment\SessionSpec $session_spec
     *           Optional. Configuration for sessions created for this environment.
     *     @type \Google\Cloud\Dataplex\V1\Environment\SessionStatus $session_status
     *           Output only. Status of sessions created for this environment.
     *     @type \Google\Cloud\Dataplex\V1\Environment\Endpoints $endpoints
     *           Output only. URI Endpoints to access sessions associated with the Environment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Analyze::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The relative resource name of the environment, of the form:
     * projects/{project_id}/locations/{location_id}/lakes/{lake_id}/environment/{environment_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The relative resource name of the environment, of the form:
     * projects/{project_id}/locations/{location_id}/lakes/{lake_id}/environment/{environment_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Output only. System generated globally unique ID for the environment. This ID will be
     * different if the environment is deleted and re-created with the same name.
     *
     * Generated from protobuf field <code>string uid = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. System generated globally unique ID for the environment. This ID will be
     * different if the environment is deleted and re-created with the same name.
     *
     * Generated from protobuf field <code>string uid = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. Environment creation time.
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
     * Output only. Environment creation time.
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
     * Output only. The time when the environment was last updated.
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
     * Output only. The time when the environment was last updated.
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
     * Optional. User defined labels for the environment.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. User defined labels for the environment.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Description of the environment.
     *
     * Generated from protobuf field <code>string description = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the environment.
     *
     * Generated from protobuf field <code>string description = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Output only. Current state of the environment.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Current state of the environment.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Required. Infrastructure specification for the Environment.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment.InfrastructureSpec infrastructure_spec = 100 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\Environment\InfrastructureSpec|null
     */
    public function getInfrastructureSpec()
    {
        return $this->infrastructure_spec;
    }

    public function hasInfrastructureSpec()
    {
        return isset($this->infrastructure_spec);
    }

    public function clearInfrastructureSpec()
    {
        unset($this->infrastructure_spec);
    }

    /**
     * Required. Infrastructure specification for the Environment.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment.InfrastructureSpec infrastructure_spec = 100 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\Environment\InfrastructureSpec $var
     * @return $this
     */
    public function setInfrastructureSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Environment\InfrastructureSpec::class);
        $this->infrastructure_spec = $var;

        return $this;
    }

    /**
     * Optional. Configuration for sessions created for this environment.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment.SessionSpec session_spec = 101 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\Environment\SessionSpec|null
     */
    public function getSessionSpec()
    {
        return $this->session_spec;
    }

    public function hasSessionSpec()
    {
        return isset($this->session_spec);
    }

    public function clearSessionSpec()
    {
        unset($this->session_spec);
    }

    /**
     * Optional. Configuration for sessions created for this environment.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment.SessionSpec session_spec = 101 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\Environment\SessionSpec $var
     * @return $this
     */
    public function setSessionSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Environment\SessionSpec::class);
        $this->session_spec = $var;

        return $this;
    }

    /**
     * Output only. Status of sessions created for this environment.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment.SessionStatus session_status = 102 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\Environment\SessionStatus|null
     */
    public function getSessionStatus()
    {
        return $this->session_status;
    }

    public function hasSessionStatus()
    {
        return isset($this->session_status);
    }

    public function clearSessionStatus()
    {
        unset($this->session_status);
    }

    /**
     * Output only. Status of sessions created for this environment.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment.SessionStatus session_status = 102 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\Environment\SessionStatus $var
     * @return $this
     */
    public function setSessionStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Environment\SessionStatus::class);
        $this->session_status = $var;

        return $this;
    }

    /**
     * Output only. URI Endpoints to access sessions associated with the Environment.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment.Endpoints endpoints = 200 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\Environment\Endpoints|null
     */
    public function getEndpoints()
    {
        return $this->endpoints;
    }

    public function hasEndpoints()
    {
        return isset($this->endpoints);
    }

    public function clearEndpoints()
    {
        unset($this->endpoints);
    }

    /**
     * Output only. URI Endpoints to access sessions associated with the Environment.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment.Endpoints endpoints = 200 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\Environment\Endpoints $var
     * @return $this
     */
    public function setEndpoints($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Environment\Endpoints::class);
        $this->endpoints = $var;

        return $this;
    }

}

