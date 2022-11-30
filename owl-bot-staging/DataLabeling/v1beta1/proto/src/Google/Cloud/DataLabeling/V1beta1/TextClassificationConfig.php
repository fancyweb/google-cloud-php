<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/human_annotation_config.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config for text classification human labeling task.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.TextClassificationConfig</code>
 */
class TextClassificationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. If allow_multi_label is true, contributors are able to choose
     * multiple labels for one text segment.
     *
     * Generated from protobuf field <code>bool allow_multi_label = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $allow_multi_label = false;
    /**
     * Required. Annotation spec set resource name.
     *
     * Generated from protobuf field <code>string annotation_spec_set = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $annotation_spec_set = '';
    /**
     * Optional. Configs for sentiment selection.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.SentimentConfig sentiment_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $sentiment_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $allow_multi_label
     *           Optional. If allow_multi_label is true, contributors are able to choose
     *           multiple labels for one text segment.
     *     @type string $annotation_spec_set
     *           Required. Annotation spec set resource name.
     *     @type \Google\Cloud\DataLabeling\V1beta1\SentimentConfig $sentiment_config
     *           Optional. Configs for sentiment selection.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\HumanAnnotationConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. If allow_multi_label is true, contributors are able to choose
     * multiple labels for one text segment.
     *
     * Generated from protobuf field <code>bool allow_multi_label = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getAllowMultiLabel()
    {
        return $this->allow_multi_label;
    }

    /**
     * Optional. If allow_multi_label is true, contributors are able to choose
     * multiple labels for one text segment.
     *
     * Generated from protobuf field <code>bool allow_multi_label = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMultiLabel($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_multi_label = $var;

        return $this;
    }

    /**
     * Required. Annotation spec set resource name.
     *
     * Generated from protobuf field <code>string annotation_spec_set = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAnnotationSpecSet()
    {
        return $this->annotation_spec_set;
    }

    /**
     * Required. Annotation spec set resource name.
     *
     * Generated from protobuf field <code>string annotation_spec_set = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAnnotationSpecSet($var)
    {
        GPBUtil::checkString($var, True);
        $this->annotation_spec_set = $var;

        return $this;
    }

    /**
     * Optional. Configs for sentiment selection.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.SentimentConfig sentiment_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\SentimentConfig|null
     */
    public function getSentimentConfig()
    {
        return $this->sentiment_config;
    }

    public function hasSentimentConfig()
    {
        return isset($this->sentiment_config);
    }

    public function clearSentimentConfig()
    {
        unset($this->sentiment_config);
    }

    /**
     * Optional. Configs for sentiment selection.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.SentimentConfig sentiment_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\SentimentConfig $var
     * @return $this
     */
    public function setSentimentConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\SentimentConfig::class);
        $this->sentiment_config = $var;

        return $this;
    }

}

