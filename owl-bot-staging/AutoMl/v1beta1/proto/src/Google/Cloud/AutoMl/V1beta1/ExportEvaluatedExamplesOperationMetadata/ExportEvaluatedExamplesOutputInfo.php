<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/operations.proto

namespace Google\Cloud\AutoMl\V1beta1\ExportEvaluatedExamplesOperationMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Further describes the output of the evaluated examples export.
 * Supplements
 * [ExportEvaluatedExamplesOutputConfig][google.cloud.automl.v1beta1.ExportEvaluatedExamplesOutputConfig].
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.ExportEvaluatedExamplesOperationMetadata.ExportEvaluatedExamplesOutputInfo</code>
 */
class ExportEvaluatedExamplesOutputInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The path of the BigQuery dataset created, in bq://projectId.bqDatasetId
     * format, into which the output of export evaluated examples is written.
     *
     * Generated from protobuf field <code>string bigquery_output_dataset = 2;</code>
     */
    protected $bigquery_output_dataset = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bigquery_output_dataset
     *           The path of the BigQuery dataset created, in bq://projectId.bqDatasetId
     *           format, into which the output of export evaluated examples is written.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     * The path of the BigQuery dataset created, in bq://projectId.bqDatasetId
     * format, into which the output of export evaluated examples is written.
     *
     * Generated from protobuf field <code>string bigquery_output_dataset = 2;</code>
     * @return string
     */
    public function getBigqueryOutputDataset()
    {
        return $this->bigquery_output_dataset;
    }

    /**
     * The path of the BigQuery dataset created, in bq://projectId.bqDatasetId
     * format, into which the output of export evaluated examples is written.
     *
     * Generated from protobuf field <code>string bigquery_output_dataset = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBigqueryOutputDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->bigquery_output_dataset = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExportEvaluatedExamplesOutputInfo::class, \Google\Cloud\AutoMl\V1beta1\ExportEvaluatedExamplesOperationMetadata_ExportEvaluatedExamplesOutputInfo::class);

