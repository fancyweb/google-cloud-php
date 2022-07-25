<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an Operation resource. Google Compute Engine has three Operation resources: * [Global](/compute/docs/reference/rest/v1/globalOperations) * [Regional](/compute/docs/reference/rest/v1/regionOperations) * [Zonal](https://cloud.google.com/compute/docs/reference/rest/v1/zoneOperations) You can use an operation resource to manage asynchronous API requests. For more information, read Handling API responses. Operations can be global, regional or zonal. - For global operations, use the `globalOperations` resource. - For regional operations, use the `regionOperations` resource. - For zonal operations, use the `zonalOperations` resource. For more information, read Global, Regional, and Zonal Resources.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Operation</code>
 */
class Operation extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The value of `requestId` if you provided it in the request. Not present otherwise.
     *
     * Generated from protobuf field <code>optional string client_operation_id = 297240295;</code>
     */
    private $client_operation_id = null;
    /**
     * [Deprecated] This field is deprecated.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * [Output Only] A textual description of the operation, which is set when the operation is created.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * [Output Only] The time that this operation was completed. This value is in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string end_time = 114938801;</code>
     */
    private $end_time = null;
    /**
     * [Output Only] If errors are generated during processing of the operation, this field will be populated.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Error error = 96784904;</code>
     */
    private $error = null;
    /**
     * [Output Only] If the operation fails, this field contains the HTTP error message that was returned, such as `NOT FOUND`.
     *
     * Generated from protobuf field <code>optional string http_error_message = 202521945 [(.google.cloud.operation_field) = ERROR_MESSAGE];</code>
     */
    private $http_error_message = null;
    /**
     * [Output Only] If the operation fails, this field contains the HTTP error status code that was returned. For example, a `404` means the resource was not found.
     *
     * Generated from protobuf field <code>optional int32 http_error_status_code = 312345196 [(.google.cloud.operation_field) = ERROR_CODE];</code>
     */
    private $http_error_status_code = null;
    /**
     * [Output Only] The unique identifier for the operation. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * [Output Only] The time that this operation was requested. This value is in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string insert_time = 433722515;</code>
     */
    private $insert_time = null;
    /**
     * [Output Only] Type of the resource. Always `compute#operation` for Operation resources.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * [Output Only] Name of the operation.
     *
     * Generated from protobuf field <code>optional string name = 3373707 [(.google.cloud.operation_field) = NAME];</code>
     */
    private $name = null;
    /**
     * [Output Only] An ID that represents a group of operations, such as when a group of operations results from a `bulkInsert` API request.
     *
     * Generated from protobuf field <code>optional string operation_group_id = 40171187;</code>
     */
    private $operation_group_id = null;
    /**
     * [Output Only] The type of operation, such as `insert`, `update`, or `delete`, and so on.
     *
     * Generated from protobuf field <code>optional string operation_type = 177650450;</code>
     */
    private $operation_type = null;
    /**
     * [Output Only] An optional progress indicator that ranges from 0 to 100. There is no requirement that this be linear or support any granularity of operations. This should not be used to guess when the operation will be complete. This number should monotonically increase as the operation progresses.
     *
     * Generated from protobuf field <code>optional int32 progress = 72663597;</code>
     */
    private $progress = null;
    /**
     * [Output Only] The URL of the region where the operation resides. Only applicable when performing regional operations.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     */
    private $region = null;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * [Output Only] The time that this operation was started by the server. This value is in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string start_time = 37467274;</code>
     */
    private $start_time = null;
    /**
     * [Output Only] The status of the operation, which can be one of the following: `PENDING`, `RUNNING`, or `DONE`.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Operation.Status status = 181260274 [(.google.cloud.operation_field) = STATUS];</code>
     */
    private $status = null;
    /**
     * [Output Only] An optional textual description of the current status of the operation.
     *
     * Generated from protobuf field <code>optional string status_message = 297428154;</code>
     */
    private $status_message = null;
    /**
     * [Output Only] The unique target ID, which identifies a specific incarnation of the target resource.
     *
     * Generated from protobuf field <code>optional uint64 target_id = 258165385;</code>
     */
    private $target_id = null;
    /**
     * [Output Only] The URL of the resource that the operation modifies. For operations related to creating a snapshot, this points to the persistent disk that the snapshot was created from.
     *
     * Generated from protobuf field <code>optional string target_link = 62671336;</code>
     */
    private $target_link = null;
    /**
     * [Output Only] User who requested the operation, for example: `user&#64;example.com`.
     *
     * Generated from protobuf field <code>optional string user = 3599307;</code>
     */
    private $user = null;
    /**
     * [Output Only] If warning messages are generated during processing of the operation, this field will be populated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Warnings warnings = 498091095;</code>
     */
    private $warnings;
    /**
     * [Output Only] The URL of the zone where the operation resides. Only applicable when performing per-zone operations.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     */
    private $zone = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $client_operation_id
     *           [Output Only] The value of `requestId` if you provided it in the request. Not present otherwise.
     *     @type string $creation_timestamp
     *           [Deprecated] This field is deprecated.
     *     @type string $description
     *           [Output Only] A textual description of the operation, which is set when the operation is created.
     *     @type string $end_time
     *           [Output Only] The time that this operation was completed. This value is in RFC3339 text format.
     *     @type \Google\Cloud\Compute\V1\Error $error
     *           [Output Only] If errors are generated during processing of the operation, this field will be populated.
     *     @type string $http_error_message
     *           [Output Only] If the operation fails, this field contains the HTTP error message that was returned, such as `NOT FOUND`.
     *     @type int $http_error_status_code
     *           [Output Only] If the operation fails, this field contains the HTTP error status code that was returned. For example, a `404` means the resource was not found.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the operation. This identifier is defined by the server.
     *     @type string $insert_time
     *           [Output Only] The time that this operation was requested. This value is in RFC3339 text format.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always `compute#operation` for Operation resources.
     *     @type string $name
     *           [Output Only] Name of the operation.
     *     @type string $operation_group_id
     *           [Output Only] An ID that represents a group of operations, such as when a group of operations results from a `bulkInsert` API request.
     *     @type string $operation_type
     *           [Output Only] The type of operation, such as `insert`, `update`, or `delete`, and so on.
     *     @type int $progress
     *           [Output Only] An optional progress indicator that ranges from 0 to 100. There is no requirement that this be linear or support any granularity of operations. This should not be used to guess when the operation will be complete. This number should monotonically increase as the operation progresses.
     *     @type string $region
     *           [Output Only] The URL of the region where the operation resides. Only applicable when performing regional operations.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $start_time
     *           [Output Only] The time that this operation was started by the server. This value is in RFC3339 text format.
     *     @type int $status
     *           [Output Only] The status of the operation, which can be one of the following: `PENDING`, `RUNNING`, or `DONE`.
     *     @type string $status_message
     *           [Output Only] An optional textual description of the current status of the operation.
     *     @type int|string $target_id
     *           [Output Only] The unique target ID, which identifies a specific incarnation of the target resource.
     *     @type string $target_link
     *           [Output Only] The URL of the resource that the operation modifies. For operations related to creating a snapshot, this points to the persistent disk that the snapshot was created from.
     *     @type string $user
     *           [Output Only] User who requested the operation, for example: `user&#64;example.com`.
     *     @type array<\Google\Cloud\Compute\V1\Warnings>|\Google\Protobuf\Internal\RepeatedField $warnings
     *           [Output Only] If warning messages are generated during processing of the operation, this field will be populated.
     *     @type string $zone
     *           [Output Only] The URL of the zone where the operation resides. Only applicable when performing per-zone operations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The value of `requestId` if you provided it in the request. Not present otherwise.
     *
     * Generated from protobuf field <code>optional string client_operation_id = 297240295;</code>
     * @return string
     */
    public function getClientOperationId()
    {
        return isset($this->client_operation_id) ? $this->client_operation_id : '';
    }

    public function hasClientOperationId()
    {
        return isset($this->client_operation_id);
    }

    public function clearClientOperationId()
    {
        unset($this->client_operation_id);
    }

    /**
     * [Output Only] The value of `requestId` if you provided it in the request. Not present otherwise.
     *
     * Generated from protobuf field <code>optional string client_operation_id = 297240295;</code>
     * @param string $var
     * @return $this
     */
    public function setClientOperationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_operation_id = $var;

        return $this;
    }

    /**
     * [Deprecated] This field is deprecated.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Deprecated] This field is deprecated.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * [Output Only] A textual description of the operation, which is set when the operation is created.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * [Output Only] A textual description of the operation, which is set when the operation is created.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * [Output Only] The time that this operation was completed. This value is in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string end_time = 114938801;</code>
     * @return string
     */
    public function getEndTime()
    {
        return isset($this->end_time) ? $this->end_time : '';
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * [Output Only] The time that this operation was completed. This value is in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string end_time = 114938801;</code>
     * @param string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_time = $var;

        return $this;
    }

    /**
     * [Output Only] If errors are generated during processing of the operation, this field will be populated.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Error error = 96784904;</code>
     * @return \Google\Cloud\Compute\V1\Error|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * [Output Only] If errors are generated during processing of the operation, this field will be populated.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Error error = 96784904;</code>
     * @param \Google\Cloud\Compute\V1\Error $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Error::class);
        $this->error = $var;

        return $this;
    }

    /**
     * [Output Only] If the operation fails, this field contains the HTTP error message that was returned, such as `NOT FOUND`.
     *
     * Generated from protobuf field <code>optional string http_error_message = 202521945 [(.google.cloud.operation_field) = ERROR_MESSAGE];</code>
     * @return string
     */
    public function getHttpErrorMessage()
    {
        return isset($this->http_error_message) ? $this->http_error_message : '';
    }

    public function hasHttpErrorMessage()
    {
        return isset($this->http_error_message);
    }

    public function clearHttpErrorMessage()
    {
        unset($this->http_error_message);
    }

    /**
     * [Output Only] If the operation fails, this field contains the HTTP error message that was returned, such as `NOT FOUND`.
     *
     * Generated from protobuf field <code>optional string http_error_message = 202521945 [(.google.cloud.operation_field) = ERROR_MESSAGE];</code>
     * @param string $var
     * @return $this
     */
    public function setHttpErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->http_error_message = $var;

        return $this;
    }

    /**
     * [Output Only] If the operation fails, this field contains the HTTP error status code that was returned. For example, a `404` means the resource was not found.
     *
     * Generated from protobuf field <code>optional int32 http_error_status_code = 312345196 [(.google.cloud.operation_field) = ERROR_CODE];</code>
     * @return int
     */
    public function getHttpErrorStatusCode()
    {
        return isset($this->http_error_status_code) ? $this->http_error_status_code : 0;
    }

    public function hasHttpErrorStatusCode()
    {
        return isset($this->http_error_status_code);
    }

    public function clearHttpErrorStatusCode()
    {
        unset($this->http_error_status_code);
    }

    /**
     * [Output Only] If the operation fails, this field contains the HTTP error status code that was returned. For example, a `404` means the resource was not found.
     *
     * Generated from protobuf field <code>optional int32 http_error_status_code = 312345196 [(.google.cloud.operation_field) = ERROR_CODE];</code>
     * @param int $var
     * @return $this
     */
    public function setHttpErrorStatusCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->http_error_status_code = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the operation. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the operation. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] The time that this operation was requested. This value is in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string insert_time = 433722515;</code>
     * @return string
     */
    public function getInsertTime()
    {
        return isset($this->insert_time) ? $this->insert_time : '';
    }

    public function hasInsertTime()
    {
        return isset($this->insert_time);
    }

    public function clearInsertTime()
    {
        unset($this->insert_time);
    }

    /**
     * [Output Only] The time that this operation was requested. This value is in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string insert_time = 433722515;</code>
     * @param string $var
     * @return $this
     */
    public function setInsertTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->insert_time = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always `compute#operation` for Operation resources.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always `compute#operation` for Operation resources.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * [Output Only] Name of the operation.
     *
     * Generated from protobuf field <code>optional string name = 3373707 [(.google.cloud.operation_field) = NAME];</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * [Output Only] Name of the operation.
     *
     * Generated from protobuf field <code>optional string name = 3373707 [(.google.cloud.operation_field) = NAME];</code>
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
     * [Output Only] An ID that represents a group of operations, such as when a group of operations results from a `bulkInsert` API request.
     *
     * Generated from protobuf field <code>optional string operation_group_id = 40171187;</code>
     * @return string
     */
    public function getOperationGroupId()
    {
        return isset($this->operation_group_id) ? $this->operation_group_id : '';
    }

    public function hasOperationGroupId()
    {
        return isset($this->operation_group_id);
    }

    public function clearOperationGroupId()
    {
        unset($this->operation_group_id);
    }

    /**
     * [Output Only] An ID that represents a group of operations, such as when a group of operations results from a `bulkInsert` API request.
     *
     * Generated from protobuf field <code>optional string operation_group_id = 40171187;</code>
     * @param string $var
     * @return $this
     */
    public function setOperationGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation_group_id = $var;

        return $this;
    }

    /**
     * [Output Only] The type of operation, such as `insert`, `update`, or `delete`, and so on.
     *
     * Generated from protobuf field <code>optional string operation_type = 177650450;</code>
     * @return string
     */
    public function getOperationType()
    {
        return isset($this->operation_type) ? $this->operation_type : '';
    }

    public function hasOperationType()
    {
        return isset($this->operation_type);
    }

    public function clearOperationType()
    {
        unset($this->operation_type);
    }

    /**
     * [Output Only] The type of operation, such as `insert`, `update`, or `delete`, and so on.
     *
     * Generated from protobuf field <code>optional string operation_type = 177650450;</code>
     * @param string $var
     * @return $this
     */
    public function setOperationType($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation_type = $var;

        return $this;
    }

    /**
     * [Output Only] An optional progress indicator that ranges from 0 to 100. There is no requirement that this be linear or support any granularity of operations. This should not be used to guess when the operation will be complete. This number should monotonically increase as the operation progresses.
     *
     * Generated from protobuf field <code>optional int32 progress = 72663597;</code>
     * @return int
     */
    public function getProgress()
    {
        return isset($this->progress) ? $this->progress : 0;
    }

    public function hasProgress()
    {
        return isset($this->progress);
    }

    public function clearProgress()
    {
        unset($this->progress);
    }

    /**
     * [Output Only] An optional progress indicator that ranges from 0 to 100. There is no requirement that this be linear or support any granularity of operations. This should not be used to guess when the operation will be complete. This number should monotonically increase as the operation progresses.
     *
     * Generated from protobuf field <code>optional int32 progress = 72663597;</code>
     * @param int $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkInt32($var);
        $this->progress = $var;

        return $this;
    }

    /**
     * [Output Only] The URL of the region where the operation resides. Only applicable when performing regional operations.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * [Output Only] The URL of the region where the operation resides. Only applicable when performing regional operations.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * [Output Only] The time that this operation was started by the server. This value is in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string start_time = 37467274;</code>
     * @return string
     */
    public function getStartTime()
    {
        return isset($this->start_time) ? $this->start_time : '';
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * [Output Only] The time that this operation was started by the server. This value is in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string start_time = 37467274;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_time = $var;

        return $this;
    }

    /**
     * [Output Only] The status of the operation, which can be one of the following: `PENDING`, `RUNNING`, or `DONE`.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Operation.Status status = 181260274 [(.google.cloud.operation_field) = STATUS];</code>
     * @return int
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : 0;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * [Output Only] The status of the operation, which can be one of the following: `PENDING`, `RUNNING`, or `DONE`.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Operation.Status status = 181260274 [(.google.cloud.operation_field) = STATUS];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\Operation\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * [Output Only] An optional textual description of the current status of the operation.
     *
     * Generated from protobuf field <code>optional string status_message = 297428154;</code>
     * @return string
     */
    public function getStatusMessage()
    {
        return isset($this->status_message) ? $this->status_message : '';
    }

    public function hasStatusMessage()
    {
        return isset($this->status_message);
    }

    public function clearStatusMessage()
    {
        unset($this->status_message);
    }

    /**
     * [Output Only] An optional textual description of the current status of the operation.
     *
     * Generated from protobuf field <code>optional string status_message = 297428154;</code>
     * @param string $var
     * @return $this
     */
    public function setStatusMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_message = $var;

        return $this;
    }

    /**
     * [Output Only] The unique target ID, which identifies a specific incarnation of the target resource.
     *
     * Generated from protobuf field <code>optional uint64 target_id = 258165385;</code>
     * @return int|string
     */
    public function getTargetId()
    {
        return isset($this->target_id) ? $this->target_id : 0;
    }

    public function hasTargetId()
    {
        return isset($this->target_id);
    }

    public function clearTargetId()
    {
        unset($this->target_id);
    }

    /**
     * [Output Only] The unique target ID, which identifies a specific incarnation of the target resource.
     *
     * Generated from protobuf field <code>optional uint64 target_id = 258165385;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTargetId($var)
    {
        GPBUtil::checkUint64($var);
        $this->target_id = $var;

        return $this;
    }

    /**
     * [Output Only] The URL of the resource that the operation modifies. For operations related to creating a snapshot, this points to the persistent disk that the snapshot was created from.
     *
     * Generated from protobuf field <code>optional string target_link = 62671336;</code>
     * @return string
     */
    public function getTargetLink()
    {
        return isset($this->target_link) ? $this->target_link : '';
    }

    public function hasTargetLink()
    {
        return isset($this->target_link);
    }

    public function clearTargetLink()
    {
        unset($this->target_link);
    }

    /**
     * [Output Only] The URL of the resource that the operation modifies. For operations related to creating a snapshot, this points to the persistent disk that the snapshot was created from.
     *
     * Generated from protobuf field <code>optional string target_link = 62671336;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_link = $var;

        return $this;
    }

    /**
     * [Output Only] User who requested the operation, for example: `user&#64;example.com`.
     *
     * Generated from protobuf field <code>optional string user = 3599307;</code>
     * @return string
     */
    public function getUser()
    {
        return isset($this->user) ? $this->user : '';
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * [Output Only] User who requested the operation, for example: `user&#64;example.com`.
     *
     * Generated from protobuf field <code>optional string user = 3599307;</code>
     * @param string $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkString($var, True);
        $this->user = $var;

        return $this;
    }

    /**
     * [Output Only] If warning messages are generated during processing of the operation, this field will be populated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Warnings warnings = 498091095;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * [Output Only] If warning messages are generated during processing of the operation, this field will be populated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Warnings warnings = 498091095;</code>
     * @param array<\Google\Cloud\Compute\V1\Warnings>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWarnings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\Warnings::class);
        $this->warnings = $arr;

        return $this;
    }

    /**
     * [Output Only] The URL of the zone where the operation resides. Only applicable when performing per-zone operations.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     * @return string
     */
    public function getZone()
    {
        return isset($this->zone) ? $this->zone : '';
    }

    public function hasZone()
    {
        return isset($this->zone);
    }

    public function clearZone()
    {
        unset($this->zone);
    }

    /**
     * [Output Only] The URL of the zone where the operation resides. Only applicable when performing per-zone operations.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

