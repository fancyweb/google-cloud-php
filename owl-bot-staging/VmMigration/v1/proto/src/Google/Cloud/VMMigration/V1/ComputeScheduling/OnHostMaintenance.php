<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1\ComputeScheduling;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.vmmigration.v1.ComputeScheduling.OnHostMaintenance</code>
 */
class OnHostMaintenance
{
    /**
     * An unknown, unexpected behavior.
     *
     * Generated from protobuf enum <code>ON_HOST_MAINTENANCE_UNSPECIFIED = 0;</code>
     */
    const ON_HOST_MAINTENANCE_UNSPECIFIED = 0;
    /**
     * Terminate the instance when the host machine undergoes maintenance.
     *
     * Generated from protobuf enum <code>TERMINATE = 1;</code>
     */
    const TERMINATE = 1;
    /**
     * Migrate the instance when the host machine undergoes maintenance.
     *
     * Generated from protobuf enum <code>MIGRATE = 2;</code>
     */
    const MIGRATE = 2;

    private static $valueToName = [
        self::ON_HOST_MAINTENANCE_UNSPECIFIED => 'ON_HOST_MAINTENANCE_UNSPECIFIED',
        self::TERMINATE => 'TERMINATE',
        self::MIGRATE => 'MIGRATE',
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
class_alias(OnHostMaintenance::class, \Google\Cloud\VMMigration\V1\ComputeScheduling_OnHostMaintenance::class);

