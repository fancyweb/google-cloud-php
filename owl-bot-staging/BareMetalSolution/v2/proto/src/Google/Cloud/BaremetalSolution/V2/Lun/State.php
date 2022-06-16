<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/baremetalsolution.proto

namespace Google\Cloud\BaremetalSolution\V2\Lun;

use UnexpectedValueException;

/**
 * The possible states for the LUN.
 *
 * Protobuf type <code>google.cloud.baremetalsolution.v2.Lun.State</code>
 */
class State
{
    /**
     * The LUN is in an unknown state.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The LUN is being created.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * The LUN is being updated.
     *
     * Generated from protobuf enum <code>UPDATING = 2;</code>
     */
    const UPDATING = 2;
    /**
     * The LUN is ready for use.
     *
     * Generated from protobuf enum <code>READY = 3;</code>
     */
    const READY = 3;
    /**
     * The LUN has been requested to be deleted.
     *
     * Generated from protobuf enum <code>DELETING = 4;</code>
     */
    const DELETING = 4;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::UPDATING => 'UPDATING',
        self::READY => 'READY',
        self::DELETING => 'DELETING',
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
class_alias(State::class, \Google\Cloud\BaremetalSolution\V2\Lun_State::class);

