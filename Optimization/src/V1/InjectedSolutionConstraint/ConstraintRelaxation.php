<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1\InjectedSolutionConstraint;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * For a group of vehicles, specifies at what threshold(s) constraints on
 * visits will be relaxed and to which level. Shipments listed in
 * the `skipped_shipment` field are constrained to be skipped; i.e., they
 * cannot be performed.
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.InjectedSolutionConstraint.ConstraintRelaxation</code>
 */
class ConstraintRelaxation extends \Google\Protobuf\Internal\Message
{
    /**
     * All the visit constraint relaxations that will apply to visits on
     * routes with vehicles in `vehicle_indices`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.InjectedSolutionConstraint.ConstraintRelaxation.Relaxation relaxations = 1;</code>
     */
    private $relaxations;
    /**
     * Specifies the vehicle indices to which the visit constraint
     * `relaxations` apply. If empty, this is considered the default and the
     * `relaxations` apply to all vehicles that are not specified in other
     * `constraint_relaxations`. There can be at most one default, i.e., at
     * most one constraint relaxation field is allowed empty
     * `vehicle_indices`. A vehicle index can only be listed once, even within
     * several `constraint_relaxations`.
     * A vehicle index is mapped the same as [ShipmentRoute.vehicle_index][google.cloud.optimization.v1.ShipmentRoute.vehicle_index], if
     * `interpret_injected_solutions_using_labels` is true (see `fields`
     * comment).
     *
     * Generated from protobuf field <code>repeated int32 vehicle_indices = 2;</code>
     */
    private $vehicle_indices;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Optimization\V1\InjectedSolutionConstraint\ConstraintRelaxation\Relaxation[]|\Google\Protobuf\Internal\RepeatedField $relaxations
     *           All the visit constraint relaxations that will apply to visits on
     *           routes with vehicles in `vehicle_indices`.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $vehicle_indices
     *           Specifies the vehicle indices to which the visit constraint
     *           `relaxations` apply. If empty, this is considered the default and the
     *           `relaxations` apply to all vehicles that are not specified in other
     *           `constraint_relaxations`. There can be at most one default, i.e., at
     *           most one constraint relaxation field is allowed empty
     *           `vehicle_indices`. A vehicle index can only be listed once, even within
     *           several `constraint_relaxations`.
     *           A vehicle index is mapped the same as [ShipmentRoute.vehicle_index][google.cloud.optimization.v1.ShipmentRoute.vehicle_index], if
     *           `interpret_injected_solutions_using_labels` is true (see `fields`
     *           comment).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * All the visit constraint relaxations that will apply to visits on
     * routes with vehicles in `vehicle_indices`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.InjectedSolutionConstraint.ConstraintRelaxation.Relaxation relaxations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRelaxations()
    {
        return $this->relaxations;
    }

    /**
     * All the visit constraint relaxations that will apply to visits on
     * routes with vehicles in `vehicle_indices`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.InjectedSolutionConstraint.ConstraintRelaxation.Relaxation relaxations = 1;</code>
     * @param \Google\Cloud\Optimization\V1\InjectedSolutionConstraint\ConstraintRelaxation\Relaxation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRelaxations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Optimization\V1\InjectedSolutionConstraint\ConstraintRelaxation\Relaxation::class);
        $this->relaxations = $arr;

        return $this;
    }

    /**
     * Specifies the vehicle indices to which the visit constraint
     * `relaxations` apply. If empty, this is considered the default and the
     * `relaxations` apply to all vehicles that are not specified in other
     * `constraint_relaxations`. There can be at most one default, i.e., at
     * most one constraint relaxation field is allowed empty
     * `vehicle_indices`. A vehicle index can only be listed once, even within
     * several `constraint_relaxations`.
     * A vehicle index is mapped the same as [ShipmentRoute.vehicle_index][google.cloud.optimization.v1.ShipmentRoute.vehicle_index], if
     * `interpret_injected_solutions_using_labels` is true (see `fields`
     * comment).
     *
     * Generated from protobuf field <code>repeated int32 vehicle_indices = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVehicleIndices()
    {
        return $this->vehicle_indices;
    }

    /**
     * Specifies the vehicle indices to which the visit constraint
     * `relaxations` apply. If empty, this is considered the default and the
     * `relaxations` apply to all vehicles that are not specified in other
     * `constraint_relaxations`. There can be at most one default, i.e., at
     * most one constraint relaxation field is allowed empty
     * `vehicle_indices`. A vehicle index can only be listed once, even within
     * several `constraint_relaxations`.
     * A vehicle index is mapped the same as [ShipmentRoute.vehicle_index][google.cloud.optimization.v1.ShipmentRoute.vehicle_index], if
     * `interpret_injected_solutions_using_labels` is true (see `fields`
     * comment).
     *
     * Generated from protobuf field <code>repeated int32 vehicle_indices = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVehicleIndices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->vehicle_indices = $arr;

        return $this;
    }

}


