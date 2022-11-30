<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/reservation/v1/reservation.proto

namespace Google\Cloud\BigQuery\Reservation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for [ReservationService.SearchAllAssignments][google.cloud.bigquery.reservation.v1.ReservationService.SearchAllAssignments].
 *
 * Generated from protobuf message <code>google.cloud.bigquery.reservation.v1.SearchAllAssignmentsResponse</code>
 */
class SearchAllAssignmentsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of assignments visible to the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.reservation.v1.Assignment assignments = 1;</code>
     */
    private $assignments;
    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\BigQuery\Reservation\V1\Assignment>|\Google\Protobuf\Internal\RepeatedField $assignments
     *           List of assignments visible to the user.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no
     *           more results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Reservation\V1\Reservation::initOnce();
        parent::__construct($data);
    }

    /**
     * List of assignments visible to the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.reservation.v1.Assignment assignments = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssignments()
    {
        return $this->assignments;
    }

    /**
     * List of assignments visible to the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.reservation.v1.Assignment assignments = 1;</code>
     * @param array<\Google\Cloud\BigQuery\Reservation\V1\Assignment>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssignments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BigQuery\Reservation\V1\Assignment::class);
        $this->assignments = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

