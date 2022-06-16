<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MySQL source configuration
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.MysqlSourceConfig</code>
 */
class MysqlSourceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * MySQL objects to retrieve from the source.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.MysqlRdbms include_objects = 1;</code>
     */
    protected $include_objects = null;
    /**
     * MySQL objects to exclude from the stream.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.MysqlRdbms exclude_objects = 2;</code>
     */
    protected $exclude_objects = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Datastream\V1\MysqlRdbms $include_objects
     *           MySQL objects to retrieve from the source.
     *     @type \Google\Cloud\Datastream\V1\MysqlRdbms $exclude_objects
     *           MySQL objects to exclude from the stream.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * MySQL objects to retrieve from the source.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.MysqlRdbms include_objects = 1;</code>
     * @return \Google\Cloud\Datastream\V1\MysqlRdbms|null
     */
    public function getIncludeObjects()
    {
        return $this->include_objects;
    }

    public function hasIncludeObjects()
    {
        return isset($this->include_objects);
    }

    public function clearIncludeObjects()
    {
        unset($this->include_objects);
    }

    /**
     * MySQL objects to retrieve from the source.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.MysqlRdbms include_objects = 1;</code>
     * @param \Google\Cloud\Datastream\V1\MysqlRdbms $var
     * @return $this
     */
    public function setIncludeObjects($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\MysqlRdbms::class);
        $this->include_objects = $var;

        return $this;
    }

    /**
     * MySQL objects to exclude from the stream.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.MysqlRdbms exclude_objects = 2;</code>
     * @return \Google\Cloud\Datastream\V1\MysqlRdbms|null
     */
    public function getExcludeObjects()
    {
        return $this->exclude_objects;
    }

    public function hasExcludeObjects()
    {
        return isset($this->exclude_objects);
    }

    public function clearExcludeObjects()
    {
        unset($this->exclude_objects);
    }

    /**
     * MySQL objects to exclude from the stream.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.MysqlRdbms exclude_objects = 2;</code>
     * @param \Google\Cloud\Datastream\V1\MysqlRdbms $var
     * @return $this
     */
    public function setExcludeObjects($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\MysqlRdbms::class);
        $this->exclude_objects = $var;

        return $this;
    }

}

