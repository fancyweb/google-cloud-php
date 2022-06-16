<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A `Release` resource in the Google Cloud Deploy API.
 * A `Release` defines a specific Skaffold configuration instance
 * that can be deployed.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.Release</code>
 */
class Release extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Name of the `Release`. Format is projects/{project}/
     * locations/{location}/deliveryPipelines/{deliveryPipeline}/
     * releases/[a-z][a-z0-9\-]{0,62}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $name = '';
    /**
     * Output only. Unique identifier of the `Release`.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Description of the `Release`. Max length is 255 characters.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * User annotations. These attributes can only be set and used by the
     * user, and not by Google Cloud Deploy. See
     * https://google.aip.dev/128#annotations for more details such as format and
     * size limitations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 4;</code>
     */
    private $annotations;
    /**
     * Labels are attributes that can be set and used by both the
     * user and by Google Cloud Deploy. Labels must meet the following
     * constraints:
     * * Keys and values can contain only lowercase letters, numeric characters,
     * underscores, and dashes.
     * * All characters must use UTF-8 encoding, and international characters are
     * allowed.
     * * Keys must start with a lowercase letter or international character.
     * * Each resource is limited to a maximum of 64 labels.
     * Both keys and values are additionally constrained to be <= 128 bytes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
     */
    private $labels;
    /**
     * Output only. Time at which the `Release` was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Time at which the render began.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp render_start_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $render_start_time = null;
    /**
     * Output only. Time at which the render completed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp render_end_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $render_end_time = null;
    /**
     * Cloud Storage URI of tar.gz archive containing Skaffold configuration.
     *
     * Generated from protobuf field <code>string skaffold_config_uri = 17;</code>
     */
    protected $skaffold_config_uri = '';
    /**
     * Filepath of the Skaffold config inside of the config URI.
     *
     * Generated from protobuf field <code>string skaffold_config_path = 9;</code>
     */
    protected $skaffold_config_path = '';
    /**
     * List of artifacts to pass through to Skaffold command.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.BuildArtifact build_artifacts = 10;</code>
     */
    private $build_artifacts;
    /**
     * Output only. Snapshot of the parent pipeline taken at release creation time.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeliveryPipeline delivery_pipeline_snapshot = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $delivery_pipeline_snapshot = null;
    /**
     * Output only. Snapshot of the targets taken at release creation time.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.Target target_snapshots = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $target_snapshots;
    /**
     * Output only. Current state of the render operation.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Release.RenderState render_state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $render_state = 0;
    /**
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 16;</code>
     */
    protected $etag = '';
    /**
     * The Skaffold version to use when operating on this release, such as
     * "1.20.0". Not all versions are valid; Google Cloud Deploy supports a
     * specific set of versions.
     * If unset, the most recent supported Skaffold version will be used.
     *
     * Generated from protobuf field <code>string skaffold_version = 19;</code>
     */
    protected $skaffold_version = '';
    /**
     * Output only. Map from target ID to the target artifacts created
     * during the render operation.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.deploy.v1.TargetArtifact> target_artifacts = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $target_artifacts;
    /**
     * Output only. Map from target ID to details of the render operation for that target.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.deploy.v1.Release.TargetRender> target_renders = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $target_renders;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. Name of the `Release`. Format is projects/{project}/
     *           locations/{location}/deliveryPipelines/{deliveryPipeline}/
     *           releases/[a-z][a-z0-9\-]{0,62}.
     *     @type string $uid
     *           Output only. Unique identifier of the `Release`.
     *     @type string $description
     *           Description of the `Release`. Max length is 255 characters.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           User annotations. These attributes can only be set and used by the
     *           user, and not by Google Cloud Deploy. See
     *           https://google.aip.dev/128#annotations for more details such as format and
     *           size limitations.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels are attributes that can be set and used by both the
     *           user and by Google Cloud Deploy. Labels must meet the following
     *           constraints:
     *           * Keys and values can contain only lowercase letters, numeric characters,
     *           underscores, and dashes.
     *           * All characters must use UTF-8 encoding, and international characters are
     *           allowed.
     *           * Keys must start with a lowercase letter or international character.
     *           * Each resource is limited to a maximum of 64 labels.
     *           Both keys and values are additionally constrained to be <= 128 bytes.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time at which the `Release` was created.
     *     @type \Google\Protobuf\Timestamp $render_start_time
     *           Output only. Time at which the render began.
     *     @type \Google\Protobuf\Timestamp $render_end_time
     *           Output only. Time at which the render completed.
     *     @type string $skaffold_config_uri
     *           Cloud Storage URI of tar.gz archive containing Skaffold configuration.
     *     @type string $skaffold_config_path
     *           Filepath of the Skaffold config inside of the config URI.
     *     @type \Google\Cloud\Deploy\V1\BuildArtifact[]|\Google\Protobuf\Internal\RepeatedField $build_artifacts
     *           List of artifacts to pass through to Skaffold command.
     *     @type \Google\Cloud\Deploy\V1\DeliveryPipeline $delivery_pipeline_snapshot
     *           Output only. Snapshot of the parent pipeline taken at release creation time.
     *     @type \Google\Cloud\Deploy\V1\Target[]|\Google\Protobuf\Internal\RepeatedField $target_snapshots
     *           Output only. Snapshot of the targets taken at release creation time.
     *     @type int $render_state
     *           Output only. Current state of the render operation.
     *     @type string $etag
     *           This checksum is computed by the server based on the value of other
     *           fields, and may be sent on update and delete requests to ensure the
     *           client has an up-to-date value before proceeding.
     *     @type string $skaffold_version
     *           The Skaffold version to use when operating on this release, such as
     *           "1.20.0". Not all versions are valid; Google Cloud Deploy supports a
     *           specific set of versions.
     *           If unset, the most recent supported Skaffold version will be used.
     *     @type array|\Google\Protobuf\Internal\MapField $target_artifacts
     *           Output only. Map from target ID to the target artifacts created
     *           during the render operation.
     *     @type array|\Google\Protobuf\Internal\MapField $target_renders
     *           Output only. Map from target ID to details of the render operation for that target.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Name of the `Release`. Format is projects/{project}/
     * locations/{location}/deliveryPipelines/{deliveryPipeline}/
     * releases/[a-z][a-z0-9\-]{0,62}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. Name of the `Release`. Format is projects/{project}/
     * locations/{location}/deliveryPipelines/{deliveryPipeline}/
     * releases/[a-z][a-z0-9\-]{0,62}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Output only. Unique identifier of the `Release`.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. Unique identifier of the `Release`.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Description of the `Release`. Max length is 255 characters.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the `Release`. Max length is 255 characters.
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
     * User annotations. These attributes can only be set and used by the
     * user, and not by Google Cloud Deploy. See
     * https://google.aip.dev/128#annotations for more details such as format and
     * size limitations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * User annotations. These attributes can only be set and used by the
     * user, and not by Google Cloud Deploy. See
     * https://google.aip.dev/128#annotations for more details such as format and
     * size limitations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Labels are attributes that can be set and used by both the
     * user and by Google Cloud Deploy. Labels must meet the following
     * constraints:
     * * Keys and values can contain only lowercase letters, numeric characters,
     * underscores, and dashes.
     * * All characters must use UTF-8 encoding, and international characters are
     * allowed.
     * * Keys must start with a lowercase letter or international character.
     * * Each resource is limited to a maximum of 64 labels.
     * Both keys and values are additionally constrained to be <= 128 bytes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels are attributes that can be set and used by both the
     * user and by Google Cloud Deploy. Labels must meet the following
     * constraints:
     * * Keys and values can contain only lowercase letters, numeric characters,
     * underscores, and dashes.
     * * All characters must use UTF-8 encoding, and international characters are
     * allowed.
     * * Keys must start with a lowercase letter or international character.
     * * Each resource is limited to a maximum of 64 labels.
     * Both keys and values are additionally constrained to be <= 128 bytes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
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
     * Output only. Time at which the `Release` was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time at which the `Release` was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time at which the render began.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp render_start_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getRenderStartTime()
    {
        return $this->render_start_time;
    }

    public function hasRenderStartTime()
    {
        return isset($this->render_start_time);
    }

    public function clearRenderStartTime()
    {
        unset($this->render_start_time);
    }

    /**
     * Output only. Time at which the render began.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp render_start_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRenderStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->render_start_time = $var;

        return $this;
    }

    /**
     * Output only. Time at which the render completed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp render_end_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getRenderEndTime()
    {
        return $this->render_end_time;
    }

    public function hasRenderEndTime()
    {
        return isset($this->render_end_time);
    }

    public function clearRenderEndTime()
    {
        unset($this->render_end_time);
    }

    /**
     * Output only. Time at which the render completed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp render_end_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRenderEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->render_end_time = $var;

        return $this;
    }

    /**
     * Cloud Storage URI of tar.gz archive containing Skaffold configuration.
     *
     * Generated from protobuf field <code>string skaffold_config_uri = 17;</code>
     * @return string
     */
    public function getSkaffoldConfigUri()
    {
        return $this->skaffold_config_uri;
    }

    /**
     * Cloud Storage URI of tar.gz archive containing Skaffold configuration.
     *
     * Generated from protobuf field <code>string skaffold_config_uri = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setSkaffoldConfigUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->skaffold_config_uri = $var;

        return $this;
    }

    /**
     * Filepath of the Skaffold config inside of the config URI.
     *
     * Generated from protobuf field <code>string skaffold_config_path = 9;</code>
     * @return string
     */
    public function getSkaffoldConfigPath()
    {
        return $this->skaffold_config_path;
    }

    /**
     * Filepath of the Skaffold config inside of the config URI.
     *
     * Generated from protobuf field <code>string skaffold_config_path = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setSkaffoldConfigPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->skaffold_config_path = $var;

        return $this;
    }

    /**
     * List of artifacts to pass through to Skaffold command.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.BuildArtifact build_artifacts = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuildArtifacts()
    {
        return $this->build_artifacts;
    }

    /**
     * List of artifacts to pass through to Skaffold command.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.BuildArtifact build_artifacts = 10;</code>
     * @param \Google\Cloud\Deploy\V1\BuildArtifact[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuildArtifacts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Deploy\V1\BuildArtifact::class);
        $this->build_artifacts = $arr;

        return $this;
    }

    /**
     * Output only. Snapshot of the parent pipeline taken at release creation time.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeliveryPipeline delivery_pipeline_snapshot = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\DeliveryPipeline|null
     */
    public function getDeliveryPipelineSnapshot()
    {
        return $this->delivery_pipeline_snapshot;
    }

    public function hasDeliveryPipelineSnapshot()
    {
        return isset($this->delivery_pipeline_snapshot);
    }

    public function clearDeliveryPipelineSnapshot()
    {
        unset($this->delivery_pipeline_snapshot);
    }

    /**
     * Output only. Snapshot of the parent pipeline taken at release creation time.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeliveryPipeline delivery_pipeline_snapshot = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\DeliveryPipeline $var
     * @return $this
     */
    public function setDeliveryPipelineSnapshot($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\DeliveryPipeline::class);
        $this->delivery_pipeline_snapshot = $var;

        return $this;
    }

    /**
     * Output only. Snapshot of the targets taken at release creation time.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.Target target_snapshots = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargetSnapshots()
    {
        return $this->target_snapshots;
    }

    /**
     * Output only. Snapshot of the targets taken at release creation time.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.Target target_snapshots = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\Target[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTargetSnapshots($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Deploy\V1\Target::class);
        $this->target_snapshots = $arr;

        return $this;
    }

    /**
     * Output only. Current state of the render operation.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Release.RenderState render_state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getRenderState()
    {
        return $this->render_state;
    }

    /**
     * Output only. Current state of the render operation.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Release.RenderState render_state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setRenderState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Deploy\V1\Release\RenderState::class);
        $this->render_state = $var;

        return $this;
    }

    /**
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 16;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 16;</code>
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
     * The Skaffold version to use when operating on this release, such as
     * "1.20.0". Not all versions are valid; Google Cloud Deploy supports a
     * specific set of versions.
     * If unset, the most recent supported Skaffold version will be used.
     *
     * Generated from protobuf field <code>string skaffold_version = 19;</code>
     * @return string
     */
    public function getSkaffoldVersion()
    {
        return $this->skaffold_version;
    }

    /**
     * The Skaffold version to use when operating on this release, such as
     * "1.20.0". Not all versions are valid; Google Cloud Deploy supports a
     * specific set of versions.
     * If unset, the most recent supported Skaffold version will be used.
     *
     * Generated from protobuf field <code>string skaffold_version = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setSkaffoldVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->skaffold_version = $var;

        return $this;
    }

    /**
     * Output only. Map from target ID to the target artifacts created
     * during the render operation.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.deploy.v1.TargetArtifact> target_artifacts = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTargetArtifacts()
    {
        return $this->target_artifacts;
    }

    /**
     * Output only. Map from target ID to the target artifacts created
     * during the render operation.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.deploy.v1.TargetArtifact> target_artifacts = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTargetArtifacts($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Deploy\V1\TargetArtifact::class);
        $this->target_artifacts = $arr;

        return $this;
    }

    /**
     * Output only. Map from target ID to details of the render operation for that target.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.deploy.v1.Release.TargetRender> target_renders = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTargetRenders()
    {
        return $this->target_renders;
    }

    /**
     * Output only. Map from target ID to details of the render operation for that target.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.deploy.v1.Release.TargetRender> target_renders = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTargetRenders($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Deploy\V1\Release\TargetRender::class);
        $this->target_renders = $arr;

        return $this;
    }

}

