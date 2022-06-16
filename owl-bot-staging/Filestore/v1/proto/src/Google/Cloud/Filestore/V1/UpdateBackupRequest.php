<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/filestore/v1/cloud_filestore_service.proto

namespace Google\Cloud\Filestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * UpdateBackupRequest updates description and/or labels for a backup.
 *
 * Generated from protobuf message <code>google.cloud.filestore.v1.UpdateBackupRequest</code>
 */
class UpdateBackupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A [backup resource][google.cloud.filestore.v1.Backup]
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Backup backup = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $backup = null;
    /**
     * Required. Mask of fields to update.  At least one path must be supplied in
     * this field.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Filestore\V1\Backup $backup
     *           Required. A [backup resource][google.cloud.filestore.v1.Backup]
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Mask of fields to update.  At least one path must be supplied in
     *           this field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Filestore\V1\CloudFilestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A [backup resource][google.cloud.filestore.v1.Backup]
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Backup backup = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Filestore\V1\Backup|null
     */
    public function getBackup()
    {
        return $this->backup;
    }

    public function hasBackup()
    {
        return isset($this->backup);
    }

    public function clearBackup()
    {
        unset($this->backup);
    }

    /**
     * Required. A [backup resource][google.cloud.filestore.v1.Backup]
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Backup backup = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Filestore\V1\Backup $var
     * @return $this
     */
    public function setBackup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Filestore\V1\Backup::class);
        $this->backup = $var;

        return $this;
    }

    /**
     * Required. Mask of fields to update.  At least one path must be supplied in
     * this field.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Mask of fields to update.  At least one path must be supplied in
     * this field.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

