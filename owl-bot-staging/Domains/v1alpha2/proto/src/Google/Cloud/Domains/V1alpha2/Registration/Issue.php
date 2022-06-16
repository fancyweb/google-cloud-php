<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1alpha2/domains.proto

namespace Google\Cloud\Domains\V1alpha2\Registration;

use UnexpectedValueException;

/**
 * Possible issues with a `Registration` that require attention.
 *
 * Protobuf type <code>google.cloud.domains.v1alpha2.Registration.Issue</code>
 */
class Issue
{
    /**
     * The issue is undefined.
     *
     * Generated from protobuf enum <code>ISSUE_UNSPECIFIED = 0;</code>
     */
    const ISSUE_UNSPECIFIED = 0;
    /**
     * Contact the Cloud Support team to resolve a problem with this domain.
     *
     * Generated from protobuf enum <code>CONTACT_SUPPORT = 1;</code>
     */
    const CONTACT_SUPPORT = 1;
    /**
     * [ICANN](https://icann.org/) requires verification of the email address
     * in the `Registration`'s `contact_settings.registrant_contact` field. To
     * verify the email address, follow the
     * instructions in the email the `registrant_contact` receives following
     * registration. If you do not complete email verification within
     * 15 days of registration, the domain is suspended. To resend the
     * verification email, call ConfigureContactSettings and provide the current
     * `registrant_contact.email`.
     *
     * Generated from protobuf enum <code>UNVERIFIED_EMAIL = 2;</code>
     */
    const UNVERIFIED_EMAIL = 2;

    private static $valueToName = [
        self::ISSUE_UNSPECIFIED => 'ISSUE_UNSPECIFIED',
        self::CONTACT_SUPPORT => 'CONTACT_SUPPORT',
        self::UNVERIFIED_EMAIL => 'UNVERIFIED_EMAIL',
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
class_alias(Issue::class, \Google\Cloud\Domains\V1alpha2\Registration_Issue::class);

