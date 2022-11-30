<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies attributes of transitions between two consecutive visits on a
 * route. Several `TransitionAttributes` may apply to the same transition: in
 * that case, all extra costs add up and the strictest constraint or limit
 * applies (following natural "AND" semantics).
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.TransitionAttributes</code>
 */
class TransitionAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Tags defining the set of (src->dst) transitions these attributes apply to.
     * A source visit or vehicle start matches iff its
     * [VisitRequest.tags][google.cloud.optimization.v1.Shipment.VisitRequest.tags]
     * or [Vehicle.start_tags][google.cloud.optimization.v1.Vehicle.start_tags]
     * either contains `src_tag` or does not contain `excluded_src_tag` (depending
     * on which of these two fields is non-empty).
     *
     * Generated from protobuf field <code>string src_tag = 1;</code>
     */
    protected $src_tag = '';
    /**
     * See `src_tag`. Exactly one of `src_tag` and `excluded_src_tag` must be
     * non-empty.
     *
     * Generated from protobuf field <code>string excluded_src_tag = 2;</code>
     */
    protected $excluded_src_tag = '';
    /**
     * A destination visit or vehicle end matches iff its
     * [VisitRequest.tags][google.cloud.optimization.v1.Shipment.VisitRequest.tags]
     * or [Vehicle.end_tags][google.cloud.optimization.v1.Vehicle.end_tags] either
     * contains `dst_tag` or does not contain `excluded_dst_tag` (depending on
     * which of these two fields is non-empty).
     *
     * Generated from protobuf field <code>string dst_tag = 3;</code>
     */
    protected $dst_tag = '';
    /**
     * See `dst_tag`. Exactly one of `dst_tag` and `excluded_dst_tag` must be
     * non-empty.
     *
     * Generated from protobuf field <code>string excluded_dst_tag = 4;</code>
     */
    protected $excluded_dst_tag = '';
    /**
     * Specifies a cost for performing this transition. This is in the same unit
     * as all other costs in the model and must not be negative. It is applied on
     * top of all other existing costs.
     *
     * Generated from protobuf field <code>double cost = 5;</code>
     */
    protected $cost = 0.0;
    /**
     * Specifies a cost per kilometer applied to the distance traveled while
     * performing this transition. It adds up to any
     * [Vehicle.cost_per_kilometer][google.cloud.optimization.v1.Vehicle.cost_per_kilometer]
     * specified on vehicles.
     *
     * Generated from protobuf field <code>double cost_per_kilometer = 6;</code>
     */
    protected $cost_per_kilometer = 0.0;
    /**
     * Specifies a limit on the distance traveled while performing this
     * transition.
     * As of 2021/06, only soft limits are supported.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.DistanceLimit distance_limit = 7;</code>
     */
    protected $distance_limit = null;
    /**
     * Specifies a delay incurred when performing this transition.
     * This delay always occurs *after* finishing the source visit and *before*
     * starting the destination visit.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration delay = 8;</code>
     */
    protected $delay = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $src_tag
     *           Tags defining the set of (src->dst) transitions these attributes apply to.
     *           A source visit or vehicle start matches iff its
     *           [VisitRequest.tags][google.cloud.optimization.v1.Shipment.VisitRequest.tags]
     *           or [Vehicle.start_tags][google.cloud.optimization.v1.Vehicle.start_tags]
     *           either contains `src_tag` or does not contain `excluded_src_tag` (depending
     *           on which of these two fields is non-empty).
     *     @type string $excluded_src_tag
     *           See `src_tag`. Exactly one of `src_tag` and `excluded_src_tag` must be
     *           non-empty.
     *     @type string $dst_tag
     *           A destination visit or vehicle end matches iff its
     *           [VisitRequest.tags][google.cloud.optimization.v1.Shipment.VisitRequest.tags]
     *           or [Vehicle.end_tags][google.cloud.optimization.v1.Vehicle.end_tags] either
     *           contains `dst_tag` or does not contain `excluded_dst_tag` (depending on
     *           which of these two fields is non-empty).
     *     @type string $excluded_dst_tag
     *           See `dst_tag`. Exactly one of `dst_tag` and `excluded_dst_tag` must be
     *           non-empty.
     *     @type float $cost
     *           Specifies a cost for performing this transition. This is in the same unit
     *           as all other costs in the model and must not be negative. It is applied on
     *           top of all other existing costs.
     *     @type float $cost_per_kilometer
     *           Specifies a cost per kilometer applied to the distance traveled while
     *           performing this transition. It adds up to any
     *           [Vehicle.cost_per_kilometer][google.cloud.optimization.v1.Vehicle.cost_per_kilometer]
     *           specified on vehicles.
     *     @type \Google\Cloud\Optimization\V1\DistanceLimit $distance_limit
     *           Specifies a limit on the distance traveled while performing this
     *           transition.
     *           As of 2021/06, only soft limits are supported.
     *     @type \Google\Protobuf\Duration $delay
     *           Specifies a delay incurred when performing this transition.
     *           This delay always occurs *after* finishing the source visit and *before*
     *           starting the destination visit.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * Tags defining the set of (src->dst) transitions these attributes apply to.
     * A source visit or vehicle start matches iff its
     * [VisitRequest.tags][google.cloud.optimization.v1.Shipment.VisitRequest.tags]
     * or [Vehicle.start_tags][google.cloud.optimization.v1.Vehicle.start_tags]
     * either contains `src_tag` or does not contain `excluded_src_tag` (depending
     * on which of these two fields is non-empty).
     *
     * Generated from protobuf field <code>string src_tag = 1;</code>
     * @return string
     */
    public function getSrcTag()
    {
        return $this->src_tag;
    }

    /**
     * Tags defining the set of (src->dst) transitions these attributes apply to.
     * A source visit or vehicle start matches iff its
     * [VisitRequest.tags][google.cloud.optimization.v1.Shipment.VisitRequest.tags]
     * or [Vehicle.start_tags][google.cloud.optimization.v1.Vehicle.start_tags]
     * either contains `src_tag` or does not contain `excluded_src_tag` (depending
     * on which of these two fields is non-empty).
     *
     * Generated from protobuf field <code>string src_tag = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSrcTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->src_tag = $var;

        return $this;
    }

    /**
     * See `src_tag`. Exactly one of `src_tag` and `excluded_src_tag` must be
     * non-empty.
     *
     * Generated from protobuf field <code>string excluded_src_tag = 2;</code>
     * @return string
     */
    public function getExcludedSrcTag()
    {
        return $this->excluded_src_tag;
    }

    /**
     * See `src_tag`. Exactly one of `src_tag` and `excluded_src_tag` must be
     * non-empty.
     *
     * Generated from protobuf field <code>string excluded_src_tag = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExcludedSrcTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->excluded_src_tag = $var;

        return $this;
    }

    /**
     * A destination visit or vehicle end matches iff its
     * [VisitRequest.tags][google.cloud.optimization.v1.Shipment.VisitRequest.tags]
     * or [Vehicle.end_tags][google.cloud.optimization.v1.Vehicle.end_tags] either
     * contains `dst_tag` or does not contain `excluded_dst_tag` (depending on
     * which of these two fields is non-empty).
     *
     * Generated from protobuf field <code>string dst_tag = 3;</code>
     * @return string
     */
    public function getDstTag()
    {
        return $this->dst_tag;
    }

    /**
     * A destination visit or vehicle end matches iff its
     * [VisitRequest.tags][google.cloud.optimization.v1.Shipment.VisitRequest.tags]
     * or [Vehicle.end_tags][google.cloud.optimization.v1.Vehicle.end_tags] either
     * contains `dst_tag` or does not contain `excluded_dst_tag` (depending on
     * which of these two fields is non-empty).
     *
     * Generated from protobuf field <code>string dst_tag = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDstTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->dst_tag = $var;

        return $this;
    }

    /**
     * See `dst_tag`. Exactly one of `dst_tag` and `excluded_dst_tag` must be
     * non-empty.
     *
     * Generated from protobuf field <code>string excluded_dst_tag = 4;</code>
     * @return string
     */
    public function getExcludedDstTag()
    {
        return $this->excluded_dst_tag;
    }

    /**
     * See `dst_tag`. Exactly one of `dst_tag` and `excluded_dst_tag` must be
     * non-empty.
     *
     * Generated from protobuf field <code>string excluded_dst_tag = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setExcludedDstTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->excluded_dst_tag = $var;

        return $this;
    }

    /**
     * Specifies a cost for performing this transition. This is in the same unit
     * as all other costs in the model and must not be negative. It is applied on
     * top of all other existing costs.
     *
     * Generated from protobuf field <code>double cost = 5;</code>
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Specifies a cost for performing this transition. This is in the same unit
     * as all other costs in the model and must not be negative. It is applied on
     * top of all other existing costs.
     *
     * Generated from protobuf field <code>double cost = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setCost($var)
    {
        GPBUtil::checkDouble($var);
        $this->cost = $var;

        return $this;
    }

    /**
     * Specifies a cost per kilometer applied to the distance traveled while
     * performing this transition. It adds up to any
     * [Vehicle.cost_per_kilometer][google.cloud.optimization.v1.Vehicle.cost_per_kilometer]
     * specified on vehicles.
     *
     * Generated from protobuf field <code>double cost_per_kilometer = 6;</code>
     * @return float
     */
    public function getCostPerKilometer()
    {
        return $this->cost_per_kilometer;
    }

    /**
     * Specifies a cost per kilometer applied to the distance traveled while
     * performing this transition. It adds up to any
     * [Vehicle.cost_per_kilometer][google.cloud.optimization.v1.Vehicle.cost_per_kilometer]
     * specified on vehicles.
     *
     * Generated from protobuf field <code>double cost_per_kilometer = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setCostPerKilometer($var)
    {
        GPBUtil::checkDouble($var);
        $this->cost_per_kilometer = $var;

        return $this;
    }

    /**
     * Specifies a limit on the distance traveled while performing this
     * transition.
     * As of 2021/06, only soft limits are supported.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.DistanceLimit distance_limit = 7;</code>
     * @return \Google\Cloud\Optimization\V1\DistanceLimit|null
     */
    public function getDistanceLimit()
    {
        return $this->distance_limit;
    }

    public function hasDistanceLimit()
    {
        return isset($this->distance_limit);
    }

    public function clearDistanceLimit()
    {
        unset($this->distance_limit);
    }

    /**
     * Specifies a limit on the distance traveled while performing this
     * transition.
     * As of 2021/06, only soft limits are supported.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.DistanceLimit distance_limit = 7;</code>
     * @param \Google\Cloud\Optimization\V1\DistanceLimit $var
     * @return $this
     */
    public function setDistanceLimit($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Optimization\V1\DistanceLimit::class);
        $this->distance_limit = $var;

        return $this;
    }

    /**
     * Specifies a delay incurred when performing this transition.
     * This delay always occurs *after* finishing the source visit and *before*
     * starting the destination visit.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration delay = 8;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDelay()
    {
        return $this->delay;
    }

    public function hasDelay()
    {
        return isset($this->delay);
    }

    public function clearDelay()
    {
        unset($this->delay);
    }

    /**
     * Specifies a delay incurred when performing this transition.
     * This delay always occurs *after* finishing the source visit and *before*
     * starting the destination visit.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration delay = 8;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDelay($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->delay = $var;

        return $this;
    }

}

