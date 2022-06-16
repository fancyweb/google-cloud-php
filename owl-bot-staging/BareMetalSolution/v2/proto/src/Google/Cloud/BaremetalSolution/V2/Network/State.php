<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/baremetalsolution.proto

namespace Google\Cloud\BaremetalSolution\V2\Network;

use UnexpectedValueException;

/**
 * The possible states for this Network.
 *
 * Protobuf type <code>google.cloud.baremetalsolution.v2.Network.State</code>
 */
class State
{
    /**
     * The Network is in an unknown state.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The Network is provisioning.
     *
     * Generated from protobuf enum <code>PROVISIONING = 1;</code>
     */
    const PROVISIONING = 1;
    /**
     * The Network has been provisioned.
     *
     * Generated from protobuf enum <code>PROVISIONED = 2;</code>
     */
    const PROVISIONED = 2;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::PROVISIONING => 'PROVISIONING',
        self::PROVISIONED => 'PROVISIONED',
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
class_alias(State::class, \Google\Cloud\BaremetalSolution\V2\Network_State::class);

