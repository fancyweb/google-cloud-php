<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\PreservedStatePreservedDisk;

use UnexpectedValueException;

/**
 * The mode in which to attach this disk, either READ_WRITE or READ_ONLY. If not specified, the default is to attach the disk in READ_WRITE mode.
 *
 * Protobuf type <code>google.cloud.compute.v1.PreservedStatePreservedDisk.Mode</code>
 */
class Mode
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_MODE = 0;</code>
     */
    const UNDEFINED_MODE = 0;
    /**
     * Attaches this disk in read-only mode. Multiple VM instances can use a disk in READ_ONLY mode at a time.
     *
     * Generated from protobuf enum <code>READ_ONLY = 91950261;</code>
     */
    const READ_ONLY = 91950261;
    /**
     * *[Default]* Attaches this disk in READ_WRITE mode. Only one VM instance at a time can be attached to a disk in READ_WRITE mode.
     *
     * Generated from protobuf enum <code>READ_WRITE = 173607894;</code>
     */
    const READ_WRITE = 173607894;

    private static $valueToName = [
        self::UNDEFINED_MODE => 'UNDEFINED_MODE',
        self::READ_ONLY => 'READ_ONLY',
        self::READ_WRITE => 'READ_WRITE',
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
class_alias(Mode::class, \Google\Cloud\Compute\V1\PreservedStatePreservedDisk_Mode::class);

