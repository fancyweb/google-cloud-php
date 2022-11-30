<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1beta1/domains.proto

namespace Google\Cloud\Domains\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines renewal, billing, and transfer settings for a `Registration`.
 *
 * Generated from protobuf message <code>google.cloud.domains.v1beta1.ManagementSettings</code>
 */
class ManagementSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The renewal method for this `Registration`.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.ManagementSettings.RenewalMethod renewal_method = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $renewal_method = 0;
    /**
     * Controls whether the domain can be transferred to another registrar.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.TransferLockState transfer_lock_state = 4;</code>
     */
    protected $transfer_lock_state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $renewal_method
     *           Output only. The renewal method for this `Registration`.
     *     @type int $transfer_lock_state
     *           Controls whether the domain can be transferred to another registrar.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Domains\V1Beta1\Domains::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The renewal method for this `Registration`.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.ManagementSettings.RenewalMethod renewal_method = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getRenewalMethod()
    {
        return $this->renewal_method;
    }

    /**
     * Output only. The renewal method for this `Registration`.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.ManagementSettings.RenewalMethod renewal_method = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setRenewalMethod($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Domains\V1beta1\ManagementSettings\RenewalMethod::class);
        $this->renewal_method = $var;

        return $this;
    }

    /**
     * Controls whether the domain can be transferred to another registrar.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.TransferLockState transfer_lock_state = 4;</code>
     * @return int
     */
    public function getTransferLockState()
    {
        return $this->transfer_lock_state;
    }

    /**
     * Controls whether the domain can be transferred to another registrar.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.TransferLockState transfer_lock_state = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setTransferLockState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Domains\V1beta1\TransferLockState::class);
        $this->transfer_lock_state = $var;

        return $this;
    }

}

