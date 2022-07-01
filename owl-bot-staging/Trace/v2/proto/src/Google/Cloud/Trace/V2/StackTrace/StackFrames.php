<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudtrace/v2/trace.proto

namespace Google\Cloud\Trace\V2\StackTrace;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of stack frames, which can be truncated.
 *
 * Generated from protobuf message <code>google.devtools.cloudtrace.v2.StackTrace.StackFrames</code>
 */
class StackFrames extends \Google\Protobuf\Internal\Message
{
    /**
     * Stack frames in this call stack.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudtrace.v2.StackTrace.StackFrame frame = 1;</code>
     */
    private $frame;
    /**
     * The number of stack frames that were dropped because there
     * were too many stack frames.
     * If this value is 0, then no stack frames were dropped.
     *
     * Generated from protobuf field <code>int32 dropped_frames_count = 2;</code>
     */
    protected $dropped_frames_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Trace\V2\StackTrace\StackFrame[]|\Google\Protobuf\Internal\RepeatedField $frame
     *           Stack frames in this call stack.
     *     @type int $dropped_frames_count
     *           The number of stack frames that were dropped because there
     *           were too many stack frames.
     *           If this value is 0, then no stack frames were dropped.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudtrace\V2\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * Stack frames in this call stack.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudtrace.v2.StackTrace.StackFrame frame = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFrame()
    {
        return $this->frame;
    }

    /**
     * Stack frames in this call stack.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudtrace.v2.StackTrace.StackFrame frame = 1;</code>
     * @param \Google\Cloud\Trace\V2\StackTrace\StackFrame[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFrame($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Trace\V2\StackTrace\StackFrame::class);
        $this->frame = $arr;

        return $this;
    }

    /**
     * The number of stack frames that were dropped because there
     * were too many stack frames.
     * If this value is 0, then no stack frames were dropped.
     *
     * Generated from protobuf field <code>int32 dropped_frames_count = 2;</code>
     * @return int
     */
    public function getDroppedFramesCount()
    {
        return $this->dropped_frames_count;
    }

    /**
     * The number of stack frames that were dropped because there
     * were too many stack frames.
     * If this value is 0, then no stack frames were dropped.
     *
     * Generated from protobuf field <code>int32 dropped_frames_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDroppedFramesCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->dropped_frames_count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StackFrames::class, \Google\Cloud\Trace\V2\StackTrace_StackFrames::class);

