<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_stats_service.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies a set of `ErrorGroupStats` to return.
 *
 * Generated from protobuf message <code>google.devtools.clouderrorreporting.v1beta1.ListGroupStatsRequest</code>
 */
class ListGroupStatsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Google Cloud Platform project. Written
     * as `projects/{projectID}` or `projects/{projectNumber}`, where `{projectID}`
     * and `{projectNumber}` can be found in the
     * [Google Cloud Console](https://support.google.com/cloud/answer/6158840).
     * Examples: `projects/my-project-123`, `projects/5551234`.
     *
     * Generated from protobuf field <code>string project_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $project_name = '';
    /**
     * Optional. List all <code>ErrorGroupStats</code> with these IDs.
     *
     * Generated from protobuf field <code>repeated string group_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $group_id;
    /**
     * Optional. List only <code>ErrorGroupStats</code> which belong to a service
     * context that matches the filter.
     * Data for all service contexts is returned if this field is not specified.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ServiceContextFilter service_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $service_filter = null;
    /**
     * Optional. List data for the given time range.
     * If not set, a default time range is used. The field
     * <code>time_range_begin</code> in the response will specify the beginning
     * of this time range.
     * Only <code>ErrorGroupStats</code> with a non-zero count in the given time
     * range are returned, unless the request contains an explicit
     * <code>group_id</code> list. If a <code>group_id</code> list is given, also
     * <code>ErrorGroupStats</code> with zero occurrences are returned.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.QueryTimeRange time_range = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $time_range = null;
    /**
     * Optional. The preferred duration for a single returned `TimedCount`.
     * If not set, no timed counts are returned.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timed_count_duration = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $timed_count_duration = null;
    /**
     * Optional. The alignment of the timed counts to be returned.
     * Default is `ALIGNMENT_EQUAL_AT_END`.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.TimedCountAlignment alignment = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $alignment = 0;
    /**
     * Optional. Time where the timed counts shall be aligned if rounded
     * alignment is chosen. Default is 00:00 UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp alignment_time = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $alignment_time = null;
    /**
     * Optional. The sort order in which the results are returned.
     * Default is `COUNT_DESC`.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ErrorGroupOrder order = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $order = 0;
    /**
     * Optional. The maximum number of results to return per response.
     * Default is 20.
     *
     * Generated from protobuf field <code>int32 page_size = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A `next_page_token` provided by a previous response. To view
     * additional results, pass this token along with the identical query
     * parameters as the first request.
     *
     * Generated from protobuf field <code>string page_token = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_name
     *           Required. The resource name of the Google Cloud Platform project. Written
     *           as `projects/{projectID}` or `projects/{projectNumber}`, where `{projectID}`
     *           and `{projectNumber}` can be found in the
     *           [Google Cloud Console](https://support.google.com/cloud/answer/6158840).
     *           Examples: `projects/my-project-123`, `projects/5551234`.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $group_id
     *           Optional. List all <code>ErrorGroupStats</code> with these IDs.
     *     @type \Google\Cloud\ErrorReporting\V1beta1\ServiceContextFilter $service_filter
     *           Optional. List only <code>ErrorGroupStats</code> which belong to a service
     *           context that matches the filter.
     *           Data for all service contexts is returned if this field is not specified.
     *     @type \Google\Cloud\ErrorReporting\V1beta1\QueryTimeRange $time_range
     *           Optional. List data for the given time range.
     *           If not set, a default time range is used. The field
     *           <code>time_range_begin</code> in the response will specify the beginning
     *           of this time range.
     *           Only <code>ErrorGroupStats</code> with a non-zero count in the given time
     *           range are returned, unless the request contains an explicit
     *           <code>group_id</code> list. If a <code>group_id</code> list is given, also
     *           <code>ErrorGroupStats</code> with zero occurrences are returned.
     *     @type \Google\Protobuf\Duration $timed_count_duration
     *           Optional. The preferred duration for a single returned `TimedCount`.
     *           If not set, no timed counts are returned.
     *     @type int $alignment
     *           Optional. The alignment of the timed counts to be returned.
     *           Default is `ALIGNMENT_EQUAL_AT_END`.
     *     @type \Google\Protobuf\Timestamp $alignment_time
     *           Optional. Time where the timed counts shall be aligned if rounded
     *           alignment is chosen. Default is 00:00 UTC.
     *     @type int $order
     *           Optional. The sort order in which the results are returned.
     *           Default is `COUNT_DESC`.
     *     @type int $page_size
     *           Optional. The maximum number of results to return per response.
     *           Default is 20.
     *     @type string $page_token
     *           Optional. A `next_page_token` provided by a previous response. To view
     *           additional results, pass this token along with the identical query
     *           parameters as the first request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\ErrorStatsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Google Cloud Platform project. Written
     * as `projects/{projectID}` or `projects/{projectNumber}`, where `{projectID}`
     * and `{projectNumber}` can be found in the
     * [Google Cloud Console](https://support.google.com/cloud/answer/6158840).
     * Examples: `projects/my-project-123`, `projects/5551234`.
     *
     * Generated from protobuf field <code>string project_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getProjectName()
    {
        return $this->project_name;
    }

    /**
     * Required. The resource name of the Google Cloud Platform project. Written
     * as `projects/{projectID}` or `projects/{projectNumber}`, where `{projectID}`
     * and `{projectNumber}` can be found in the
     * [Google Cloud Console](https://support.google.com/cloud/answer/6158840).
     * Examples: `projects/my-project-123`, `projects/5551234`.
     *
     * Generated from protobuf field <code>string project_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProjectName($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_name = $var;

        return $this;
    }

    /**
     * Optional. List all <code>ErrorGroupStats</code> with these IDs.
     *
     * Generated from protobuf field <code>repeated string group_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Optional. List all <code>ErrorGroupStats</code> with these IDs.
     *
     * Generated from protobuf field <code>repeated string group_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroupId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->group_id = $arr;

        return $this;
    }

    /**
     * Optional. List only <code>ErrorGroupStats</code> which belong to a service
     * context that matches the filter.
     * Data for all service contexts is returned if this field is not specified.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ServiceContextFilter service_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\ErrorReporting\V1beta1\ServiceContextFilter|null
     */
    public function getServiceFilter()
    {
        return $this->service_filter;
    }

    public function hasServiceFilter()
    {
        return isset($this->service_filter);
    }

    public function clearServiceFilter()
    {
        unset($this->service_filter);
    }

    /**
     * Optional. List only <code>ErrorGroupStats</code> which belong to a service
     * context that matches the filter.
     * Data for all service contexts is returned if this field is not specified.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ServiceContextFilter service_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\ErrorReporting\V1beta1\ServiceContextFilter $var
     * @return $this
     */
    public function setServiceFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ErrorReporting\V1beta1\ServiceContextFilter::class);
        $this->service_filter = $var;

        return $this;
    }

    /**
     * Optional. List data for the given time range.
     * If not set, a default time range is used. The field
     * <code>time_range_begin</code> in the response will specify the beginning
     * of this time range.
     * Only <code>ErrorGroupStats</code> with a non-zero count in the given time
     * range are returned, unless the request contains an explicit
     * <code>group_id</code> list. If a <code>group_id</code> list is given, also
     * <code>ErrorGroupStats</code> with zero occurrences are returned.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.QueryTimeRange time_range = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\ErrorReporting\V1beta1\QueryTimeRange|null
     */
    public function getTimeRange()
    {
        return $this->time_range;
    }

    public function hasTimeRange()
    {
        return isset($this->time_range);
    }

    public function clearTimeRange()
    {
        unset($this->time_range);
    }

    /**
     * Optional. List data for the given time range.
     * If not set, a default time range is used. The field
     * <code>time_range_begin</code> in the response will specify the beginning
     * of this time range.
     * Only <code>ErrorGroupStats</code> with a non-zero count in the given time
     * range are returned, unless the request contains an explicit
     * <code>group_id</code> list. If a <code>group_id</code> list is given, also
     * <code>ErrorGroupStats</code> with zero occurrences are returned.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.QueryTimeRange time_range = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\ErrorReporting\V1beta1\QueryTimeRange $var
     * @return $this
     */
    public function setTimeRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ErrorReporting\V1beta1\QueryTimeRange::class);
        $this->time_range = $var;

        return $this;
    }

    /**
     * Optional. The preferred duration for a single returned `TimedCount`.
     * If not set, no timed counts are returned.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timed_count_duration = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTimedCountDuration()
    {
        return $this->timed_count_duration;
    }

    public function hasTimedCountDuration()
    {
        return isset($this->timed_count_duration);
    }

    public function clearTimedCountDuration()
    {
        unset($this->timed_count_duration);
    }

    /**
     * Optional. The preferred duration for a single returned `TimedCount`.
     * If not set, no timed counts are returned.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timed_count_duration = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTimedCountDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->timed_count_duration = $var;

        return $this;
    }

    /**
     * Optional. The alignment of the timed counts to be returned.
     * Default is `ALIGNMENT_EQUAL_AT_END`.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.TimedCountAlignment alignment = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * Optional. The alignment of the timed counts to be returned.
     * Default is `ALIGNMENT_EQUAL_AT_END`.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.TimedCountAlignment alignment = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setAlignment($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ErrorReporting\V1beta1\TimedCountAlignment::class);
        $this->alignment = $var;

        return $this;
    }

    /**
     * Optional. Time where the timed counts shall be aligned if rounded
     * alignment is chosen. Default is 00:00 UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp alignment_time = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getAlignmentTime()
    {
        return $this->alignment_time;
    }

    public function hasAlignmentTime()
    {
        return isset($this->alignment_time);
    }

    public function clearAlignmentTime()
    {
        unset($this->alignment_time);
    }

    /**
     * Optional. Time where the timed counts shall be aligned if rounded
     * alignment is chosen. Default is 00:00 UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp alignment_time = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setAlignmentTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->alignment_time = $var;

        return $this;
    }

    /**
     * Optional. The sort order in which the results are returned.
     * Default is `COUNT_DESC`.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ErrorGroupOrder order = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Optional. The sort order in which the results are returned.
     * Default is `COUNT_DESC`.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ErrorGroupOrder order = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setOrder($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ErrorReporting\V1beta1\ErrorGroupOrder::class);
        $this->order = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of results to return per response.
     * Default is 20.
     *
     * Generated from protobuf field <code>int32 page_size = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of results to return per response.
     * Default is 20.
     *
     * Generated from protobuf field <code>int32 page_size = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A `next_page_token` provided by a previous response. To view
     * additional results, pass this token along with the identical query
     * parameters as the first request.
     *
     * Generated from protobuf field <code>string page_token = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A `next_page_token` provided by a previous response. To view
     * additional results, pass this token along with the identical query
     * parameters as the first request.
     *
     * Generated from protobuf field <code>string page_token = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

