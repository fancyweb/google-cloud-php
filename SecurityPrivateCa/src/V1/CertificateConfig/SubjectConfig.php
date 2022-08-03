<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1\CertificateConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * These values are used to create the distinguished name and subject
 * alternative name fields in an X.509 certificate.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.CertificateConfig.SubjectConfig</code>
 */
class SubjectConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Contains distinguished name fields such as the common name, location and
     * organization.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.Subject subject = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $subject = null;
    /**
     * Optional. The subject alternative name fields.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.SubjectAltNames subject_alt_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $subject_alt_name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Security\PrivateCA\V1\Subject $subject
     *           Required. Contains distinguished name fields such as the common name, location and
     *           organization.
     *     @type \Google\Cloud\Security\PrivateCA\V1\SubjectAltNames $subject_alt_name
     *           Optional. The subject alternative name fields.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Contains distinguished name fields such as the common name, location and
     * organization.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.Subject subject = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\Subject|null
     */
    public function getSubject()
    {
        return $this->subject;
    }

    public function hasSubject()
    {
        return isset($this->subject);
    }

    public function clearSubject()
    {
        unset($this->subject);
    }

    /**
     * Required. Contains distinguished name fields such as the common name, location and
     * organization.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.Subject subject = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\Subject $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\Subject::class);
        $this->subject = $var;

        return $this;
    }

    /**
     * Optional. The subject alternative name fields.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.SubjectAltNames subject_alt_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\SubjectAltNames|null
     */
    public function getSubjectAltName()
    {
        return $this->subject_alt_name;
    }

    public function hasSubjectAltName()
    {
        return isset($this->subject_alt_name);
    }

    public function clearSubjectAltName()
    {
        unset($this->subject_alt_name);
    }

    /**
     * Optional. The subject alternative name fields.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.SubjectAltNames subject_alt_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\SubjectAltNames $var
     * @return $this
     */
    public function setSubjectAltName($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\SubjectAltNames::class);
        $this->subject_alt_name = $var;

        return $this;
    }

}


