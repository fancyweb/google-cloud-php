<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy_assignments.proto

namespace Google\Cloud\OsConfig\V1\OSPolicyAssignmentOperationMetadata;

use UnexpectedValueException;

/**
 * State of the rollout
 *
 * Protobuf type <code>google.cloud.osconfig.v1.OSPolicyAssignmentOperationMetadata.RolloutState</code>
 */
class RolloutState
{
    /**
     * Invalid value
     *
     * Generated from protobuf enum <code>ROLLOUT_STATE_UNSPECIFIED = 0;</code>
     */
    const ROLLOUT_STATE_UNSPECIFIED = 0;
    /**
     * The rollout is in progress.
     *
     * Generated from protobuf enum <code>IN_PROGRESS = 1;</code>
     */
    const IN_PROGRESS = 1;
    /**
     * The rollout is being cancelled.
     *
     * Generated from protobuf enum <code>CANCELLING = 2;</code>
     */
    const CANCELLING = 2;
    /**
     * The rollout is cancelled.
     *
     * Generated from protobuf enum <code>CANCELLED = 3;</code>
     */
    const CANCELLED = 3;
    /**
     * The rollout has completed successfully.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 4;</code>
     */
    const SUCCEEDED = 4;

    private static $valueToName = [
        self::ROLLOUT_STATE_UNSPECIFIED => 'ROLLOUT_STATE_UNSPECIFIED',
        self::IN_PROGRESS => 'IN_PROGRESS',
        self::CANCELLING => 'CANCELLING',
        self::CANCELLED => 'CANCELLED',
        self::SUCCEEDED => 'SUCCEEDED',
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
class_alias(RolloutState::class, \Google\Cloud\OsConfig\V1\OSPolicyAssignmentOperationMetadata_RolloutState::class);

