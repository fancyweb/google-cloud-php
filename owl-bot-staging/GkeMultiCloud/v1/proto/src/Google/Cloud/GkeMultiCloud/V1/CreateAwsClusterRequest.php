<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/aws_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `AwsClusters.CreateAwsCluster` method.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.CreateAwsClusterRequest</code>
 */
class CreateAwsClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent location where this [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] resource
     * will be created.
     * Location names are formatted as `projects/<project-id>/locations/<region>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The specification of the [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] to create.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsCluster aws_cluster = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $aws_cluster = null;
    /**
     * Required. A client provided ID the resource. Must be unique within the parent
     * resource.
     * The provided ID will be part of the [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]
     * resource name formatted as
     * `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>`.
     * Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 40 characters.
     *
     * Generated from protobuf field <code>string aws_cluster_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $aws_cluster_id = '';
    /**
     * If set, only validate the request, but do not actually create the cluster.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     */
    protected $validate_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent location where this [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] resource
     *           will be created.
     *           Location names are formatted as `projects/<project-id>/locations/<region>`.
     *           See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *           for more details on Google Cloud resource names.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AwsCluster $aws_cluster
     *           Required. The specification of the [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] to create.
     *     @type string $aws_cluster_id
     *           Required. A client provided ID the resource. Must be unique within the parent
     *           resource.
     *           The provided ID will be part of the [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]
     *           resource name formatted as
     *           `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>`.
     *           Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 40 characters.
     *     @type bool $validate_only
     *           If set, only validate the request, but do not actually create the cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AwsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent location where this [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] resource
     * will be created.
     * Location names are formatted as `projects/<project-id>/locations/<region>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent location where this [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] resource
     * will be created.
     * Location names are formatted as `projects/<project-id>/locations/<region>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The specification of the [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] to create.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsCluster aws_cluster = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AwsCluster|null
     */
    public function getAwsCluster()
    {
        return $this->aws_cluster;
    }

    public function hasAwsCluster()
    {
        return isset($this->aws_cluster);
    }

    public function clearAwsCluster()
    {
        unset($this->aws_cluster);
    }

    /**
     * Required. The specification of the [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] to create.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsCluster aws_cluster = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AwsCluster $var
     * @return $this
     */
    public function setAwsCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AwsCluster::class);
        $this->aws_cluster = $var;

        return $this;
    }

    /**
     * Required. A client provided ID the resource. Must be unique within the parent
     * resource.
     * The provided ID will be part of the [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]
     * resource name formatted as
     * `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>`.
     * Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 40 characters.
     *
     * Generated from protobuf field <code>string aws_cluster_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAwsClusterId()
    {
        return $this->aws_cluster_id;
    }

    /**
     * Required. A client provided ID the resource. Must be unique within the parent
     * resource.
     * The provided ID will be part of the [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster]
     * resource name formatted as
     * `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>`.
     * Valid characters are `/[a-z][0-9]-/`. Cannot be longer than 40 characters.
     *
     * Generated from protobuf field <code>string aws_cluster_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAwsClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->aws_cluster_id = $var;

        return $this;
    }

    /**
     * If set, only validate the request, but do not actually create the cluster.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If set, only validate the request, but do not actually create the cluster.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

