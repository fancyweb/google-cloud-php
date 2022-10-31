<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/condition.proto

namespace Google\Cloud\Run\V2\Condition;

use UnexpectedValueException;

/**
 * Reasons specific to Execution resource.
 *
 * Protobuf type <code>google.cloud.run.v2.Condition.ExecutionReason</code>
 */
class ExecutionReason
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>EXECUTION_REASON_UNDEFINED = 0;</code>
     */
    const EXECUTION_REASON_UNDEFINED = 0;
    /**
     * Internal system error getting execution status. System will retry.
     *
     * Generated from protobuf enum <code>JOB_STATUS_SERVICE_POLLING_ERROR = 1;</code>
     */
    const JOB_STATUS_SERVICE_POLLING_ERROR = 1;
    /**
     * A task reached its retry limit and the last attempt failed due to the
     * user container exiting with a non-zero exit code.
     *
     * Generated from protobuf enum <code>NON_ZERO_EXIT_CODE = 2;</code>
     */
    const NON_ZERO_EXIT_CODE = 2;
    /**
     * The execution was cancelled by users.
     *
     * Generated from protobuf enum <code>CANCELLED = 3;</code>
     */
    const CANCELLED = 3;

    private static $valueToName = [
        self::EXECUTION_REASON_UNDEFINED => 'EXECUTION_REASON_UNDEFINED',
        self::JOB_STATUS_SERVICE_POLLING_ERROR => 'JOB_STATUS_SERVICE_POLLING_ERROR',
        self::NON_ZERO_EXIT_CODE => 'NON_ZERO_EXIT_CODE',
        self::CANCELLED => 'CANCELLED',
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


