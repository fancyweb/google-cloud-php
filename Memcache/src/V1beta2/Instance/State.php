<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memcache/v1beta2/cloud_memcache.proto

namespace Google\Cloud\Memcache\V1beta2\Instance;

use UnexpectedValueException;

/**
 * Different states of a Memcached instance.
 *
 * Protobuf type <code>google.cloud.memcache.v1beta2.Instance.State</code>
 */
class State
{
    /**
     * State not set.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Memcached instance is being created.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * Memcached instance has been created and ready to be used.
     *
     * Generated from protobuf enum <code>READY = 2;</code>
     */
    const READY = 2;
    /**
     * Memcached instance is updating configuration such as maintenance policy
     * and schedule.
     *
     * Generated from protobuf enum <code>UPDATING = 3;</code>
     */
    const UPDATING = 3;
    /**
     * Memcached instance is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 4;</code>
     */
    const DELETING = 4;
    /**
     * Memcached instance is going through maintenance, e.g. data plane rollout.
     *
     * Generated from protobuf enum <code>PERFORMING_MAINTENANCE = 5;</code>
     */
    const PERFORMING_MAINTENANCE = 5;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::READY => 'READY',
        self::UPDATING => 'UPDATING',
        self::DELETING => 'DELETING',
        self::PERFORMING_MAINTENANCE => 'PERFORMING_MAINTENANCE',
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
class_alias(State::class, \Google\Cloud\Memcache\V1beta2\Instance_State::class);

