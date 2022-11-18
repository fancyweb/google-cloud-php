<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/filters.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Filter on job compensation type and amount.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.CompensationFilter</code>
 */
class CompensationFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Type of filter.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompensationFilter.FilterType type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $type = 0;
    /**
     * Required. Specify desired `base compensation entry's`
     * [CompensationInfo.CompensationUnit][google.cloud.talent.v4beta1.CompensationInfo.CompensationUnit].
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4beta1.CompensationInfo.CompensationUnit units = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $units;
    /**
     * Compensation range.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompensationInfo.CompensationRange range = 3;</code>
     */
    protected $range = null;
    /**
     * If set to true, jobs with unspecified compensation range fields are
     * included.
     *
     * Generated from protobuf field <code>bool include_jobs_with_unspecified_compensation_range = 4;</code>
     */
    protected $include_jobs_with_unspecified_compensation_range = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Required. Type of filter.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $units
     *           Required. Specify desired `base compensation entry's`
     *           [CompensationInfo.CompensationUnit][google.cloud.talent.v4beta1.CompensationInfo.CompensationUnit].
     *     @type \Google\Cloud\Talent\V4beta1\CompensationInfo\CompensationRange $range
     *           Compensation range.
     *     @type bool $include_jobs_with_unspecified_compensation_range
     *           If set to true, jobs with unspecified compensation range fields are
     *           included.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Filters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Type of filter.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompensationFilter.FilterType type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. Type of filter.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompensationFilter.FilterType type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\CompensationFilter\FilterType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Required. Specify desired `base compensation entry's`
     * [CompensationInfo.CompensationUnit][google.cloud.talent.v4beta1.CompensationInfo.CompensationUnit].
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4beta1.CompensationInfo.CompensationUnit units = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Required. Specify desired `base compensation entry's`
     * [CompensationInfo.CompensationUnit][google.cloud.talent.v4beta1.CompensationInfo.CompensationUnit].
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4beta1.CompensationInfo.CompensationUnit units = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Talent\V4beta1\CompensationInfo\CompensationUnit::class);
        $this->units = $arr;

        return $this;
    }

    /**
     * Compensation range.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompensationInfo.CompensationRange range = 3;</code>
     * @return \Google\Cloud\Talent\V4beta1\CompensationInfo\CompensationRange|null
     */
    public function getRange()
    {
        return $this->range;
    }

    public function hasRange()
    {
        return isset($this->range);
    }

    public function clearRange()
    {
        unset($this->range);
    }

    /**
     * Compensation range.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.CompensationInfo.CompensationRange range = 3;</code>
     * @param \Google\Cloud\Talent\V4beta1\CompensationInfo\CompensationRange $var
     * @return $this
     */
    public function setRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4beta1\CompensationInfo\CompensationRange::class);
        $this->range = $var;

        return $this;
    }

    /**
     * If set to true, jobs with unspecified compensation range fields are
     * included.
     *
     * Generated from protobuf field <code>bool include_jobs_with_unspecified_compensation_range = 4;</code>
     * @return bool
     */
    public function getIncludeJobsWithUnspecifiedCompensationRange()
    {
        return $this->include_jobs_with_unspecified_compensation_range;
    }

    /**
     * If set to true, jobs with unspecified compensation range fields are
     * included.
     *
     * Generated from protobuf field <code>bool include_jobs_with_unspecified_compensation_range = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeJobsWithUnspecifiedCompensationRange($var)
    {
        GPBUtil::checkBool($var);
        $this->include_jobs_with_unspecified_compensation_range = $var;

        return $this;
    }

}

