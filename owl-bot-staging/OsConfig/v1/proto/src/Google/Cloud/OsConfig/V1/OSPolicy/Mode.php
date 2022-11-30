<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy.proto

namespace Google\Cloud\OsConfig\V1\OSPolicy;

use UnexpectedValueException;

/**
 * Policy mode
 *
 * Protobuf type <code>google.cloud.osconfig.v1.OSPolicy.Mode</code>
 */
class Mode
{
    /**
     * Invalid mode
     *
     * Generated from protobuf enum <code>MODE_UNSPECIFIED = 0;</code>
     */
    const MODE_UNSPECIFIED = 0;
    /**
     * This mode checks if the configuration resources in the policy are in
     * their desired state. No actions are performed if they are not in the
     * desired state. This mode is used for reporting purposes.
     *
     * Generated from protobuf enum <code>VALIDATION = 1;</code>
     */
    const VALIDATION = 1;
    /**
     * This mode checks if the configuration resources in the policy are in
     * their desired state, and if not, enforces the desired state.
     *
     * Generated from protobuf enum <code>ENFORCEMENT = 2;</code>
     */
    const ENFORCEMENT = 2;

    private static $valueToName = [
        self::MODE_UNSPECIFIED => 'MODE_UNSPECIFIED',
        self::VALIDATION => 'VALIDATION',
        self::ENFORCEMENT => 'ENFORCEMENT',
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
class_alias(Mode::class, \Google\Cloud\OsConfig\V1\OSPolicy_Mode::class);

