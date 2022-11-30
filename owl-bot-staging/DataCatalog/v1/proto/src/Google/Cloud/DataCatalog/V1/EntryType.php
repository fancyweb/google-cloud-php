<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use UnexpectedValueException;

/**
 * The enum field that lists all the types of entry resources in Data
 * Catalog. For example, a BigQuery table entry has the `TABLE` type.
 *
 * Protobuf type <code>google.cloud.datacatalog.v1.EntryType</code>
 */
class EntryType
{
    /**
     * Default unknown type.
     *
     * Generated from protobuf enum <code>ENTRY_TYPE_UNSPECIFIED = 0;</code>
     */
    const ENTRY_TYPE_UNSPECIFIED = 0;
    /**
     * The entry type that has a GoogleSQL schema, including
     * logical views.
     *
     * Generated from protobuf enum <code>TABLE = 2;</code>
     */
    const TABLE = 2;
    /**
     * Output only. The type of models.
     * For more information, see [Supported models in BigQuery ML]
     * (https://cloud.google.com/bigquery-ml/docs/introduction#supported_models_in).
     *
     * Generated from protobuf enum <code>MODEL = 5;</code>
     */
    const MODEL = 5;
    /**
     * An entry type for streaming entries. For example, a Pub/Sub topic.
     *
     * Generated from protobuf enum <code>DATA_STREAM = 3;</code>
     */
    const DATA_STREAM = 3;
    /**
     * An entry type for a set of files or objects. For example, a
     * Cloud Storage fileset.
     *
     * Generated from protobuf enum <code>FILESET = 4;</code>
     */
    const FILESET = 4;
    /**
     * A group of servers that work together. For example, a Kafka cluster.
     *
     * Generated from protobuf enum <code>CLUSTER = 6;</code>
     */
    const CLUSTER = 6;
    /**
     * A database.
     *
     * Generated from protobuf enum <code>DATABASE = 7;</code>
     */
    const DATABASE = 7;
    /**
     * Output only. Connection to a data source. For example, a BigQuery
     * connection.
     *
     * Generated from protobuf enum <code>DATA_SOURCE_CONNECTION = 8;</code>
     */
    const DATA_SOURCE_CONNECTION = 8;
    /**
     * Output only. Routine, for example, a BigQuery routine.
     *
     * Generated from protobuf enum <code>ROUTINE = 9;</code>
     */
    const ROUTINE = 9;
    /**
     * A Dataplex lake.
     *
     * Generated from protobuf enum <code>LAKE = 10;</code>
     */
    const LAKE = 10;
    /**
     * A Dataplex zone.
     *
     * Generated from protobuf enum <code>ZONE = 11;</code>
     */
    const ZONE = 11;
    /**
     * A service, for example, a Dataproc Metastore service.
     *
     * Generated from protobuf enum <code>SERVICE = 14;</code>
     */
    const SERVICE = 14;

    private static $valueToName = [
        self::ENTRY_TYPE_UNSPECIFIED => 'ENTRY_TYPE_UNSPECIFIED',
        self::TABLE => 'TABLE',
        self::MODEL => 'MODEL',
        self::DATA_STREAM => 'DATA_STREAM',
        self::FILESET => 'FILESET',
        self::CLUSTER => 'CLUSTER',
        self::DATABASE => 'DATABASE',
        self::DATA_SOURCE_CONNECTION => 'DATA_SOURCE_CONNECTION',
        self::ROUTINE => 'ROUTINE',
        self::LAKE => 'LAKE',
        self::ZONE => 'ZONE',
        self::SERVICE => 'SERVICE',
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

