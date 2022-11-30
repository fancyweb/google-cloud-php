<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Set of detected objects with bounding boxes.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.LocalizedObjectAnnotation</code>
 */
class LocalizedObjectAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Object ID that should align with EntityAnnotation mid.
     *
     * Generated from protobuf field <code>string mid = 1;</code>
     */
    protected $mid = '';
    /**
     * The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     * information, see
     * http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     */
    protected $language_code = '';
    /**
     * Object name, expressed in its `language_code` language.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    protected $name = '';
    /**
     * Score of the result. Range [0, 1].
     *
     * Generated from protobuf field <code>float score = 4;</code>
     */
    protected $score = 0.0;
    /**
     * Image region to which this object belongs. This must be populated.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 5;</code>
     */
    protected $bounding_poly = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $mid
     *           Object ID that should align with EntityAnnotation mid.
     *     @type string $language_code
     *           The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     *           information, see
     *           http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *     @type string $name
     *           Object name, expressed in its `language_code` language.
     *     @type float $score
     *           Score of the result. Range [0, 1].
     *     @type \Google\Cloud\Vision\V1\BoundingPoly $bounding_poly
     *           Image region to which this object belongs. This must be populated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * Object ID that should align with EntityAnnotation mid.
     *
     * Generated from protobuf field <code>string mid = 1;</code>
     * @return string
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * Object ID that should align with EntityAnnotation mid.
     *
     * Generated from protobuf field <code>string mid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMid($var)
    {
        GPBUtil::checkString($var, True);
        $this->mid = $var;

        return $this;
    }

    /**
     * The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     * information, see
     * http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     * information, see
     * http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Object name, expressed in its `language_code` language.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Object name, expressed in its `language_code` language.
     *
     * Generated from protobuf field <code>string name = 3;</code>
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
     * Score of the result. Range [0, 1].
     *
     * Generated from protobuf field <code>float score = 4;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Score of the result. Range [0, 1].
     *
     * Generated from protobuf field <code>float score = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

    /**
     * Image region to which this object belongs. This must be populated.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 5;</code>
     * @return \Google\Cloud\Vision\V1\BoundingPoly|null
     */
    public function getBoundingPoly()
    {
        return $this->bounding_poly;
    }

    public function hasBoundingPoly()
    {
        return isset($this->bounding_poly);
    }

    public function clearBoundingPoly()
    {
        unset($this->bounding_poly);
    }

    /**
     * Image region to which this object belongs. This must be populated.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 5;</code>
     * @param \Google\Cloud\Vision\V1\BoundingPoly $var
     * @return $this
     */
    public function setBoundingPoly($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\BoundingPoly::class);
        $this->bounding_poly = $var;

        return $this;
    }

}

