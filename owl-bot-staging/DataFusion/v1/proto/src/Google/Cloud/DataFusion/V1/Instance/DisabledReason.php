<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datafusion/v1/datafusion.proto

namespace Google\Cloud\DataFusion\V1\Instance;

use UnexpectedValueException;

/**
 * The reason for disabling the instance if the state is DISABLED.
 *
 * Protobuf type <code>google.cloud.datafusion.v1.Instance.DisabledReason</code>
 */
class DisabledReason
{
    /**
     * This is an unknown reason for disabling.
     *
     * Generated from protobuf enum <code>DISABLED_REASON_UNSPECIFIED = 0;</code>
     */
    const DISABLED_REASON_UNSPECIFIED = 0;
    /**
     * The KMS key used by the instance is either revoked or denied access to
     *
     * Generated from protobuf enum <code>KMS_KEY_ISSUE = 1;</code>
     */
    const KMS_KEY_ISSUE = 1;

    private static $valueToName = [
        self::DISABLED_REASON_UNSPECIFIED => 'DISABLED_REASON_UNSPECIFIED',
        self::KMS_KEY_ISSUE => 'KMS_KEY_ISSUE',
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
class_alias(DisabledReason::class, \Google\Cloud\DataFusion\V1\Instance_DisabledReason::class);

