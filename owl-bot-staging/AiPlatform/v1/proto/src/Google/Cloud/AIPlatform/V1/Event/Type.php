<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/event.proto

namespace Google\Cloud\AIPlatform\V1\Event;

use UnexpectedValueException;

/**
 * Describes whether an Event's Artifact is the Execution's input or output.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.Event.Type</code>
 */
class Type
{
    /**
     * Unspecified whether input or output of the Execution.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * An input of the Execution.
     *
     * Generated from protobuf enum <code>INPUT = 1;</code>
     */
    const INPUT = 1;
    /**
     * An output of the Execution.
     *
     * Generated from protobuf enum <code>OUTPUT = 2;</code>
     */
    const OUTPUT = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::INPUT => 'INPUT',
        self::OUTPUT => 'OUTPUT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Google\Cloud\AIPlatform\V1\Event_Type::class);

