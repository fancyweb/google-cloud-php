<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/async_model.proto

namespace Google\Cloud\Optimization\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The desired output location.
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.OutputConfig</code>
 */
class OutputConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The output data format that used to store the results in Cloud Storage.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.DataFormat data_format = 2;</code>
     */
    private $data_format = 0;
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Optimization\V1\GcsDestination $gcs_destination
     *           The Google Cloud Storage location to write the output to.
     *     @type int $data_format
     *           The output data format that used to store the results in Cloud Storage.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\AsyncModel::initOnce();
        parent::__construct($data);
    }

    /**
     * The Google Cloud Storage location to write the output to.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.GcsDestination gcs_destination = 1;</code>
     * @return \Google\Cloud\Optimization\V1\GcsDestination|null
     */
    public function getGcsDestination()
    {
        return $this->readOneof(1);
    }

    public function hasGcsDestination()
    {
        return $this->hasOneof(1);
    }

    /**
     * The Google Cloud Storage location to write the output to.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.GcsDestination gcs_destination = 1;</code>
     * @param \Google\Cloud\Optimization\V1\GcsDestination $var
     * @return $this
     */
    public function setGcsDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Optimization\V1\GcsDestination::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The output data format that used to store the results in Cloud Storage.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.DataFormat data_format = 2;</code>
     * @return int
     */
    public function getDataFormat()
    {
        return $this->data_format;
    }

    /**
     * The output data format that used to store the results in Cloud Storage.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.DataFormat data_format = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDataFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Optimization\V1\DataFormat::class);
        $this->data_format = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}

