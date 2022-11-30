<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/admin/v1/migration.proto

namespace Google\Cloud\Datastore\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An event signifying a change in state of a [migration from Cloud Datastore to
 * Cloud Firestore in Datastore
 * mode](https://cloud.google.com/datastore/docs/upgrade-to-firestore).
 *
 * Generated from protobuf message <code>google.datastore.admin.v1.MigrationStateEvent</code>
 */
class MigrationStateEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * The new state of the migration.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.MigrationState state = 1;</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           The new state of the migration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\Admin\V1\Migration::initOnce();
        parent::__construct($data);
    }

    /**
     * The new state of the migration.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.MigrationState state = 1;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The new state of the migration.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.MigrationState state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Datastore\Admin\V1\MigrationState::class);
        $this->state = $var;

        return $this;
    }

}

