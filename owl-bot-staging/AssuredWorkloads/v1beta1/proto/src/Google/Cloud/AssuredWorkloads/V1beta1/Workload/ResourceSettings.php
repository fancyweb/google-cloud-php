<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/assuredworkloads/v1beta1/assuredworkloads.proto

namespace Google\Cloud\AssuredWorkloads\V1beta1\Workload;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represent the custom settings for the resources to be created.
 *
 * Generated from protobuf message <code>google.cloud.assuredworkloads.v1beta1.Workload.ResourceSettings</code>
 */
class ResourceSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource identifier.
     * For a project this represents project_id. If the project is already
     * taken, the workload creation will fail.
     *
     * Generated from protobuf field <code>string resource_id = 1;</code>
     */
    protected $resource_id = '';
    /**
     * Indicates the type of resource. This field should be specified to
     * correspond the id to the right project type (CONSUMER_PROJECT or
     * ENCRYPTION_KEYS_PROJECT)
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.ResourceInfo.ResourceType resource_type = 2;</code>
     */
    protected $resource_type = 0;
    /**
     * User-assigned resource display name.
     * If not empty it will be used to create a resource with the specified
     * name.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    protected $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_id
     *           Resource identifier.
     *           For a project this represents project_id. If the project is already
     *           taken, the workload creation will fail.
     *     @type int $resource_type
     *           Indicates the type of resource. This field should be specified to
     *           correspond the id to the right project type (CONSUMER_PROJECT or
     *           ENCRYPTION_KEYS_PROJECT)
     *     @type string $display_name
     *           User-assigned resource display name.
     *           If not empty it will be used to create a resource with the specified
     *           name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Assuredworkloads\V1Beta1\Assuredworkloads::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource identifier.
     * For a project this represents project_id. If the project is already
     * taken, the workload creation will fail.
     *
     * Generated from protobuf field <code>string resource_id = 1;</code>
     * @return string
     */
    public function getResourceId()
    {
        return $this->resource_id;
    }

    /**
     * Resource identifier.
     * For a project this represents project_id. If the project is already
     * taken, the workload creation will fail.
     *
     * Generated from protobuf field <code>string resource_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_id = $var;

        return $this;
    }

    /**
     * Indicates the type of resource. This field should be specified to
     * correspond the id to the right project type (CONSUMER_PROJECT or
     * ENCRYPTION_KEYS_PROJECT)
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.ResourceInfo.ResourceType resource_type = 2;</code>
     * @return int
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * Indicates the type of resource. This field should be specified to
     * correspond the id to the right project type (CONSUMER_PROJECT or
     * ENCRYPTION_KEYS_PROJECT)
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.ResourceInfo.ResourceType resource_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setResourceType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AssuredWorkloads\V1beta1\Workload\ResourceInfo\ResourceType::class);
        $this->resource_type = $var;

        return $this;
    }

    /**
     * User-assigned resource display name.
     * If not empty it will be used to create a resource with the specified
     * name.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * User-assigned resource display name.
     * If not empty it will be used to create a resource with the specified
     * name.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResourceSettings::class, \Google\Cloud\AssuredWorkloads\V1beta1\Workload_ResourceSettings::class);

