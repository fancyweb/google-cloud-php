<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/annotation_payload.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains annotation information that is relevant to AutoML.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.AnnotationPayload</code>
 */
class AnnotationPayload extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only . The resource ID of the annotation spec that
     * this annotation pertains to. The annotation spec comes from either an
     * ancestor dataset, or the dataset that was used to train the model in use.
     *
     * Generated from protobuf field <code>string annotation_spec_id = 1;</code>
     */
    protected $annotation_spec_id = '';
    /**
     * Output only. The value of
     * [display_name][google.cloud.automl.v1beta1.AnnotationSpec.display_name]
     * when the model was trained. Because this field returns a value at model
     * training time, for different models trained using the same dataset, the
     * returned value could be different as model owner could update the
     * `display_name` between any two model training.
     *
     * Generated from protobuf field <code>string display_name = 5;</code>
     */
    protected $display_name = '';
    protected $detail;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoMl\V1beta1\TranslationAnnotation $translation
     *           Annotation details for translation.
     *     @type \Google\Cloud\AutoMl\V1beta1\ClassificationAnnotation $classification
     *           Annotation details for content or image classification.
     *     @type \Google\Cloud\AutoMl\V1beta1\ImageObjectDetectionAnnotation $image_object_detection
     *           Annotation details for image object detection.
     *     @type \Google\Cloud\AutoMl\V1beta1\VideoClassificationAnnotation $video_classification
     *           Annotation details for video classification.
     *           Returned for Video Classification predictions.
     *     @type \Google\Cloud\AutoMl\V1beta1\VideoObjectTrackingAnnotation $video_object_tracking
     *           Annotation details for video object tracking.
     *     @type \Google\Cloud\AutoMl\V1beta1\TextExtractionAnnotation $text_extraction
     *           Annotation details for text extraction.
     *     @type \Google\Cloud\AutoMl\V1beta1\TextSentimentAnnotation $text_sentiment
     *           Annotation details for text sentiment.
     *     @type \Google\Cloud\AutoMl\V1beta1\TablesAnnotation $tables
     *           Annotation details for Tables.
     *     @type string $annotation_spec_id
     *           Output only . The resource ID of the annotation spec that
     *           this annotation pertains to. The annotation spec comes from either an
     *           ancestor dataset, or the dataset that was used to train the model in use.
     *     @type string $display_name
     *           Output only. The value of
     *           [display_name][google.cloud.automl.v1beta1.AnnotationSpec.display_name]
     *           when the model was trained. Because this field returns a value at model
     *           training time, for different models trained using the same dataset, the
     *           returned value could be different as model owner could update the
     *           `display_name` between any two model training.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\AnnotationPayload::initOnce();
        parent::__construct($data);
    }

    /**
     * Annotation details for translation.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TranslationAnnotation translation = 2;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\TranslationAnnotation|null
     */
    public function getTranslation()
    {
        return $this->readOneof(2);
    }

    public function hasTranslation()
    {
        return $this->hasOneof(2);
    }

    /**
     * Annotation details for translation.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TranslationAnnotation translation = 2;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\TranslationAnnotation $var
     * @return $this
     */
    public function setTranslation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\TranslationAnnotation::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Annotation details for content or image classification.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.ClassificationAnnotation classification = 3;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\ClassificationAnnotation|null
     */
    public function getClassification()
    {
        return $this->readOneof(3);
    }

    public function hasClassification()
    {
        return $this->hasOneof(3);
    }

    /**
     * Annotation details for content or image classification.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.ClassificationAnnotation classification = 3;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\ClassificationAnnotation $var
     * @return $this
     */
    public function setClassification($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\ClassificationAnnotation::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Annotation details for image object detection.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.ImageObjectDetectionAnnotation image_object_detection = 4;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\ImageObjectDetectionAnnotation|null
     */
    public function getImageObjectDetection()
    {
        return $this->readOneof(4);
    }

    public function hasImageObjectDetection()
    {
        return $this->hasOneof(4);
    }

    /**
     * Annotation details for image object detection.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.ImageObjectDetectionAnnotation image_object_detection = 4;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\ImageObjectDetectionAnnotation $var
     * @return $this
     */
    public function setImageObjectDetection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\ImageObjectDetectionAnnotation::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Annotation details for video classification.
     * Returned for Video Classification predictions.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.VideoClassificationAnnotation video_classification = 9;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\VideoClassificationAnnotation|null
     */
    public function getVideoClassification()
    {
        return $this->readOneof(9);
    }

    public function hasVideoClassification()
    {
        return $this->hasOneof(9);
    }

    /**
     * Annotation details for video classification.
     * Returned for Video Classification predictions.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.VideoClassificationAnnotation video_classification = 9;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\VideoClassificationAnnotation $var
     * @return $this
     */
    public function setVideoClassification($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\VideoClassificationAnnotation::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Annotation details for video object tracking.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.VideoObjectTrackingAnnotation video_object_tracking = 8;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\VideoObjectTrackingAnnotation|null
     */
    public function getVideoObjectTracking()
    {
        return $this->readOneof(8);
    }

    public function hasVideoObjectTracking()
    {
        return $this->hasOneof(8);
    }

    /**
     * Annotation details for video object tracking.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.VideoObjectTrackingAnnotation video_object_tracking = 8;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\VideoObjectTrackingAnnotation $var
     * @return $this
     */
    public function setVideoObjectTracking($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\VideoObjectTrackingAnnotation::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Annotation details for text extraction.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TextExtractionAnnotation text_extraction = 6;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\TextExtractionAnnotation|null
     */
    public function getTextExtraction()
    {
        return $this->readOneof(6);
    }

    public function hasTextExtraction()
    {
        return $this->hasOneof(6);
    }

    /**
     * Annotation details for text extraction.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TextExtractionAnnotation text_extraction = 6;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\TextExtractionAnnotation $var
     * @return $this
     */
    public function setTextExtraction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\TextExtractionAnnotation::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Annotation details for text sentiment.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TextSentimentAnnotation text_sentiment = 7;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\TextSentimentAnnotation|null
     */
    public function getTextSentiment()
    {
        return $this->readOneof(7);
    }

    public function hasTextSentiment()
    {
        return $this->hasOneof(7);
    }

    /**
     * Annotation details for text sentiment.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TextSentimentAnnotation text_sentiment = 7;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\TextSentimentAnnotation $var
     * @return $this
     */
    public function setTextSentiment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\TextSentimentAnnotation::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Annotation details for Tables.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TablesAnnotation tables = 10;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\TablesAnnotation|null
     */
    public function getTables()
    {
        return $this->readOneof(10);
    }

    public function hasTables()
    {
        return $this->hasOneof(10);
    }

    /**
     * Annotation details for Tables.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TablesAnnotation tables = 10;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\TablesAnnotation $var
     * @return $this
     */
    public function setTables($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\TablesAnnotation::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Output only . The resource ID of the annotation spec that
     * this annotation pertains to. The annotation spec comes from either an
     * ancestor dataset, or the dataset that was used to train the model in use.
     *
     * Generated from protobuf field <code>string annotation_spec_id = 1;</code>
     * @return string
     */
    public function getAnnotationSpecId()
    {
        return $this->annotation_spec_id;
    }

    /**
     * Output only . The resource ID of the annotation spec that
     * this annotation pertains to. The annotation spec comes from either an
     * ancestor dataset, or the dataset that was used to train the model in use.
     *
     * Generated from protobuf field <code>string annotation_spec_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAnnotationSpecId($var)
    {
        GPBUtil::checkString($var, True);
        $this->annotation_spec_id = $var;

        return $this;
    }

    /**
     * Output only. The value of
     * [display_name][google.cloud.automl.v1beta1.AnnotationSpec.display_name]
     * when the model was trained. Because this field returns a value at model
     * training time, for different models trained using the same dataset, the
     * returned value could be different as model owner could update the
     * `display_name` between any two model training.
     *
     * Generated from protobuf field <code>string display_name = 5;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Output only. The value of
     * [display_name][google.cloud.automl.v1beta1.AnnotationSpec.display_name]
     * when the model was trained. Because this field returns a value at model
     * training time, for different models trained using the same dataset, the
     * returned value could be different as model owner could update the
     * `display_name` between any two model training.
     *
     * Generated from protobuf field <code>string display_name = 5;</code>
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
     * @return string
     */
    public function getDetail()
    {
        return $this->whichOneof("detail");
    }

}

