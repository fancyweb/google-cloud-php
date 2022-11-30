<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/binaryauthorization/v1beta1/service.proto

namespace Google\Cloud\BinaryAuthorization\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [BinauthzManagementService.DeleteAttestor][].
 *
 * Generated from protobuf message <code>google.cloud.binaryauthorization.v1beta1.DeleteAttestorRequest</code>
 */
class DeleteAttestorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the [attestors][google.cloud.binaryauthorization.v1beta1.Attestor] to delete, in the format
     * `projects/&#42;&#47;attestors/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the [attestors][google.cloud.binaryauthorization.v1beta1.Attestor] to delete, in the format
     *           `projects/&#42;&#47;attestors/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Binaryauthorization\V1Beta1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the [attestors][google.cloud.binaryauthorization.v1beta1.Attestor] to delete, in the format
     * `projects/&#42;&#47;attestors/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the [attestors][google.cloud.binaryauthorization.v1beta1.Attestor] to delete, in the format
     * `projects/&#42;&#47;attestors/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

