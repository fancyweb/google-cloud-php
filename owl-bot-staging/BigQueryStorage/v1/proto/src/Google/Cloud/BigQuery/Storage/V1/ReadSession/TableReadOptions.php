<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/stream.proto

namespace Google\Cloud\BigQuery\Storage\V1\ReadSession;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options dictating how we read a table.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.ReadSession.TableReadOptions</code>
 */
class TableReadOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Names of the fields in the table that should be read. If empty, all
     * fields will be read. If the specified field is a nested field, all
     * the sub-fields in the field will be selected. The output field order is
     * unrelated to the order of fields in selected_fields.
     *
     * Generated from protobuf field <code>repeated string selected_fields = 1;</code>
     */
    private $selected_fields;
    /**
     * SQL text filtering statement, similar to a WHERE clause in a query.
     * Aggregates are not supported.
     * Examples: "int_field > 5"
     *           "date_field = CAST('2014-9-27' as DATE)"
     *           "nullable_field is not NULL"
     *           "st_equals(geo_field, st_geofromtext("POINT(2, 2)"))"
     *           "numeric_field BETWEEN 1.0 AND 5.0"
     * Restricted to a maximum length for 1 MB.
     *
     * Generated from protobuf field <code>string row_restriction = 2;</code>
     */
    protected $row_restriction = '';
    protected $output_format_serialization_options;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $selected_fields
     *           Names of the fields in the table that should be read. If empty, all
     *           fields will be read. If the specified field is a nested field, all
     *           the sub-fields in the field will be selected. The output field order is
     *           unrelated to the order of fields in selected_fields.
     *     @type string $row_restriction
     *           SQL text filtering statement, similar to a WHERE clause in a query.
     *           Aggregates are not supported.
     *           Examples: "int_field > 5"
     *                     "date_field = CAST('2014-9-27' as DATE)"
     *                     "nullable_field is not NULL"
     *                     "st_equals(geo_field, st_geofromtext("POINT(2, 2)"))"
     *                     "numeric_field BETWEEN 1.0 AND 5.0"
     *           Restricted to a maximum length for 1 MB.
     *     @type \Google\Cloud\BigQuery\Storage\V1\ArrowSerializationOptions $arrow_serialization_options
     *           Optional. Options specific to the Apache Arrow output format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Stream::initOnce();
        parent::__construct($data);
    }

    /**
     * Names of the fields in the table that should be read. If empty, all
     * fields will be read. If the specified field is a nested field, all
     * the sub-fields in the field will be selected. The output field order is
     * unrelated to the order of fields in selected_fields.
     *
     * Generated from protobuf field <code>repeated string selected_fields = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSelectedFields()
    {
        return $this->selected_fields;
    }

    /**
     * Names of the fields in the table that should be read. If empty, all
     * fields will be read. If the specified field is a nested field, all
     * the sub-fields in the field will be selected. The output field order is
     * unrelated to the order of fields in selected_fields.
     *
     * Generated from protobuf field <code>repeated string selected_fields = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSelectedFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->selected_fields = $arr;

        return $this;
    }

    /**
     * SQL text filtering statement, similar to a WHERE clause in a query.
     * Aggregates are not supported.
     * Examples: "int_field > 5"
     *           "date_field = CAST('2014-9-27' as DATE)"
     *           "nullable_field is not NULL"
     *           "st_equals(geo_field, st_geofromtext("POINT(2, 2)"))"
     *           "numeric_field BETWEEN 1.0 AND 5.0"
     * Restricted to a maximum length for 1 MB.
     *
     * Generated from protobuf field <code>string row_restriction = 2;</code>
     * @return string
     */
    public function getRowRestriction()
    {
        return $this->row_restriction;
    }

    /**
     * SQL text filtering statement, similar to a WHERE clause in a query.
     * Aggregates are not supported.
     * Examples: "int_field > 5"
     *           "date_field = CAST('2014-9-27' as DATE)"
     *           "nullable_field is not NULL"
     *           "st_equals(geo_field, st_geofromtext("POINT(2, 2)"))"
     *           "numeric_field BETWEEN 1.0 AND 5.0"
     * Restricted to a maximum length for 1 MB.
     *
     * Generated from protobuf field <code>string row_restriction = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRowRestriction($var)
    {
        GPBUtil::checkString($var, True);
        $this->row_restriction = $var;

        return $this;
    }

    /**
     * Optional. Options specific to the Apache Arrow output format.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.ArrowSerializationOptions arrow_serialization_options = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\BigQuery\Storage\V1\ArrowSerializationOptions|null
     */
    public function getArrowSerializationOptions()
    {
        return $this->readOneof(3);
    }

    public function hasArrowSerializationOptions()
    {
        return $this->hasOneof(3);
    }

    /**
     * Optional. Options specific to the Apache Arrow output format.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.ArrowSerializationOptions arrow_serialization_options = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\ArrowSerializationOptions $var
     * @return $this
     */
    public function setArrowSerializationOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Storage\V1\ArrowSerializationOptions::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOutputFormatSerializationOptions()
    {
        return $this->whichOneof("output_format_serialization_options");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TableReadOptions::class, \Google\Cloud\BigQuery\Storage\V1\ReadSession_TableReadOptions::class);

