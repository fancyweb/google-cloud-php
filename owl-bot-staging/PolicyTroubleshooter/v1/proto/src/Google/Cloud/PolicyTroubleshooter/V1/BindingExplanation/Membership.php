<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/policytroubleshooter/v1/explanations.proto

namespace Google\Cloud\PolicyTroubleshooter\V1\BindingExplanation;

use UnexpectedValueException;

/**
 * Whether the binding includes the member.
 *
 * Protobuf type <code>google.cloud.policytroubleshooter.v1.BindingExplanation.Membership</code>
 */
class Membership
{
    /**
     * Reserved for future use.
     *
     * Generated from protobuf enum <code>MEMBERSHIP_UNSPECIFIED = 0;</code>
     */
    const MEMBERSHIP_UNSPECIFIED = 0;
    /**
     * The binding includes the member. The member can be included directly
     * or indirectly. For example:
     * * A member is included directly if that member is listed in the binding.
     * * A member is included indirectly if that member is in a Google group or
     *   G Suite domain that is listed in the binding.
     *
     * Generated from protobuf enum <code>MEMBERSHIP_INCLUDED = 1;</code>
     */
    const MEMBERSHIP_INCLUDED = 1;
    /**
     * The binding does not include the member.
     *
     * Generated from protobuf enum <code>MEMBERSHIP_NOT_INCLUDED = 2;</code>
     */
    const MEMBERSHIP_NOT_INCLUDED = 2;
    /**
     * The sender of the request is not allowed to access the binding.
     *
     * Generated from protobuf enum <code>MEMBERSHIP_UNKNOWN_INFO_DENIED = 3;</code>
     */
    const MEMBERSHIP_UNKNOWN_INFO_DENIED = 3;
    /**
     * The member is an unsupported type. Only Google Accounts and service
     * accounts are supported.
     *
     * Generated from protobuf enum <code>MEMBERSHIP_UNKNOWN_UNSUPPORTED = 4;</code>
     */
    const MEMBERSHIP_UNKNOWN_UNSUPPORTED = 4;

    private static $valueToName = [
        self::MEMBERSHIP_UNSPECIFIED => 'MEMBERSHIP_UNSPECIFIED',
        self::MEMBERSHIP_INCLUDED => 'MEMBERSHIP_INCLUDED',
        self::MEMBERSHIP_NOT_INCLUDED => 'MEMBERSHIP_NOT_INCLUDED',
        self::MEMBERSHIP_UNKNOWN_INFO_DENIED => 'MEMBERSHIP_UNKNOWN_INFO_DENIED',
        self::MEMBERSHIP_UNKNOWN_UNSUPPORTED => 'MEMBERSHIP_UNKNOWN_UNSUPPORTED',
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
class_alias(Membership::class, \Google\Cloud\PolicyTroubleshooter\V1\BindingExplanation_Membership::class);

