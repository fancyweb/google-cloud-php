<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/batch/v1/task.proto

namespace Google\Cloud\Batch\V1\LifecyclePolicy;

use UnexpectedValueException;

/**
 * Action on task failures based on different conditions.
 *
 * Protobuf type <code>google.cloud.batch.v1.LifecyclePolicy.Action</code>
 */
class Action
{
    /**
     * Action unspecified.
     *
     * Generated from protobuf enum <code>ACTION_UNSPECIFIED = 0;</code>
     */
    const ACTION_UNSPECIFIED = 0;
    /**
     * Action that tasks in the group will be scheduled to re-execute.
     *
     * Generated from protobuf enum <code>RETRY_TASK = 1;</code>
     */
    const RETRY_TASK = 1;
    /**
     * Action that tasks in the group will be stopped immediately.
     *
     * Generated from protobuf enum <code>FAIL_TASK = 2;</code>
     */
    const FAIL_TASK = 2;

    private static $valueToName = [
        self::ACTION_UNSPECIFIED => 'ACTION_UNSPECIFIED',
        self::RETRY_TASK => 'RETRY_TASK',
        self::FAIL_TASK => 'FAIL_TASK',
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


