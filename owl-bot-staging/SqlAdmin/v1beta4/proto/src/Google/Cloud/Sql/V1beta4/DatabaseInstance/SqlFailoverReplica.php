<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4\DatabaseInstance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.DatabaseInstance.SqlFailoverReplica</code>
 */
class SqlFailoverReplica extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the failover replica. If specified at instance creation, a
     * failover replica is created for the instance. The name
     * doesn't include the project ID.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The availability status of the failover replica. A false status indicates
     * that the failover replica is out of sync. The primary instance can only
     * failover to the failover replica when the status is true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue available = 2;</code>
     */
    protected $available = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the failover replica. If specified at instance creation, a
     *           failover replica is created for the instance. The name
     *           doesn't include the project ID.
     *     @type \Google\Protobuf\BoolValue $available
     *           The availability status of the failover replica. A false status indicates
     *           that the failover replica is out of sync. The primary instance can only
     *           failover to the failover replica when the status is true.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the failover replica. If specified at instance creation, a
     * failover replica is created for the instance. The name
     * doesn't include the project ID.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the failover replica. If specified at instance creation, a
     * failover replica is created for the instance. The name
     * doesn't include the project ID.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The availability status of the failover replica. A false status indicates
     * that the failover replica is out of sync. The primary instance can only
     * failover to the failover replica when the status is true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue available = 2;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getAvailable()
    {
        return $this->available;
    }

    public function hasAvailable()
    {
        return isset($this->available);
    }

    public function clearAvailable()
    {
        unset($this->available);
    }

    /**
     * Returns the unboxed value from <code>getAvailable()</code>

     * The availability status of the failover replica. A false status indicates
     * that the failover replica is out of sync. The primary instance can only
     * failover to the failover replica when the status is true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue available = 2;</code>
     * @return bool|null
     */
    public function getAvailableUnwrapped()
    {
        return $this->readWrapperValue("available");
    }

    /**
     * The availability status of the failover replica. A false status indicates
     * that the failover replica is out of sync. The primary instance can only
     * failover to the failover replica when the status is true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue available = 2;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setAvailable($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->available = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * The availability status of the failover replica. A false status indicates
     * that the failover replica is out of sync. The primary instance can only
     * failover to the failover replica when the status is true.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue available = 2;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setAvailableUnwrapped($var)
    {
        $this->writeWrapperValue("available", $var);
        return $this;}

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SqlFailoverReplica::class, \Google\Cloud\Sql\V1beta4\DatabaseInstance_SqlFailoverReplica::class);

