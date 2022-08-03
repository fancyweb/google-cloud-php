<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/k8s.min.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EnvVarSource represents a source for the value of an EnvVar.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.EnvVarSource</code>
 */
class EnvVarSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Selects a secret and a specific version from Cloud Secret Manager.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.SecretKeySelector secret_key_ref = 1;</code>
     */
    private $secret_key_ref = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Run\V2\SecretKeySelector $secret_key_ref
     *           Selects a secret and a specific version from Cloud Secret Manager.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\K8SMin::initOnce();
        parent::__construct($data);
    }

    /**
     * Selects a secret and a specific version from Cloud Secret Manager.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.SecretKeySelector secret_key_ref = 1;</code>
     * @return \Google\Cloud\Run\V2\SecretKeySelector|null
     */
    public function getSecretKeyRef()
    {
        return $this->secret_key_ref;
    }

    public function hasSecretKeyRef()
    {
        return isset($this->secret_key_ref);
    }

    public function clearSecretKeyRef()
    {
        unset($this->secret_key_ref);
    }

    /**
     * Selects a secret and a specific version from Cloud Secret Manager.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.SecretKeySelector secret_key_ref = 1;</code>
     * @param \Google\Cloud\Run\V2\SecretKeySelector $var
     * @return $this
     */
    public function setSecretKeyRef($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Run\V2\SecretKeySelector::class);
        $this->secret_key_ref = $var;

        return $this;
    }

}

