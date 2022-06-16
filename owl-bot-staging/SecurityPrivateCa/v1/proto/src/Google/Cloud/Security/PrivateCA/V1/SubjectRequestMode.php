<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1;

use UnexpectedValueException;

/**
 * Describes the way in which a [Certificate][google.cloud.security.privateca.v1.Certificate]'s [Subject][google.cloud.security.privateca.v1.Subject] and/or
 * [SubjectAltNames][google.cloud.security.privateca.v1.SubjectAltNames] will be resolved.
 *
 * Protobuf type <code>google.cloud.security.privateca.v1.SubjectRequestMode</code>
 */
class SubjectRequestMode
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>SUBJECT_REQUEST_MODE_UNSPECIFIED = 0;</code>
     */
    const SUBJECT_REQUEST_MODE_UNSPECIFIED = 0;
    /**
     * The default mode used in most cases. Indicates that the certificate's
     * [Subject][google.cloud.security.privateca.v1.Subject] and/or [SubjectAltNames][google.cloud.security.privateca.v1.SubjectAltNames] are specified in the certificate
     * request. This mode requires the caller to have the
     * `privateca.certificates.create` permission.
     *
     * Generated from protobuf enum <code>DEFAULT = 1;</code>
     */
    const PBDEFAULT = 1;
    /**
     * A mode reserved for special cases. Indicates that the certificate should
     * have one or more SPIFFE [SubjectAltNames][google.cloud.security.privateca.v1.SubjectAltNames] set by the service based
     * on the caller's identity. This mode will ignore any explicitly specified
     * [Subject][google.cloud.security.privateca.v1.Subject] and/or [SubjectAltNames][google.cloud.security.privateca.v1.SubjectAltNames] in the certificate request.
     * This mode requires the caller to have the
     * `privateca.certificates.createForSelf` permission.
     *
     * Generated from protobuf enum <code>REFLECTED_SPIFFE = 2;</code>
     */
    const REFLECTED_SPIFFE = 2;

    private static $valueToName = [
        self::SUBJECT_REQUEST_MODE_UNSPECIFIED => 'SUBJECT_REQUEST_MODE_UNSPECIFIED',
        self::PBDEFAULT => 'PBDEFAULT',
        self::REFLECTED_SPIFFE => 'REFLECTED_SPIFFE',
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

