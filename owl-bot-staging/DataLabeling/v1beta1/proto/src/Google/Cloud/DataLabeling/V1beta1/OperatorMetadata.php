<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/annotation.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * General information useful for labels coming from contributors.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.OperatorMetadata</code>
 */
class OperatorMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Confidence score corresponding to a label. For examle, if 3 contributors
     * have answered the question and 2 of them agree on the final label, the
     * confidence score will be 0.67 (2/3).
     *
     * Generated from protobuf field <code>float score = 1;</code>
     */
    protected $score = 0.0;
    /**
     * The total number of contributors that answer this question.
     *
     * Generated from protobuf field <code>int32 total_votes = 2;</code>
     */
    protected $total_votes = 0;
    /**
     * The total number of contributors that choose this label.
     *
     * Generated from protobuf field <code>int32 label_votes = 3;</code>
     */
    protected $label_votes = 0;
    /**
     * Comments from contributors.
     *
     * Generated from protobuf field <code>repeated string comments = 4;</code>
     */
    private $comments;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $score
     *           Confidence score corresponding to a label. For examle, if 3 contributors
     *           have answered the question and 2 of them agree on the final label, the
     *           confidence score will be 0.67 (2/3).
     *     @type int $total_votes
     *           The total number of contributors that answer this question.
     *     @type int $label_votes
     *           The total number of contributors that choose this label.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $comments
     *           Comments from contributors.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Annotation::initOnce();
        parent::__construct($data);
    }

    /**
     * Confidence score corresponding to a label. For examle, if 3 contributors
     * have answered the question and 2 of them agree on the final label, the
     * confidence score will be 0.67 (2/3).
     *
     * Generated from protobuf field <code>float score = 1;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Confidence score corresponding to a label. For examle, if 3 contributors
     * have answered the question and 2 of them agree on the final label, the
     * confidence score will be 0.67 (2/3).
     *
     * Generated from protobuf field <code>float score = 1;</code>
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
     * The total number of contributors that answer this question.
     *
     * Generated from protobuf field <code>int32 total_votes = 2;</code>
     * @return int
     */
    public function getTotalVotes()
    {
        return $this->total_votes;
    }

    /**
     * The total number of contributors that answer this question.
     *
     * Generated from protobuf field <code>int32 total_votes = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalVotes($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_votes = $var;

        return $this;
    }

    /**
     * The total number of contributors that choose this label.
     *
     * Generated from protobuf field <code>int32 label_votes = 3;</code>
     * @return int
     */
    public function getLabelVotes()
    {
        return $this->label_votes;
    }

    /**
     * The total number of contributors that choose this label.
     *
     * Generated from protobuf field <code>int32 label_votes = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLabelVotes($var)
    {
        GPBUtil::checkInt32($var);
        $this->label_votes = $var;

        return $this;
    }

    /**
     * Comments from contributors.
     *
     * Generated from protobuf field <code>repeated string comments = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Comments from contributors.
     *
     * Generated from protobuf field <code>repeated string comments = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setComments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->comments = $arr;

        return $this;
    }

}

