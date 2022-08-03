<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1\CaPool\IssuancePolicy\AllowedKeyType\EcKeyType;

use UnexpectedValueException;

/**
 * Describes an elliptic curve-based signature algorithm that may be
 * used in a [Certificate][google.cloud.security.privateca.v1.Certificate] issued from a [CaPool][google.cloud.security.privateca.v1.CaPool].
 *
 * Protobuf type <code>google.cloud.security.privateca.v1.CaPool.IssuancePolicy.AllowedKeyType.EcKeyType.EcSignatureAlgorithm</code>
 */
class EcSignatureAlgorithm
{
    /**
     * Not specified. Signifies that any signature algorithm may be used.
     *
     * Generated from protobuf enum <code>EC_SIGNATURE_ALGORITHM_UNSPECIFIED = 0;</code>
     */
    const EC_SIGNATURE_ALGORITHM_UNSPECIFIED = 0;
    /**
     * Refers to the Elliptic Curve Digital Signature Algorithm over the
     * NIST P-256 curve.
     *
     * Generated from protobuf enum <code>ECDSA_P256 = 1;</code>
     */
    const ECDSA_P256 = 1;
    /**
     * Refers to the Elliptic Curve Digital Signature Algorithm over the
     * NIST P-384 curve.
     *
     * Generated from protobuf enum <code>ECDSA_P384 = 2;</code>
     */
    const ECDSA_P384 = 2;
    /**
     * Refers to the Edwards-curve Digital Signature Algorithm over curve
     * 25519, as described in RFC 8410.
     *
     * Generated from protobuf enum <code>EDDSA_25519 = 3;</code>
     */
    const EDDSA_25519 = 3;

    private static $valueToName = [
        self::EC_SIGNATURE_ALGORITHM_UNSPECIFIED => 'EC_SIGNATURE_ALGORITHM_UNSPECIFIED',
        self::ECDSA_P256 => 'ECDSA_P256',
        self::ECDSA_P384 => 'ECDSA_P384',
        self::EDDSA_25519 => 'EDDSA_25519',
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


