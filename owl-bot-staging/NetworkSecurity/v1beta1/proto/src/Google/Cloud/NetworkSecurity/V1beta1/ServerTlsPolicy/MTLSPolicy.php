<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networksecurity/v1beta1/server_tls_policy.proto

namespace Google\Cloud\NetworkSecurity\V1beta1\ServerTlsPolicy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification of the MTLSPolicy.
 *
 * Generated from protobuf message <code>google.cloud.networksecurity.v1beta1.ServerTlsPolicy.MTLSPolicy</code>
 */
class MTLSPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Defines the mechanism to obtain the Certificate Authority certificate to
     * validate the client certificate.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networksecurity.v1beta1.ValidationCA client_validation_ca = 1;</code>
     */
    private $client_validation_ca;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\NetworkSecurity\V1beta1\ValidationCA>|\Google\Protobuf\Internal\RepeatedField $client_validation_ca
     *           Defines the mechanism to obtain the Certificate Authority certificate to
     *           validate the client certificate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networksecurity\V1Beta1\ServerTlsPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Defines the mechanism to obtain the Certificate Authority certificate to
     * validate the client certificate.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networksecurity.v1beta1.ValidationCA client_validation_ca = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClientValidationCa()
    {
        return $this->client_validation_ca;
    }

    /**
     * Defines the mechanism to obtain the Certificate Authority certificate to
     * validate the client certificate.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networksecurity.v1beta1.ValidationCA client_validation_ca = 1;</code>
     * @param array<\Google\Cloud\NetworkSecurity\V1beta1\ValidationCA>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClientValidationCa($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetworkSecurity\V1beta1\ValidationCA::class);
        $this->client_validation_ca = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MTLSPolicy::class, \Google\Cloud\NetworkSecurity\V1beta1\ServerTlsPolicy_MTLSPolicy::class);

