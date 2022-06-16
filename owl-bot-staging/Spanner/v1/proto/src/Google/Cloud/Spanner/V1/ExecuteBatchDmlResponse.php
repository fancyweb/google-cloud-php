<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for [ExecuteBatchDml][google.spanner.v1.Spanner.ExecuteBatchDml]. Contains a list
 * of [ResultSet][google.spanner.v1.ResultSet] messages, one for each DML statement that has successfully
 * executed, in the same order as the statements in the request. If a statement
 * fails, the status in the response body identifies the cause of the failure.
 * To check for DML statements that failed, use the following approach:
 * 1. Check the status in the response message. The [google.rpc.Code][google.rpc.Code] enum
 *    value `OK` indicates that all statements were executed successfully.
 * 2. If the status was not `OK`, check the number of result sets in the
 *    response. If the response contains `N` [ResultSet][google.spanner.v1.ResultSet] messages, then
 *    statement `N+1` in the request failed.
 * Example 1:
 * * Request: 5 DML statements, all executed successfully.
 * * Response: 5 [ResultSet][google.spanner.v1.ResultSet] messages, with the status `OK`.
 * Example 2:
 * * Request: 5 DML statements. The third statement has a syntax error.
 * * Response: 2 [ResultSet][google.spanner.v1.ResultSet] messages, and a syntax error (`INVALID_ARGUMENT`)
 *   status. The number of [ResultSet][google.spanner.v1.ResultSet] messages indicates that the third
 *   statement failed, and the fourth and fifth statements were not executed.
 *
 * Generated from protobuf message <code>google.spanner.v1.ExecuteBatchDmlResponse</code>
 */
class ExecuteBatchDmlResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * One [ResultSet][google.spanner.v1.ResultSet] for each statement in the request that ran successfully,
     * in the same order as the statements in the request. Each [ResultSet][google.spanner.v1.ResultSet] does
     * not contain any rows. The [ResultSetStats][google.spanner.v1.ResultSetStats] in each [ResultSet][google.spanner.v1.ResultSet] contain
     * the number of rows modified by the statement.
     * Only the first [ResultSet][google.spanner.v1.ResultSet] in the response contains valid
     * [ResultSetMetadata][google.spanner.v1.ResultSetMetadata].
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.ResultSet result_sets = 1;</code>
     */
    private $result_sets;
    /**
     * If all DML statements are executed successfully, the status is `OK`.
     * Otherwise, the error status of the first failed statement.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     */
    protected $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Spanner\V1\ResultSet[]|\Google\Protobuf\Internal\RepeatedField $result_sets
     *           One [ResultSet][google.spanner.v1.ResultSet] for each statement in the request that ran successfully,
     *           in the same order as the statements in the request. Each [ResultSet][google.spanner.v1.ResultSet] does
     *           not contain any rows. The [ResultSetStats][google.spanner.v1.ResultSetStats] in each [ResultSet][google.spanner.v1.ResultSet] contain
     *           the number of rows modified by the statement.
     *           Only the first [ResultSet][google.spanner.v1.ResultSet] in the response contains valid
     *           [ResultSetMetadata][google.spanner.v1.ResultSetMetadata].
     *     @type \Google\Rpc\Status $status
     *           If all DML statements are executed successfully, the status is `OK`.
     *           Otherwise, the error status of the first failed statement.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\Spanner::initOnce();
        parent::__construct($data);
    }

    /**
     * One [ResultSet][google.spanner.v1.ResultSet] for each statement in the request that ran successfully,
     * in the same order as the statements in the request. Each [ResultSet][google.spanner.v1.ResultSet] does
     * not contain any rows. The [ResultSetStats][google.spanner.v1.ResultSetStats] in each [ResultSet][google.spanner.v1.ResultSet] contain
     * the number of rows modified by the statement.
     * Only the first [ResultSet][google.spanner.v1.ResultSet] in the response contains valid
     * [ResultSetMetadata][google.spanner.v1.ResultSetMetadata].
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.ResultSet result_sets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResultSets()
    {
        return $this->result_sets;
    }

    /**
     * One [ResultSet][google.spanner.v1.ResultSet] for each statement in the request that ran successfully,
     * in the same order as the statements in the request. Each [ResultSet][google.spanner.v1.ResultSet] does
     * not contain any rows. The [ResultSetStats][google.spanner.v1.ResultSetStats] in each [ResultSet][google.spanner.v1.ResultSet] contain
     * the number of rows modified by the statement.
     * Only the first [ResultSet][google.spanner.v1.ResultSet] in the response contains valid
     * [ResultSetMetadata][google.spanner.v1.ResultSetMetadata].
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.ResultSet result_sets = 1;</code>
     * @param \Google\Cloud\Spanner\V1\ResultSet[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResultSets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Spanner\V1\ResultSet::class);
        $this->result_sets = $arr;

        return $this;
    }

    /**
     * If all DML statements are executed successfully, the status is `OK`.
     * Otherwise, the error status of the first failed statement.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getStatus()
    {
        return $this->status;
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
     * If all DML statements are executed successfully, the status is `OK`.
     * Otherwise, the error status of the first failed statement.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;

        return $this;
    }

}

