<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/v1/oslogin.proto

namespace Google\Cloud\OsLogin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for retrieving an SSH public key.
 *
 * Generated from protobuf message <code>google.cloud.oslogin.v1.GetSshPublicKeyRequest</code>
 */
class GetSshPublicKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The fingerprint of the public key to retrieve. Public keys are identified
     * by their SHA-256 fingerprint. The fingerprint of the public key is in
     * format `users/{user}/sshPublicKeys/{fingerprint}`.
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
     *           Required. The fingerprint of the public key to retrieve. Public keys are identified
     *           by their SHA-256 fingerprint. The fingerprint of the public key is in
     *           format `users/{user}/sshPublicKeys/{fingerprint}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oslogin\V1\Oslogin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The fingerprint of the public key to retrieve. Public keys are identified
     * by their SHA-256 fingerprint. The fingerprint of the public key is in
     * format `users/{user}/sshPublicKeys/{fingerprint}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The fingerprint of the public key to retrieve. Public keys are identified
     * by their SHA-256 fingerprint. The fingerprint of the public key is in
     * format `users/{user}/sshPublicKeys/{fingerprint}`.
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

