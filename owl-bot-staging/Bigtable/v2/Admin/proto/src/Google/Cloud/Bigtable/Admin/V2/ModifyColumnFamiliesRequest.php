<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [google.bigtable.admin.v2.BigtableTableAdmin.ModifyColumnFamilies][google.bigtable.admin.v2.BigtableTableAdmin.ModifyColumnFamilies]
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.ModifyColumnFamiliesRequest</code>
 */
class ModifyColumnFamiliesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique name of the table whose families should be modified.
     * Values are of the form
     * `projects/{project}/instances/{instance}/tables/{table}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. Modifications to be atomically applied to the specified table's families.
     * Entries are applied in order, meaning that earlier modifications can be
     * masked by later ones (in the case of repeated updates to the same family,
     * for example).
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.ModifyColumnFamiliesRequest.Modification modifications = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $modifications;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The unique name of the table whose families should be modified.
     *           Values are of the form
     *           `projects/{project}/instances/{instance}/tables/{table}`.
     *     @type \Google\Cloud\Bigtable\Admin\V2\ModifyColumnFamiliesRequest\Modification[]|\Google\Protobuf\Internal\RepeatedField $modifications
     *           Required. Modifications to be atomically applied to the specified table's families.
     *           Entries are applied in order, meaning that earlier modifications can be
     *           masked by later ones (in the case of repeated updates to the same family,
     *           for example).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique name of the table whose families should be modified.
     * Values are of the form
     * `projects/{project}/instances/{instance}/tables/{table}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The unique name of the table whose families should be modified.
     * Values are of the form
     * `projects/{project}/instances/{instance}/tables/{table}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. Modifications to be atomically applied to the specified table's families.
     * Entries are applied in order, meaning that earlier modifications can be
     * masked by later ones (in the case of repeated updates to the same family,
     * for example).
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.ModifyColumnFamiliesRequest.Modification modifications = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModifications()
    {
        return $this->modifications;
    }

    /**
     * Required. Modifications to be atomically applied to the specified table's families.
     * Entries are applied in order, meaning that earlier modifications can be
     * masked by later ones (in the case of repeated updates to the same family,
     * for example).
     *
     * Generated from protobuf field <code>repeated .google.bigtable.admin.v2.ModifyColumnFamiliesRequest.Modification modifications = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\ModifyColumnFamiliesRequest\Modification[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModifications($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\Admin\V2\ModifyColumnFamiliesRequest\Modification::class);
        $this->modifications = $arr;

        return $this;
    }

}

