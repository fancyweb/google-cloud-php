<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A locator for text. Indicates a particular part of the text of a request or
 * of an object referenced in the request.
 * For example, suppose the request field `text` contains:
 *   text: "The quick brown fox jumps over the lazy dog."
 * Then the locator:
 *   source: "text"
 *   start_position {
 *     line: 1
 *     column: 17
 *   }
 *   end_position {
 *     line: 1
 *     column: 19
 *   }
 * refers to the part of the text: "fox".
 *
 * Generated from protobuf message <code>google.monitoring.v3.TextLocator</code>
 */
class TextLocator extends \Google\Protobuf\Internal\Message
{
    /**
     * The source of the text. The source may be a field in the request, in which
     * case its format is the format of the
     * google.rpc.BadRequest.FieldViolation.field field in
     * https://cloud.google.com/apis/design/errors#error_details. It may also be
     * be a source other than the request field (e.g. a macro definition
     * referenced in the text of the query), in which case this is the name of
     * the source (e.g. the macro name).
     *
     * Generated from protobuf field <code>string source = 1;</code>
     */
    protected $source = '';
    /**
     * The position of the first byte within the text.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TextLocator.Position start_position = 2;</code>
     */
    protected $start_position = null;
    /**
     * The position of the last byte within the text.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TextLocator.Position end_position = 3;</code>
     */
    protected $end_position = null;
    /**
     * If `source`, `start_position`, and `end_position` describe a call on
     * some object (e.g. a macro in the time series query language text) and a
     * location is to be designated in that object's text, `nested_locator`
     * identifies the location within that object.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TextLocator nested_locator = 4;</code>
     */
    protected $nested_locator = null;
    /**
     * When `nested_locator` is set, this field gives the reason for the nesting.
     * Usually, the reason is a macro invocation. In that case, the macro name
     * (including the leading '&#64;') signals the location of the macro call
     * in the text and a macro argument name (including the leading '$') signals
     * the location of the macro argument inside the macro body that got
     * substituted away.
     *
     * Generated from protobuf field <code>string nesting_reason = 5;</code>
     */
    protected $nesting_reason = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source
     *           The source of the text. The source may be a field in the request, in which
     *           case its format is the format of the
     *           google.rpc.BadRequest.FieldViolation.field field in
     *           https://cloud.google.com/apis/design/errors#error_details. It may also be
     *           be a source other than the request field (e.g. a macro definition
     *           referenced in the text of the query), in which case this is the name of
     *           the source (e.g. the macro name).
     *     @type \Google\Cloud\Monitoring\V3\TextLocator\Position $start_position
     *           The position of the first byte within the text.
     *     @type \Google\Cloud\Monitoring\V3\TextLocator\Position $end_position
     *           The position of the last byte within the text.
     *     @type \Google\Cloud\Monitoring\V3\TextLocator $nested_locator
     *           If `source`, `start_position`, and `end_position` describe a call on
     *           some object (e.g. a macro in the time series query language text) and a
     *           location is to be designated in that object's text, `nested_locator`
     *           identifies the location within that object.
     *     @type string $nesting_reason
     *           When `nested_locator` is set, this field gives the reason for the nesting.
     *           Usually, the reason is a macro invocation. In that case, the macro name
     *           (including the leading '&#64;') signals the location of the macro call
     *           in the text and a macro argument name (including the leading '$') signals
     *           the location of the macro argument inside the macro body that got
     *           substituted away.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Metric::initOnce();
        parent::__construct($data);
    }

    /**
     * The source of the text. The source may be a field in the request, in which
     * case its format is the format of the
     * google.rpc.BadRequest.FieldViolation.field field in
     * https://cloud.google.com/apis/design/errors#error_details. It may also be
     * be a source other than the request field (e.g. a macro definition
     * referenced in the text of the query), in which case this is the name of
     * the source (e.g. the macro name).
     *
     * Generated from protobuf field <code>string source = 1;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The source of the text. The source may be a field in the request, in which
     * case its format is the format of the
     * google.rpc.BadRequest.FieldViolation.field field in
     * https://cloud.google.com/apis/design/errors#error_details. It may also be
     * be a source other than the request field (e.g. a macro definition
     * referenced in the text of the query), in which case this is the name of
     * the source (e.g. the macro name).
     *
     * Generated from protobuf field <code>string source = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * The position of the first byte within the text.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TextLocator.Position start_position = 2;</code>
     * @return \Google\Cloud\Monitoring\V3\TextLocator\Position|null
     */
    public function getStartPosition()
    {
        return $this->start_position;
    }

    public function hasStartPosition()
    {
        return isset($this->start_position);
    }

    public function clearStartPosition()
    {
        unset($this->start_position);
    }

    /**
     * The position of the first byte within the text.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TextLocator.Position start_position = 2;</code>
     * @param \Google\Cloud\Monitoring\V3\TextLocator\Position $var
     * @return $this
     */
    public function setStartPosition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\TextLocator\Position::class);
        $this->start_position = $var;

        return $this;
    }

    /**
     * The position of the last byte within the text.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TextLocator.Position end_position = 3;</code>
     * @return \Google\Cloud\Monitoring\V3\TextLocator\Position|null
     */
    public function getEndPosition()
    {
        return $this->end_position;
    }

    public function hasEndPosition()
    {
        return isset($this->end_position);
    }

    public function clearEndPosition()
    {
        unset($this->end_position);
    }

    /**
     * The position of the last byte within the text.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TextLocator.Position end_position = 3;</code>
     * @param \Google\Cloud\Monitoring\V3\TextLocator\Position $var
     * @return $this
     */
    public function setEndPosition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\TextLocator\Position::class);
        $this->end_position = $var;

        return $this;
    }

    /**
     * If `source`, `start_position`, and `end_position` describe a call on
     * some object (e.g. a macro in the time series query language text) and a
     * location is to be designated in that object's text, `nested_locator`
     * identifies the location within that object.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TextLocator nested_locator = 4;</code>
     * @return \Google\Cloud\Monitoring\V3\TextLocator|null
     */
    public function getNestedLocator()
    {
        return $this->nested_locator;
    }

    public function hasNestedLocator()
    {
        return isset($this->nested_locator);
    }

    public function clearNestedLocator()
    {
        unset($this->nested_locator);
    }

    /**
     * If `source`, `start_position`, and `end_position` describe a call on
     * some object (e.g. a macro in the time series query language text) and a
     * location is to be designated in that object's text, `nested_locator`
     * identifies the location within that object.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.TextLocator nested_locator = 4;</code>
     * @param \Google\Cloud\Monitoring\V3\TextLocator $var
     * @return $this
     */
    public function setNestedLocator($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\TextLocator::class);
        $this->nested_locator = $var;

        return $this;
    }

    /**
     * When `nested_locator` is set, this field gives the reason for the nesting.
     * Usually, the reason is a macro invocation. In that case, the macro name
     * (including the leading '&#64;') signals the location of the macro call
     * in the text and a macro argument name (including the leading '$') signals
     * the location of the macro argument inside the macro body that got
     * substituted away.
     *
     * Generated from protobuf field <code>string nesting_reason = 5;</code>
     * @return string
     */
    public function getNestingReason()
    {
        return $this->nesting_reason;
    }

    /**
     * When `nested_locator` is set, this field gives the reason for the nesting.
     * Usually, the reason is a macro invocation. In that case, the macro name
     * (including the leading '&#64;') signals the location of the macro call
     * in the text and a macro argument name (including the leading '$') signals
     * the location of the macro argument inside the macro body that got
     * substituted away.
     *
     * Generated from protobuf field <code>string nesting_reason = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setNestingReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->nesting_reason = $var;

        return $this;
    }

}

