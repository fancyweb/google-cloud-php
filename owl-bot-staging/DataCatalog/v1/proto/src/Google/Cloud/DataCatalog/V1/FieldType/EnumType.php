<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/tags.proto

namespace Google\Cloud\DataCatalog\V1\FieldType;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.FieldType.EnumType</code>
 */
class EnumType extends \Google\Protobuf\Internal\Message
{
    /**
     * The set of allowed values for this enum.
     * This set must not be empty and can include up to 100 allowed values.
     * The display names of the values in this set must not be empty and must
     * be case-insensitively unique within this set.
     * The order of items in this set is preserved. This field can be used to
     * create, remove, and reorder enum values. To rename enum values, use the
     * `RenameTagTemplateFieldEnumValue` method.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.FieldType.EnumType.EnumValue allowed_values = 1;</code>
     */
    private $allowed_values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DataCatalog\V1\FieldType\EnumType\EnumValue>|\Google\Protobuf\Internal\RepeatedField $allowed_values
     *           The set of allowed values for this enum.
     *           This set must not be empty and can include up to 100 allowed values.
     *           The display names of the values in this set must not be empty and must
     *           be case-insensitively unique within this set.
     *           The order of items in this set is preserved. This field can be used to
     *           create, remove, and reorder enum values. To rename enum values, use the
     *           `RenameTagTemplateFieldEnumValue` method.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Tags::initOnce();
        parent::__construct($data);
    }

    /**
     * The set of allowed values for this enum.
     * This set must not be empty and can include up to 100 allowed values.
     * The display names of the values in this set must not be empty and must
     * be case-insensitively unique within this set.
     * The order of items in this set is preserved. This field can be used to
     * create, remove, and reorder enum values. To rename enum values, use the
     * `RenameTagTemplateFieldEnumValue` method.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.FieldType.EnumType.EnumValue allowed_values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedValues()
    {
        return $this->allowed_values;
    }

    /**
     * The set of allowed values for this enum.
     * This set must not be empty and can include up to 100 allowed values.
     * The display names of the values in this set must not be empty and must
     * be case-insensitively unique within this set.
     * The order of items in this set is preserved. This field can be used to
     * create, remove, and reorder enum values. To rename enum values, use the
     * `RenameTagTemplateFieldEnumValue` method.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.FieldType.EnumType.EnumValue allowed_values = 1;</code>
     * @param array<\Google\Cloud\DataCatalog\V1\FieldType\EnumType\EnumValue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataCatalog\V1\FieldType\EnumType\EnumValue::class);
        $this->allowed_values = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EnumType::class, \Google\Cloud\DataCatalog\V1\FieldType_EnumType::class);

