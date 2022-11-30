<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/analyticshub/v1/analyticshub.proto

namespace Google\Cloud\BigQuery\AnalyticsHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains the reference that identifies a destination bigquery dataset.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.analyticshub.v1.DestinationDatasetReference</code>
 */
class DestinationDatasetReference extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A unique ID for this dataset, without the project name. The ID
     * must contain only letters (a-z, A-Z), numbers (0-9), or underscores (_).
     * The maximum length is 1,024 characters.
     *
     * Generated from protobuf field <code>string dataset_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $dataset_id = '';
    /**
     * Required. The ID of the project containing this dataset.
     *
     * Generated from protobuf field <code>string project_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dataset_id
     *           Required. A unique ID for this dataset, without the project name. The ID
     *           must contain only letters (a-z, A-Z), numbers (0-9), or underscores (_).
     *           The maximum length is 1,024 characters.
     *     @type string $project_id
     *           Required. The ID of the project containing this dataset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Analyticshub\V1\Analyticshub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A unique ID for this dataset, without the project name. The ID
     * must contain only letters (a-z, A-Z), numbers (0-9), or underscores (_).
     * The maximum length is 1,024 characters.
     *
     * Generated from protobuf field <code>string dataset_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * Required. A unique ID for this dataset, without the project name. The ID
     * must contain only letters (a-z, A-Z), numbers (0-9), or underscores (_).
     * The maximum length is 1,024 characters.
     *
     * Generated from protobuf field <code>string dataset_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_id = $var;

        return $this;
    }

    /**
     * Required. The ID of the project containing this dataset.
     *
     * Generated from protobuf field <code>string project_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. The ID of the project containing this dataset.
     *
     * Generated from protobuf field <code>string project_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

}

