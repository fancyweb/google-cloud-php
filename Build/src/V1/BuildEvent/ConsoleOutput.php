<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/build/v1/build_events.proto

namespace Google\Cloud\Build\V1\BuildEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Textual output written to standard output or standard error.
 *
 * Generated from protobuf message <code>google.devtools.build.v1.BuildEvent.ConsoleOutput</code>
 */
class ConsoleOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * The output stream type.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.ConsoleOutputStream type = 1;</code>
     */
    private $type = 0;
    protected $output;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           The output stream type.
     *     @type string $text_output
     *           Regular UTF-8 output; normal text.
     *     @type string $binary_output
     *           Used if the output is not UTF-8 text (for example, a binary proto).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Build\V1\BuildEvents::initOnce();
        parent::__construct($data);
    }

    /**
     * The output stream type.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.ConsoleOutputStream type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The output stream type.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.ConsoleOutputStream type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Build\V1\ConsoleOutputStream::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Regular UTF-8 output; normal text.
     *
     * Generated from protobuf field <code>string text_output = 2;</code>
     * @return string
     */
    public function getTextOutput()
    {
        return $this->readOneof(2);
    }

    public function hasTextOutput()
    {
        return $this->hasOneof(2);
    }

    /**
     * Regular UTF-8 output; normal text.
     *
     * Generated from protobuf field <code>string text_output = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTextOutput($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Used if the output is not UTF-8 text (for example, a binary proto).
     *
     * Generated from protobuf field <code>bytes binary_output = 3;</code>
     * @return string
     */
    public function getBinaryOutput()
    {
        return $this->readOneof(3);
    }

    public function hasBinaryOutput()
    {
        return $this->hasOneof(3);
    }

    /**
     * Used if the output is not UTF-8 text (for example, a binary proto).
     *
     * Generated from protobuf field <code>bytes binary_output = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setBinaryOutput($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOutput()
    {
        return $this->whichOneof("output");
    }

}


