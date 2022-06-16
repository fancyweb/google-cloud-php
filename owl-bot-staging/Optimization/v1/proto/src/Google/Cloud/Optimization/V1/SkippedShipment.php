<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies details of unperformed shipments in a solution. For trivial cases
 * and/or if we are able to identify the cause for skipping, we report the
 * reason here.
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.SkippedShipment</code>
 */
class SkippedShipment extends \Google\Protobuf\Internal\Message
{
    /**
     * The index corresponds to the index of the shipment in the source
     * `ShipmentModel`.
     *
     * Generated from protobuf field <code>int32 index = 1;</code>
     */
    protected $index = 0;
    /**
     * Copy of the corresponding [Shipment.label][google.cloud.optimization.v1.Shipment.label], if specified in the
     * `Shipment`.
     *
     * Generated from protobuf field <code>string label = 2;</code>
     */
    protected $label = '';
    /**
     * A list of reasons that explain why the shipment was skipped. See comment
     * above `Reason`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.SkippedShipment.Reason reasons = 3;</code>
     */
    private $reasons;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $index
     *           The index corresponds to the index of the shipment in the source
     *           `ShipmentModel`.
     *     @type string $label
     *           Copy of the corresponding [Shipment.label][google.cloud.optimization.v1.Shipment.label], if specified in the
     *           `Shipment`.
     *     @type \Google\Cloud\Optimization\V1\SkippedShipment\Reason[]|\Google\Protobuf\Internal\RepeatedField $reasons
     *           A list of reasons that explain why the shipment was skipped. See comment
     *           above `Reason`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * The index corresponds to the index of the shipment in the source
     * `ShipmentModel`.
     *
     * Generated from protobuf field <code>int32 index = 1;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * The index corresponds to the index of the shipment in the source
     * `ShipmentModel`.
     *
     * Generated from protobuf field <code>int32 index = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Copy of the corresponding [Shipment.label][google.cloud.optimization.v1.Shipment.label], if specified in the
     * `Shipment`.
     *
     * Generated from protobuf field <code>string label = 2;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Copy of the corresponding [Shipment.label][google.cloud.optimization.v1.Shipment.label], if specified in the
     * `Shipment`.
     *
     * Generated from protobuf field <code>string label = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

    /**
     * A list of reasons that explain why the shipment was skipped. See comment
     * above `Reason`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.SkippedShipment.Reason reasons = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReasons()
    {
        return $this->reasons;
    }

    /**
     * A list of reasons that explain why the shipment was skipped. See comment
     * above `Reason`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.SkippedShipment.Reason reasons = 3;</code>
     * @param \Google\Cloud\Optimization\V1\SkippedShipment\Reason[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReasons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Optimization\V1\SkippedShipment\Reason::class);
        $this->reasons = $arr;

        return $this;
    }

}

