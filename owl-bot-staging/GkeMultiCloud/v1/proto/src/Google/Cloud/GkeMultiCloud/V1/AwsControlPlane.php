<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/aws_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ControlPlane defines common parameters between control plane nodes.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AwsControlPlane</code>
 */
class AwsControlPlane extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Kubernetes version to run on control plane replicas
     * (e.g. `1.19.10-gke.1000`).
     * You can list all supported versions on a given Google Cloud region by
     * calling
     * [GetAwsServerConfig][google.cloud.gkemulticloud.v1.AwsClusters.GetAwsServerConfig].
     *
     * Generated from protobuf field <code>string version = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $version = '';
    /**
     * Optional. The AWS instance type.
     * When unspecified, it uses a default based on the cluster's version.
     *
     * Generated from protobuf field <code>string instance_type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $instance_type = '';
    /**
     * Optional. SSH configuration for how to access the underlying control plane
     * machines.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsSshConfig ssh_config = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $ssh_config = null;
    /**
     * Required. The list of subnets where control plane replicas will run.
     * A replica will be provisioned on each subnet and up to three values
     * can be provided.
     * Each subnet must be in a different AWS Availability Zone (AZ).
     *
     * Generated from protobuf field <code>repeated string subnet_ids = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $subnet_ids;
    /**
     * Optional. The IDs of additional security groups to add to control plane
     * replicas. The Anthos Multi-Cloud API will automatically create and manage
     * security groups with the minimum rules needed for a functioning cluster.
     *
     * Generated from protobuf field <code>repeated string security_group_ids = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $security_group_ids;
    /**
     * Required. The name or ARN of the AWS IAM instance profile to assign to each control
     * plane replica.
     *
     * Generated from protobuf field <code>string iam_instance_profile = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $iam_instance_profile = '';
    /**
     * Optional. Configuration related to the root volume provisioned for each
     * control plane replica.
     * Volumes will be provisioned in the availability zone associated
     * with the corresponding subnet.
     * When unspecified, it defaults to 32 GiB with the GP2 volume type.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsVolumeTemplate root_volume = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $root_volume = null;
    /**
     * Optional. Configuration related to the main volume provisioned for each
     * control plane replica.
     * The main volume is in charge of storing all of the cluster's etcd state.
     * Volumes will be provisioned in the availability zone associated
     * with the corresponding subnet.
     * When unspecified, it defaults to 8 GiB with the GP2 volume type.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsVolumeTemplate main_volume = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $main_volume = null;
    /**
     * Required. The ARN of the AWS KMS key used to encrypt cluster secrets.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsDatabaseEncryption database_encryption = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $database_encryption = null;
    /**
     * Optional. A set of AWS resource tags to propagate to all underlying managed AWS
     * resources.
     * Specify at most 50 pairs containing alphanumerics, spaces, and symbols
     * (.+-=_:&#64;/). Keys can be up to 127 Unicode characters. Values can be up to
     * 255 Unicode characters.
     *
     * Generated from protobuf field <code>map<string, string> tags = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $tags;
    /**
     * Required. Authentication configuration for management of AWS resources.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsServicesAuthentication aws_services_authentication = 12 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $aws_services_authentication = null;
    /**
     * Optional. Proxy configuration for outbound HTTP(S) traffic.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsProxyConfig proxy_config = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $proxy_config = null;
    /**
     * Required. Config encryption for user data.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsConfigEncryption config_encryption = 17 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $config_encryption = null;
    /**
     * Optional. The placement to use on control plane instances.
     * When unspecified, the VPC's default tenancy will be used.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsInstancePlacement instance_placement = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $instance_placement = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *           Required. The Kubernetes version to run on control plane replicas
     *           (e.g. `1.19.10-gke.1000`).
     *           You can list all supported versions on a given Google Cloud region by
     *           calling
     *           [GetAwsServerConfig][google.cloud.gkemulticloud.v1.AwsClusters.GetAwsServerConfig].
     *     @type string $instance_type
     *           Optional. The AWS instance type.
     *           When unspecified, it uses a default based on the cluster's version.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AwsSshConfig $ssh_config
     *           Optional. SSH configuration for how to access the underlying control plane
     *           machines.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $subnet_ids
     *           Required. The list of subnets where control plane replicas will run.
     *           A replica will be provisioned on each subnet and up to three values
     *           can be provided.
     *           Each subnet must be in a different AWS Availability Zone (AZ).
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $security_group_ids
     *           Optional. The IDs of additional security groups to add to control plane
     *           replicas. The Anthos Multi-Cloud API will automatically create and manage
     *           security groups with the minimum rules needed for a functioning cluster.
     *     @type string $iam_instance_profile
     *           Required. The name or ARN of the AWS IAM instance profile to assign to each control
     *           plane replica.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AwsVolumeTemplate $root_volume
     *           Optional. Configuration related to the root volume provisioned for each
     *           control plane replica.
     *           Volumes will be provisioned in the availability zone associated
     *           with the corresponding subnet.
     *           When unspecified, it defaults to 32 GiB with the GP2 volume type.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AwsVolumeTemplate $main_volume
     *           Optional. Configuration related to the main volume provisioned for each
     *           control plane replica.
     *           The main volume is in charge of storing all of the cluster's etcd state.
     *           Volumes will be provisioned in the availability zone associated
     *           with the corresponding subnet.
     *           When unspecified, it defaults to 8 GiB with the GP2 volume type.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AwsDatabaseEncryption $database_encryption
     *           Required. The ARN of the AWS KMS key used to encrypt cluster secrets.
     *     @type array|\Google\Protobuf\Internal\MapField $tags
     *           Optional. A set of AWS resource tags to propagate to all underlying managed AWS
     *           resources.
     *           Specify at most 50 pairs containing alphanumerics, spaces, and symbols
     *           (.+-=_:&#64;/). Keys can be up to 127 Unicode characters. Values can be up to
     *           255 Unicode characters.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AwsServicesAuthentication $aws_services_authentication
     *           Required. Authentication configuration for management of AWS resources.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AwsProxyConfig $proxy_config
     *           Optional. Proxy configuration for outbound HTTP(S) traffic.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AwsConfigEncryption $config_encryption
     *           Required. Config encryption for user data.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AwsInstancePlacement $instance_placement
     *           Optional. The placement to use on control plane instances.
     *           When unspecified, the VPC's default tenancy will be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AwsResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Kubernetes version to run on control plane replicas
     * (e.g. `1.19.10-gke.1000`).
     * You can list all supported versions on a given Google Cloud region by
     * calling
     * [GetAwsServerConfig][google.cloud.gkemulticloud.v1.AwsClusters.GetAwsServerConfig].
     *
     * Generated from protobuf field <code>string version = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Required. The Kubernetes version to run on control plane replicas
     * (e.g. `1.19.10-gke.1000`).
     * You can list all supported versions on a given Google Cloud region by
     * calling
     * [GetAwsServerConfig][google.cloud.gkemulticloud.v1.AwsClusters.GetAwsServerConfig].
     *
     * Generated from protobuf field <code>string version = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Optional. The AWS instance type.
     * When unspecified, it uses a default based on the cluster's version.
     *
     * Generated from protobuf field <code>string instance_type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getInstanceType()
    {
        return $this->instance_type;
    }

    /**
     * Optional. The AWS instance type.
     * When unspecified, it uses a default based on the cluster's version.
     *
     * Generated from protobuf field <code>string instance_type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_type = $var;

        return $this;
    }

    /**
     * Optional. SSH configuration for how to access the underlying control plane
     * machines.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsSshConfig ssh_config = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AwsSshConfig|null
     */
    public function getSshConfig()
    {
        return $this->ssh_config;
    }

    public function hasSshConfig()
    {
        return isset($this->ssh_config);
    }

    public function clearSshConfig()
    {
        unset($this->ssh_config);
    }

    /**
     * Optional. SSH configuration for how to access the underlying control plane
     * machines.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsSshConfig ssh_config = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AwsSshConfig $var
     * @return $this
     */
    public function setSshConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AwsSshConfig::class);
        $this->ssh_config = $var;

        return $this;
    }

    /**
     * Required. The list of subnets where control plane replicas will run.
     * A replica will be provisioned on each subnet and up to three values
     * can be provided.
     * Each subnet must be in a different AWS Availability Zone (AZ).
     *
     * Generated from protobuf field <code>repeated string subnet_ids = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubnetIds()
    {
        return $this->subnet_ids;
    }

    /**
     * Required. The list of subnets where control plane replicas will run.
     * A replica will be provisioned on each subnet and up to three values
     * can be provided.
     * Each subnet must be in a different AWS Availability Zone (AZ).
     *
     * Generated from protobuf field <code>repeated string subnet_ids = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubnetIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->subnet_ids = $arr;

        return $this;
    }

    /**
     * Optional. The IDs of additional security groups to add to control plane
     * replicas. The Anthos Multi-Cloud API will automatically create and manage
     * security groups with the minimum rules needed for a functioning cluster.
     *
     * Generated from protobuf field <code>repeated string security_group_ids = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecurityGroupIds()
    {
        return $this->security_group_ids;
    }

    /**
     * Optional. The IDs of additional security groups to add to control plane
     * replicas. The Anthos Multi-Cloud API will automatically create and manage
     * security groups with the minimum rules needed for a functioning cluster.
     *
     * Generated from protobuf field <code>repeated string security_group_ids = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecurityGroupIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->security_group_ids = $arr;

        return $this;
    }

    /**
     * Required. The name or ARN of the AWS IAM instance profile to assign to each control
     * plane replica.
     *
     * Generated from protobuf field <code>string iam_instance_profile = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getIamInstanceProfile()
    {
        return $this->iam_instance_profile;
    }

    /**
     * Required. The name or ARN of the AWS IAM instance profile to assign to each control
     * plane replica.
     *
     * Generated from protobuf field <code>string iam_instance_profile = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setIamInstanceProfile($var)
    {
        GPBUtil::checkString($var, True);
        $this->iam_instance_profile = $var;

        return $this;
    }

    /**
     * Optional. Configuration related to the root volume provisioned for each
     * control plane replica.
     * Volumes will be provisioned in the availability zone associated
     * with the corresponding subnet.
     * When unspecified, it defaults to 32 GiB with the GP2 volume type.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsVolumeTemplate root_volume = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AwsVolumeTemplate|null
     */
    public function getRootVolume()
    {
        return $this->root_volume;
    }

    public function hasRootVolume()
    {
        return isset($this->root_volume);
    }

    public function clearRootVolume()
    {
        unset($this->root_volume);
    }

    /**
     * Optional. Configuration related to the root volume provisioned for each
     * control plane replica.
     * Volumes will be provisioned in the availability zone associated
     * with the corresponding subnet.
     * When unspecified, it defaults to 32 GiB with the GP2 volume type.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsVolumeTemplate root_volume = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AwsVolumeTemplate $var
     * @return $this
     */
    public function setRootVolume($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AwsVolumeTemplate::class);
        $this->root_volume = $var;

        return $this;
    }

    /**
     * Optional. Configuration related to the main volume provisioned for each
     * control plane replica.
     * The main volume is in charge of storing all of the cluster's etcd state.
     * Volumes will be provisioned in the availability zone associated
     * with the corresponding subnet.
     * When unspecified, it defaults to 8 GiB with the GP2 volume type.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsVolumeTemplate main_volume = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AwsVolumeTemplate|null
     */
    public function getMainVolume()
    {
        return $this->main_volume;
    }

    public function hasMainVolume()
    {
        return isset($this->main_volume);
    }

    public function clearMainVolume()
    {
        unset($this->main_volume);
    }

    /**
     * Optional. Configuration related to the main volume provisioned for each
     * control plane replica.
     * The main volume is in charge of storing all of the cluster's etcd state.
     * Volumes will be provisioned in the availability zone associated
     * with the corresponding subnet.
     * When unspecified, it defaults to 8 GiB with the GP2 volume type.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsVolumeTemplate main_volume = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AwsVolumeTemplate $var
     * @return $this
     */
    public function setMainVolume($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AwsVolumeTemplate::class);
        $this->main_volume = $var;

        return $this;
    }

    /**
     * Required. The ARN of the AWS KMS key used to encrypt cluster secrets.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsDatabaseEncryption database_encryption = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AwsDatabaseEncryption|null
     */
    public function getDatabaseEncryption()
    {
        return $this->database_encryption;
    }

    public function hasDatabaseEncryption()
    {
        return isset($this->database_encryption);
    }

    public function clearDatabaseEncryption()
    {
        unset($this->database_encryption);
    }

    /**
     * Required. The ARN of the AWS KMS key used to encrypt cluster secrets.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsDatabaseEncryption database_encryption = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AwsDatabaseEncryption $var
     * @return $this
     */
    public function setDatabaseEncryption($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AwsDatabaseEncryption::class);
        $this->database_encryption = $var;

        return $this;
    }

    /**
     * Optional. A set of AWS resource tags to propagate to all underlying managed AWS
     * resources.
     * Specify at most 50 pairs containing alphanumerics, spaces, and symbols
     * (.+-=_:&#64;/). Keys can be up to 127 Unicode characters. Values can be up to
     * 255 Unicode characters.
     *
     * Generated from protobuf field <code>map<string, string> tags = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Optional. A set of AWS resource tags to propagate to all underlying managed AWS
     * resources.
     * Specify at most 50 pairs containing alphanumerics, spaces, and symbols
     * (.+-=_:&#64;/). Keys can be up to 127 Unicode characters. Values can be up to
     * 255 Unicode characters.
     *
     * Generated from protobuf field <code>map<string, string> tags = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

    /**
     * Required. Authentication configuration for management of AWS resources.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsServicesAuthentication aws_services_authentication = 12 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AwsServicesAuthentication|null
     */
    public function getAwsServicesAuthentication()
    {
        return $this->aws_services_authentication;
    }

    public function hasAwsServicesAuthentication()
    {
        return isset($this->aws_services_authentication);
    }

    public function clearAwsServicesAuthentication()
    {
        unset($this->aws_services_authentication);
    }

    /**
     * Required. Authentication configuration for management of AWS resources.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsServicesAuthentication aws_services_authentication = 12 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AwsServicesAuthentication $var
     * @return $this
     */
    public function setAwsServicesAuthentication($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AwsServicesAuthentication::class);
        $this->aws_services_authentication = $var;

        return $this;
    }

    /**
     * Optional. Proxy configuration for outbound HTTP(S) traffic.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsProxyConfig proxy_config = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AwsProxyConfig|null
     */
    public function getProxyConfig()
    {
        return $this->proxy_config;
    }

    public function hasProxyConfig()
    {
        return isset($this->proxy_config);
    }

    public function clearProxyConfig()
    {
        unset($this->proxy_config);
    }

    /**
     * Optional. Proxy configuration for outbound HTTP(S) traffic.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsProxyConfig proxy_config = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AwsProxyConfig $var
     * @return $this
     */
    public function setProxyConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AwsProxyConfig::class);
        $this->proxy_config = $var;

        return $this;
    }

    /**
     * Required. Config encryption for user data.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsConfigEncryption config_encryption = 17 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AwsConfigEncryption|null
     */
    public function getConfigEncryption()
    {
        return $this->config_encryption;
    }

    public function hasConfigEncryption()
    {
        return isset($this->config_encryption);
    }

    public function clearConfigEncryption()
    {
        unset($this->config_encryption);
    }

    /**
     * Required. Config encryption for user data.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsConfigEncryption config_encryption = 17 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AwsConfigEncryption $var
     * @return $this
     */
    public function setConfigEncryption($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AwsConfigEncryption::class);
        $this->config_encryption = $var;

        return $this;
    }

    /**
     * Optional. The placement to use on control plane instances.
     * When unspecified, the VPC's default tenancy will be used.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsInstancePlacement instance_placement = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AwsInstancePlacement|null
     */
    public function getInstancePlacement()
    {
        return $this->instance_placement;
    }

    public function hasInstancePlacement()
    {
        return isset($this->instance_placement);
    }

    public function clearInstancePlacement()
    {
        unset($this->instance_placement);
    }

    /**
     * Optional. The placement to use on control plane instances.
     * When unspecified, the VPC's default tenancy will be used.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsInstancePlacement instance_placement = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AwsInstancePlacement $var
     * @return $this
     */
    public function setInstancePlacement($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AwsInstancePlacement::class);
        $this->instance_placement = $var;

        return $this;
    }

}

