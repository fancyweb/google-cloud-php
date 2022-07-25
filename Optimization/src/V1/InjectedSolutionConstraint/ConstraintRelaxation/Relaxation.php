<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1\InjectedSolutionConstraint\ConstraintRelaxation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * If `relaxations` is empty, the start time and sequence of all visits
 * on `routes` are fully constrained and no new visits may be inserted or
 * added to those routes. Also, a vehicle's start and end time in
 * `routes` is fully constrained, unless the vehicle is empty (i.e., has no
 * visits and has `used_if_route_is_empty` set to false in the model).
 * `relaxations(i).level` specifies the constraint relaxation level applied
 * to a visit #j that satisfies:
 *   * `route.visits(j).start_time >= relaxations(i).threshold_time` AND
 *   * `j + 1 >= relaxations(i).threshold_visit_count`
 * Similarly, the vehicle start is relaxed to `relaxations(i).level` if it
 * satisfies:
 *   * `vehicle_start_time >= relaxations(i).threshold_time` AND
 *   * `relaxations(i).threshold_visit_count == 0`
 * and the vehicle end is relaxed to `relaxations(i).level` if it satisfies:
 *   * `vehicle_end_time >= relaxations(i).threshold_time` AND
 *   * `route.visits_size() + 1 >= relaxations(i).threshold_visit_count`
 * To apply a relaxation level if a visit meets the `threshold_visit_count`
 * OR the `threshold_time` add two `relaxations` with the same `level`:
 * one with only `threshold_visit_count` set and the other with only
 * `threshold_time` set. If a visit satisfies the conditions of multiple
 * `relaxations`, the most relaxed level applies. As a result, from the
 * vehicle start through the route visits in order to the vehicle end, the
 * relaxation level becomes more relaxed: i.e., the relaxation level is
 * non-decreasing as the route progresses.
 * The timing and sequence of route visits that do not satisfy the
 * threshold conditions of any `relaxations` are fully constrained
 * and no visits may be inserted into these sequences. Also, if a
 * vehicle start or end does not satisfy the conditions of any
 * relaxation the time is fixed, unless the vehicle is empty.
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.InjectedSolutionConstraint.ConstraintRelaxation.Relaxation</code>
 */
class Relaxation extends \Google\Protobuf\Internal\Message
{
    /**
     * The constraint relaxation level that applies when the conditions
     * at or after `threshold_time` AND at least `threshold_visit_count` are
     * satified.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.InjectedSolutionConstraint.ConstraintRelaxation.Relaxation.Level level = 1;</code>
     */
    private $level = 0;
    /**
     * The time at or after which the relaxation `level` may be applied.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp threshold_time = 2;</code>
     */
    private $threshold_time = null;
    /**
     * The number of visits at or after which the relaxation `level` may be
     * applied. If `threshold_visit_count` is 0 (or unset), the `level` may be
     * applied directly at the vehicle start.
     * If it is `route.visits_size() + 1`, the `level` may only be applied to
     * the vehicle end. If it is more than `route.visits_size() + 1`,
     * `level` is not applied at all for that route.
     *
     * Generated from protobuf field <code>int32 threshold_visit_count = 3;</code>
     */
    private $threshold_visit_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $level
     *           The constraint relaxation level that applies when the conditions
     *           at or after `threshold_time` AND at least `threshold_visit_count` are
     *           satified.
     *     @type \Google\Protobuf\Timestamp $threshold_time
     *           The time at or after which the relaxation `level` may be applied.
     *     @type int $threshold_visit_count
     *           The number of visits at or after which the relaxation `level` may be
     *           applied. If `threshold_visit_count` is 0 (or unset), the `level` may be
     *           applied directly at the vehicle start.
     *           If it is `route.visits_size() + 1`, the `level` may only be applied to
     *           the vehicle end. If it is more than `route.visits_size() + 1`,
     *           `level` is not applied at all for that route.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * The constraint relaxation level that applies when the conditions
     * at or after `threshold_time` AND at least `threshold_visit_count` are
     * satified.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.InjectedSolutionConstraint.ConstraintRelaxation.Relaxation.Level level = 1;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * The constraint relaxation level that applies when the conditions
     * at or after `threshold_time` AND at least `threshold_visit_count` are
     * satified.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.InjectedSolutionConstraint.ConstraintRelaxation.Relaxation.Level level = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Optimization\V1\InjectedSolutionConstraint\ConstraintRelaxation\Relaxation\Level::class);
        $this->level = $var;

        return $this;
    }

    /**
     * The time at or after which the relaxation `level` may be applied.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp threshold_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getThresholdTime()
    {
        return $this->threshold_time;
    }

    public function hasThresholdTime()
    {
        return isset($this->threshold_time);
    }

    public function clearThresholdTime()
    {
        unset($this->threshold_time);
    }

    /**
     * The time at or after which the relaxation `level` may be applied.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp threshold_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setThresholdTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->threshold_time = $var;

        return $this;
    }

    /**
     * The number of visits at or after which the relaxation `level` may be
     * applied. If `threshold_visit_count` is 0 (or unset), the `level` may be
     * applied directly at the vehicle start.
     * If it is `route.visits_size() + 1`, the `level` may only be applied to
     * the vehicle end. If it is more than `route.visits_size() + 1`,
     * `level` is not applied at all for that route.
     *
     * Generated from protobuf field <code>int32 threshold_visit_count = 3;</code>
     * @return int
     */
    public function getThresholdVisitCount()
    {
        return $this->threshold_visit_count;
    }

    /**
     * The number of visits at or after which the relaxation `level` may be
     * applied. If `threshold_visit_count` is 0 (or unset), the `level` may be
     * applied directly at the vehicle start.
     * If it is `route.visits_size() + 1`, the `level` may only be applied to
     * the vehicle end. If it is more than `route.visits_size() + 1`,
     * `level` is not applied at all for that route.
     *
     * Generated from protobuf field <code>int32 threshold_visit_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setThresholdVisitCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->threshold_visit_count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Relaxation::class, \Google\Cloud\Optimization\V1\InjectedSolutionConstraint_ConstraintRelaxation_Relaxation::class);

