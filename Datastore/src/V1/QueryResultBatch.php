<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/query.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A batch of results produced by a query.
 *
 * Generated from protobuf message <code>google.datastore.v1.QueryResultBatch</code>
 */
class QueryResultBatch extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of results skipped, typically because of an offset.
     *
     * Generated from protobuf field <code>int32 skipped_results = 6;</code>
     */
    private $skipped_results = 0;
    /**
     * A cursor that points to the position after the last skipped result.
     * Will be set when `skipped_results` != 0.
     *
     * Generated from protobuf field <code>bytes skipped_cursor = 3;</code>
     */
    private $skipped_cursor = '';
    /**
     * The result type for every entity in `entity_results`.
     *
     * Generated from protobuf field <code>.google.datastore.v1.EntityResult.ResultType entity_result_type = 1;</code>
     */
    private $entity_result_type = 0;
    /**
     * The results for this batch.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.EntityResult entity_results = 2;</code>
     */
    private $entity_results;
    /**
     * A cursor that points to the position after the last result in the batch.
     *
     * Generated from protobuf field <code>bytes end_cursor = 4;</code>
     */
    private $end_cursor = '';
    /**
     * The state of the query after the current batch.
     *
     * Generated from protobuf field <code>.google.datastore.v1.QueryResultBatch.MoreResultsType more_results = 5;</code>
     */
    private $more_results = 0;
    /**
     * The version number of the snapshot this batch was returned from.
     * This applies to the range of results from the query's `start_cursor` (or
     * the beginning of the query if no cursor was given) to this batch's
     * `end_cursor` (not the query's `end_cursor`).
     * In a single transaction, subsequent query result batches for the same query
     * can have a greater snapshot version number. Each batch's snapshot version
     * is valid for all preceding batches.
     * The value will be zero for eventually consistent queries.
     *
     * Generated from protobuf field <code>int64 snapshot_version = 7;</code>
     */
    private $snapshot_version = 0;
    /**
     * Read timestamp this batch was returned from.
     * This applies to the range of results from the query's `start_cursor` (or
     * the beginning of the query if no cursor was given) to this batch's
     * `end_cursor` (not the query's `end_cursor`).
     * In a single transaction, subsequent query result batches for the same query
     * can have a greater timestamp. Each batch's read timestamp
     * is valid for all preceding batches.
     * This value will not be set for eventually consistent queries in Cloud
     * Datastore.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 8;</code>
     */
    private $read_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $skipped_results
     *           The number of results skipped, typically because of an offset.
     *     @type string $skipped_cursor
     *           A cursor that points to the position after the last skipped result.
     *           Will be set when `skipped_results` != 0.
     *     @type int $entity_result_type
     *           The result type for every entity in `entity_results`.
     *     @type array<\Google\Cloud\Datastore\V1\EntityResult>|\Google\Protobuf\Internal\RepeatedField $entity_results
     *           The results for this batch.
     *     @type string $end_cursor
     *           A cursor that points to the position after the last result in the batch.
     *     @type int $more_results
     *           The state of the query after the current batch.
     *     @type int|string $snapshot_version
     *           The version number of the snapshot this batch was returned from.
     *           This applies to the range of results from the query's `start_cursor` (or
     *           the beginning of the query if no cursor was given) to this batch's
     *           `end_cursor` (not the query's `end_cursor`).
     *           In a single transaction, subsequent query result batches for the same query
     *           can have a greater snapshot version number. Each batch's snapshot version
     *           is valid for all preceding batches.
     *           The value will be zero for eventually consistent queries.
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Read timestamp this batch was returned from.
     *           This applies to the range of results from the query's `start_cursor` (or
     *           the beginning of the query if no cursor was given) to this batch's
     *           `end_cursor` (not the query's `end_cursor`).
     *           In a single transaction, subsequent query result batches for the same query
     *           can have a greater timestamp. Each batch's read timestamp
     *           is valid for all preceding batches.
     *           This value will not be set for eventually consistent queries in Cloud
     *           Datastore.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of results skipped, typically because of an offset.
     *
     * Generated from protobuf field <code>int32 skipped_results = 6;</code>
     * @return int
     */
    public function getSkippedResults()
    {
        return $this->skipped_results;
    }

    /**
     * The number of results skipped, typically because of an offset.
     *
     * Generated from protobuf field <code>int32 skipped_results = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setSkippedResults($var)
    {
        GPBUtil::checkInt32($var);
        $this->skipped_results = $var;

        return $this;
    }

    /**
     * A cursor that points to the position after the last skipped result.
     * Will be set when `skipped_results` != 0.
     *
     * Generated from protobuf field <code>bytes skipped_cursor = 3;</code>
     * @return string
     */
    public function getSkippedCursor()
    {
        return $this->skipped_cursor;
    }

    /**
     * A cursor that points to the position after the last skipped result.
     * Will be set when `skipped_results` != 0.
     *
     * Generated from protobuf field <code>bytes skipped_cursor = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSkippedCursor($var)
    {
        GPBUtil::checkString($var, False);
        $this->skipped_cursor = $var;

        return $this;
    }

    /**
     * The result type for every entity in `entity_results`.
     *
     * Generated from protobuf field <code>.google.datastore.v1.EntityResult.ResultType entity_result_type = 1;</code>
     * @return int
     */
    public function getEntityResultType()
    {
        return $this->entity_result_type;
    }

    /**
     * The result type for every entity in `entity_results`.
     *
     * Generated from protobuf field <code>.google.datastore.v1.EntityResult.ResultType entity_result_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setEntityResultType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Datastore\V1\EntityResult\ResultType::class);
        $this->entity_result_type = $var;

        return $this;
    }

    /**
     * The results for this batch.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.EntityResult entity_results = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntityResults()
    {
        return $this->entity_results;
    }

    /**
     * The results for this batch.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.EntityResult entity_results = 2;</code>
     * @param array<\Google\Cloud\Datastore\V1\EntityResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntityResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastore\V1\EntityResult::class);
        $this->entity_results = $arr;

        return $this;
    }

    /**
     * A cursor that points to the position after the last result in the batch.
     *
     * Generated from protobuf field <code>bytes end_cursor = 4;</code>
     * @return string
     */
    public function getEndCursor()
    {
        return $this->end_cursor;
    }

    /**
     * A cursor that points to the position after the last result in the batch.
     *
     * Generated from protobuf field <code>bytes end_cursor = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEndCursor($var)
    {
        GPBUtil::checkString($var, False);
        $this->end_cursor = $var;

        return $this;
    }

    /**
     * The state of the query after the current batch.
     *
     * Generated from protobuf field <code>.google.datastore.v1.QueryResultBatch.MoreResultsType more_results = 5;</code>
     * @return int
     */
    public function getMoreResults()
    {
        return $this->more_results;
    }

    /**
     * The state of the query after the current batch.
     *
     * Generated from protobuf field <code>.google.datastore.v1.QueryResultBatch.MoreResultsType more_results = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMoreResults($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Datastore\V1\QueryResultBatch\MoreResultsType::class);
        $this->more_results = $var;

        return $this;
    }

    /**
     * The version number of the snapshot this batch was returned from.
     * This applies to the range of results from the query's `start_cursor` (or
     * the beginning of the query if no cursor was given) to this batch's
     * `end_cursor` (not the query's `end_cursor`).
     * In a single transaction, subsequent query result batches for the same query
     * can have a greater snapshot version number. Each batch's snapshot version
     * is valid for all preceding batches.
     * The value will be zero for eventually consistent queries.
     *
     * Generated from protobuf field <code>int64 snapshot_version = 7;</code>
     * @return int|string
     */
    public function getSnapshotVersion()
    {
        return $this->snapshot_version;
    }

    /**
     * The version number of the snapshot this batch was returned from.
     * This applies to the range of results from the query's `start_cursor` (or
     * the beginning of the query if no cursor was given) to this batch's
     * `end_cursor` (not the query's `end_cursor`).
     * In a single transaction, subsequent query result batches for the same query
     * can have a greater snapshot version number. Each batch's snapshot version
     * is valid for all preceding batches.
     * The value will be zero for eventually consistent queries.
     *
     * Generated from protobuf field <code>int64 snapshot_version = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSnapshotVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->snapshot_version = $var;

        return $this;
    }

    /**
     * Read timestamp this batch was returned from.
     * This applies to the range of results from the query's `start_cursor` (or
     * the beginning of the query if no cursor was given) to this batch's
     * `end_cursor` (not the query's `end_cursor`).
     * In a single transaction, subsequent query result batches for the same query
     * can have a greater timestamp. Each batch's read timestamp
     * is valid for all preceding batches.
     * This value will not be set for eventually consistent queries in Cloud
     * Datastore.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getReadTime()
    {
        return $this->read_time;
    }

    public function hasReadTime()
    {
        return isset($this->read_time);
    }

    public function clearReadTime()
    {
        unset($this->read_time);
    }

    /**
     * Read timestamp this batch was returned from.
     * This applies to the range of results from the query's `start_cursor` (or
     * the beginning of the query if no cursor was given) to this batch's
     * `end_cursor` (not the query's `end_cursor`).
     * In a single transaction, subsequent query result batches for the same query
     * can have a greater timestamp. Each batch's read timestamp
     * is valid for all preceding batches.
     * This value will not be set for eventually consistent queries in Cloud
     * Datastore.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->read_time = $var;

        return $this;
    }

}

