<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for running a transfer.
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.TransferSpec</code>
 */
class TransferSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Only objects that satisfy these object conditions are included in the set
     * of data source and data sink objects.  Object conditions based on
     * objects' "last modification time" do not exclude objects in a data sink.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.ObjectConditions object_conditions = 5;</code>
     */
    protected $object_conditions = null;
    /**
     * If the option
     * [delete_objects_unique_in_sink][google.storagetransfer.v1.TransferOptions.delete_objects_unique_in_sink]
     * is `true` and time-based object conditions such as 'last modification time'
     * are specified, the request fails with an
     * [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT] error.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferOptions transfer_options = 6;</code>
     */
    protected $transfer_options = null;
    /**
     * A manifest file provides a list of objects to be transferred from the data
     * source. This field points to the location of the manifest file.
     * Otherwise, the entire source bucket is used. ObjectConditions still apply.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferManifest transfer_manifest = 15;</code>
     */
    protected $transfer_manifest = null;
    /**
     * Specifies the agent pool name associated with the posix data source. When
     * unspecified, the default name is used.
     *
     * Generated from protobuf field <code>string source_agent_pool_name = 17;</code>
     */
    protected $source_agent_pool_name = '';
    /**
     * Specifies the agent pool name associated with the posix data sink. When
     * unspecified, the default name is used.
     *
     * Generated from protobuf field <code>string sink_agent_pool_name = 18;</code>
     */
    protected $sink_agent_pool_name = '';
    protected $data_sink;
    protected $data_source;
    protected $intermediate_data_location;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\StorageTransfer\V1\GcsData $gcs_data_sink
     *           A Cloud Storage data sink.
     *     @type \Google\Cloud\StorageTransfer\V1\PosixFilesystem $posix_data_sink
     *           A POSIX Filesystem data sink.
     *     @type \Google\Cloud\StorageTransfer\V1\GcsData $gcs_data_source
     *           A Cloud Storage data source.
     *     @type \Google\Cloud\StorageTransfer\V1\AwsS3Data $aws_s3_data_source
     *           An AWS S3 data source.
     *     @type \Google\Cloud\StorageTransfer\V1\HttpData $http_data_source
     *           An HTTP URL data source.
     *     @type \Google\Cloud\StorageTransfer\V1\PosixFilesystem $posix_data_source
     *           A POSIX Filesystem data source.
     *     @type \Google\Cloud\StorageTransfer\V1\AzureBlobStorageData $azure_blob_storage_data_source
     *           An Azure Blob Storage data source.
     *     @type \Google\Cloud\StorageTransfer\V1\AwsS3CompatibleData $aws_s3_compatible_data_source
     *           An AWS S3 compatible data source.
     *     @type \Google\Cloud\StorageTransfer\V1\GcsData $gcs_intermediate_data_location
     *           Cloud Storage intermediate data location.
     *     @type \Google\Cloud\StorageTransfer\V1\ObjectConditions $object_conditions
     *           Only objects that satisfy these object conditions are included in the set
     *           of data source and data sink objects.  Object conditions based on
     *           objects' "last modification time" do not exclude objects in a data sink.
     *     @type \Google\Cloud\StorageTransfer\V1\TransferOptions $transfer_options
     *           If the option
     *           [delete_objects_unique_in_sink][google.storagetransfer.v1.TransferOptions.delete_objects_unique_in_sink]
     *           is `true` and time-based object conditions such as 'last modification time'
     *           are specified, the request fails with an
     *           [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT] error.
     *     @type \Google\Cloud\StorageTransfer\V1\TransferManifest $transfer_manifest
     *           A manifest file provides a list of objects to be transferred from the data
     *           source. This field points to the location of the manifest file.
     *           Otherwise, the entire source bucket is used. ObjectConditions still apply.
     *     @type string $source_agent_pool_name
     *           Specifies the agent pool name associated with the posix data source. When
     *           unspecified, the default name is used.
     *     @type string $sink_agent_pool_name
     *           Specifies the agent pool name associated with the posix data sink. When
     *           unspecified, the default name is used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * A Cloud Storage data sink.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.GcsData gcs_data_sink = 4;</code>
     * @return \Google\Cloud\StorageTransfer\V1\GcsData|null
     */
    public function getGcsDataSink()
    {
        return $this->readOneof(4);
    }

    public function hasGcsDataSink()
    {
        return $this->hasOneof(4);
    }

    /**
     * A Cloud Storage data sink.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.GcsData gcs_data_sink = 4;</code>
     * @param \Google\Cloud\StorageTransfer\V1\GcsData $var
     * @return $this
     */
    public function setGcsDataSink($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\GcsData::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A POSIX Filesystem data sink.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.PosixFilesystem posix_data_sink = 13;</code>
     * @return \Google\Cloud\StorageTransfer\V1\PosixFilesystem|null
     */
    public function getPosixDataSink()
    {
        return $this->readOneof(13);
    }

    public function hasPosixDataSink()
    {
        return $this->hasOneof(13);
    }

    /**
     * A POSIX Filesystem data sink.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.PosixFilesystem posix_data_sink = 13;</code>
     * @param \Google\Cloud\StorageTransfer\V1\PosixFilesystem $var
     * @return $this
     */
    public function setPosixDataSink($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\PosixFilesystem::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * A Cloud Storage data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.GcsData gcs_data_source = 1;</code>
     * @return \Google\Cloud\StorageTransfer\V1\GcsData|null
     */
    public function getGcsDataSource()
    {
        return $this->readOneof(1);
    }

    public function hasGcsDataSource()
    {
        return $this->hasOneof(1);
    }

    /**
     * A Cloud Storage data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.GcsData gcs_data_source = 1;</code>
     * @param \Google\Cloud\StorageTransfer\V1\GcsData $var
     * @return $this
     */
    public function setGcsDataSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\GcsData::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * An AWS S3 data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AwsS3Data aws_s3_data_source = 2;</code>
     * @return \Google\Cloud\StorageTransfer\V1\AwsS3Data|null
     */
    public function getAwsS3DataSource()
    {
        return $this->readOneof(2);
    }

    public function hasAwsS3DataSource()
    {
        return $this->hasOneof(2);
    }

    /**
     * An AWS S3 data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AwsS3Data aws_s3_data_source = 2;</code>
     * @param \Google\Cloud\StorageTransfer\V1\AwsS3Data $var
     * @return $this
     */
    public function setAwsS3DataSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\AwsS3Data::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * An HTTP URL data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.HttpData http_data_source = 3;</code>
     * @return \Google\Cloud\StorageTransfer\V1\HttpData|null
     */
    public function getHttpDataSource()
    {
        return $this->readOneof(3);
    }

    public function hasHttpDataSource()
    {
        return $this->hasOneof(3);
    }

    /**
     * An HTTP URL data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.HttpData http_data_source = 3;</code>
     * @param \Google\Cloud\StorageTransfer\V1\HttpData $var
     * @return $this
     */
    public function setHttpDataSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\HttpData::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A POSIX Filesystem data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.PosixFilesystem posix_data_source = 14;</code>
     * @return \Google\Cloud\StorageTransfer\V1\PosixFilesystem|null
     */
    public function getPosixDataSource()
    {
        return $this->readOneof(14);
    }

    public function hasPosixDataSource()
    {
        return $this->hasOneof(14);
    }

    /**
     * A POSIX Filesystem data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.PosixFilesystem posix_data_source = 14;</code>
     * @param \Google\Cloud\StorageTransfer\V1\PosixFilesystem $var
     * @return $this
     */
    public function setPosixDataSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\PosixFilesystem::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * An Azure Blob Storage data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AzureBlobStorageData azure_blob_storage_data_source = 8;</code>
     * @return \Google\Cloud\StorageTransfer\V1\AzureBlobStorageData|null
     */
    public function getAzureBlobStorageDataSource()
    {
        return $this->readOneof(8);
    }

    public function hasAzureBlobStorageDataSource()
    {
        return $this->hasOneof(8);
    }

    /**
     * An Azure Blob Storage data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AzureBlobStorageData azure_blob_storage_data_source = 8;</code>
     * @param \Google\Cloud\StorageTransfer\V1\AzureBlobStorageData $var
     * @return $this
     */
    public function setAzureBlobStorageDataSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\AzureBlobStorageData::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * An AWS S3 compatible data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AwsS3CompatibleData aws_s3_compatible_data_source = 19;</code>
     * @return \Google\Cloud\StorageTransfer\V1\AwsS3CompatibleData|null
     */
    public function getAwsS3CompatibleDataSource()
    {
        return $this->readOneof(19);
    }

    public function hasAwsS3CompatibleDataSource()
    {
        return $this->hasOneof(19);
    }

    /**
     * An AWS S3 compatible data source.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AwsS3CompatibleData aws_s3_compatible_data_source = 19;</code>
     * @param \Google\Cloud\StorageTransfer\V1\AwsS3CompatibleData $var
     * @return $this
     */
    public function setAwsS3CompatibleDataSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\AwsS3CompatibleData::class);
        $this->writeOneof(19, $var);

        return $this;
    }

    /**
     * Cloud Storage intermediate data location.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.GcsData gcs_intermediate_data_location = 16;</code>
     * @return \Google\Cloud\StorageTransfer\V1\GcsData|null
     */
    public function getGcsIntermediateDataLocation()
    {
        return $this->readOneof(16);
    }

    public function hasGcsIntermediateDataLocation()
    {
        return $this->hasOneof(16);
    }

    /**
     * Cloud Storage intermediate data location.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.GcsData gcs_intermediate_data_location = 16;</code>
     * @param \Google\Cloud\StorageTransfer\V1\GcsData $var
     * @return $this
     */
    public function setGcsIntermediateDataLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\GcsData::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * Only objects that satisfy these object conditions are included in the set
     * of data source and data sink objects.  Object conditions based on
     * objects' "last modification time" do not exclude objects in a data sink.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.ObjectConditions object_conditions = 5;</code>
     * @return \Google\Cloud\StorageTransfer\V1\ObjectConditions|null
     */
    public function getObjectConditions()
    {
        return $this->object_conditions;
    }

    public function hasObjectConditions()
    {
        return isset($this->object_conditions);
    }

    public function clearObjectConditions()
    {
        unset($this->object_conditions);
    }

    /**
     * Only objects that satisfy these object conditions are included in the set
     * of data source and data sink objects.  Object conditions based on
     * objects' "last modification time" do not exclude objects in a data sink.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.ObjectConditions object_conditions = 5;</code>
     * @param \Google\Cloud\StorageTransfer\V1\ObjectConditions $var
     * @return $this
     */
    public function setObjectConditions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\ObjectConditions::class);
        $this->object_conditions = $var;

        return $this;
    }

    /**
     * If the option
     * [delete_objects_unique_in_sink][google.storagetransfer.v1.TransferOptions.delete_objects_unique_in_sink]
     * is `true` and time-based object conditions such as 'last modification time'
     * are specified, the request fails with an
     * [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT] error.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferOptions transfer_options = 6;</code>
     * @return \Google\Cloud\StorageTransfer\V1\TransferOptions|null
     */
    public function getTransferOptions()
    {
        return $this->transfer_options;
    }

    public function hasTransferOptions()
    {
        return isset($this->transfer_options);
    }

    public function clearTransferOptions()
    {
        unset($this->transfer_options);
    }

    /**
     * If the option
     * [delete_objects_unique_in_sink][google.storagetransfer.v1.TransferOptions.delete_objects_unique_in_sink]
     * is `true` and time-based object conditions such as 'last modification time'
     * are specified, the request fails with an
     * [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT] error.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferOptions transfer_options = 6;</code>
     * @param \Google\Cloud\StorageTransfer\V1\TransferOptions $var
     * @return $this
     */
    public function setTransferOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\TransferOptions::class);
        $this->transfer_options = $var;

        return $this;
    }

    /**
     * A manifest file provides a list of objects to be transferred from the data
     * source. This field points to the location of the manifest file.
     * Otherwise, the entire source bucket is used. ObjectConditions still apply.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferManifest transfer_manifest = 15;</code>
     * @return \Google\Cloud\StorageTransfer\V1\TransferManifest|null
     */
    public function getTransferManifest()
    {
        return $this->transfer_manifest;
    }

    public function hasTransferManifest()
    {
        return isset($this->transfer_manifest);
    }

    public function clearTransferManifest()
    {
        unset($this->transfer_manifest);
    }

    /**
     * A manifest file provides a list of objects to be transferred from the data
     * source. This field points to the location of the manifest file.
     * Otherwise, the entire source bucket is used. ObjectConditions still apply.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.TransferManifest transfer_manifest = 15;</code>
     * @param \Google\Cloud\StorageTransfer\V1\TransferManifest $var
     * @return $this
     */
    public function setTransferManifest($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\TransferManifest::class);
        $this->transfer_manifest = $var;

        return $this;
    }

    /**
     * Specifies the agent pool name associated with the posix data source. When
     * unspecified, the default name is used.
     *
     * Generated from protobuf field <code>string source_agent_pool_name = 17;</code>
     * @return string
     */
    public function getSourceAgentPoolName()
    {
        return $this->source_agent_pool_name;
    }

    /**
     * Specifies the agent pool name associated with the posix data source. When
     * unspecified, the default name is used.
     *
     * Generated from protobuf field <code>string source_agent_pool_name = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceAgentPoolName($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_agent_pool_name = $var;

        return $this;
    }

    /**
     * Specifies the agent pool name associated with the posix data sink. When
     * unspecified, the default name is used.
     *
     * Generated from protobuf field <code>string sink_agent_pool_name = 18;</code>
     * @return string
     */
    public function getSinkAgentPoolName()
    {
        return $this->sink_agent_pool_name;
    }

    /**
     * Specifies the agent pool name associated with the posix data sink. When
     * unspecified, the default name is used.
     *
     * Generated from protobuf field <code>string sink_agent_pool_name = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setSinkAgentPoolName($var)
    {
        GPBUtil::checkString($var, True);
        $this->sink_agent_pool_name = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataSink()
    {
        return $this->whichOneof("data_sink");
    }

    /**
     * @return string
     */
    public function getDataSource()
    {
        return $this->whichOneof("data_source");
    }

    /**
     * @return string
     */
    public function getIntermediateDataLocation()
    {
        return $this->whichOneof("intermediate_data_location");
    }

}

