<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/human_annotation_config.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config for video classification human labeling task.
 * Currently two types of video classification are supported:
 * 1. Assign labels on the entire video.
 * 2. Split the video into multiple video clips based on camera shot, and
 * assign labels on each video clip.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.VideoClassificationConfig</code>
 */
class VideoClassificationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The list of annotation spec set configs.
     * Since watching a video clip takes much longer time than an image, we
     * support label with multiple AnnotationSpecSet at the same time. Labels
     * in each AnnotationSpecSet will be shown in a group to contributors.
     * Contributors can select one or more (depending on whether to allow multi
     * label) from each group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.VideoClassificationConfig.AnnotationSpecSetConfig annotation_spec_set_configs = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $annotation_spec_set_configs;
    /**
     * Optional. Option to apply shot detection on the video.
     *
     * Generated from protobuf field <code>bool apply_shot_detection = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $apply_shot_detection = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DataLabeling\V1beta1\VideoClassificationConfig\AnnotationSpecSetConfig>|\Google\Protobuf\Internal\RepeatedField $annotation_spec_set_configs
     *           Required. The list of annotation spec set configs.
     *           Since watching a video clip takes much longer time than an image, we
     *           support label with multiple AnnotationSpecSet at the same time. Labels
     *           in each AnnotationSpecSet will be shown in a group to contributors.
     *           Contributors can select one or more (depending on whether to allow multi
     *           label) from each group.
     *     @type bool $apply_shot_detection
     *           Optional. Option to apply shot detection on the video.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\HumanAnnotationConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The list of annotation spec set configs.
     * Since watching a video clip takes much longer time than an image, we
     * support label with multiple AnnotationSpecSet at the same time. Labels
     * in each AnnotationSpecSet will be shown in a group to contributors.
     * Contributors can select one or more (depending on whether to allow multi
     * label) from each group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.VideoClassificationConfig.AnnotationSpecSetConfig annotation_spec_set_configs = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnnotationSpecSetConfigs()
    {
        return $this->annotation_spec_set_configs;
    }

    /**
     * Required. The list of annotation spec set configs.
     * Since watching a video clip takes much longer time than an image, we
     * support label with multiple AnnotationSpecSet at the same time. Labels
     * in each AnnotationSpecSet will be shown in a group to contributors.
     * Contributors can select one or more (depending on whether to allow multi
     * label) from each group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.VideoClassificationConfig.AnnotationSpecSetConfig annotation_spec_set_configs = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\DataLabeling\V1beta1\VideoClassificationConfig\AnnotationSpecSetConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAnnotationSpecSetConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataLabeling\V1beta1\VideoClassificationConfig\AnnotationSpecSetConfig::class);
        $this->annotation_spec_set_configs = $arr;

        return $this;
    }

    /**
     * Optional. Option to apply shot detection on the video.
     *
     * Generated from protobuf field <code>bool apply_shot_detection = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getApplyShotDetection()
    {
        return $this->apply_shot_detection;
    }

    /**
     * Optional. Option to apply shot detection on the video.
     *
     * Generated from protobuf field <code>bool apply_shot_detection = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setApplyShotDetection($var)
    {
        GPBUtil::checkBool($var);
        $this->apply_shot_detection = $var;

        return $this;
    }

}

