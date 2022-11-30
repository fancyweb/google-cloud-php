<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1beta1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A [Certificate][google.cloud.security.privateca.v1beta1.Certificate] corresponds to a signed X.509 certificate issued by a
 * [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority].
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1beta1.Certificate</code>
 */
class Certificate extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource path for this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;certificateAuthorities/&#42;&#47;certificates/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Required. Immutable. The desired lifetime of a certificate. Used to create the
     * "not_before_time" and "not_after_time" fields inside an X.509
     * certificate. Note that the lifetime may be truncated if it would extend
     * past the life of any certificate authority in the issuing chain.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lifetime = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $lifetime = null;
    /**
     * Output only. Details regarding the revocation of this [Certificate][google.cloud.security.privateca.v1beta1.Certificate]. This
     * [Certificate][google.cloud.security.privateca.v1beta1.Certificate] is considered revoked if and only if this field is present.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.Certificate.RevocationDetails revocation_details = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $revocation_details = null;
    /**
     * Output only. The pem-encoded, signed X.509 certificate.
     *
     * Generated from protobuf field <code>string pem_certificate = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $pem_certificate = '';
    /**
     * Output only. A structured description of the issued X.509 certificate.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateDescription certificate_description = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $certificate_description = null;
    /**
     * Output only. The chain that may be used to verify the X.509 certificate. Expected to be
     * in issuer-to-root order according to RFC 5246.
     *
     * Generated from protobuf field <code>repeated string pem_certificate_chain = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $pem_certificate_chain;
    /**
     * Output only. The time at which this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time at which this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. Labels with user-defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    protected $certificate_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource path for this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;certificateAuthorities/&#42;&#47;certificates/&#42;`.
     *     @type string $pem_csr
     *           Immutable. A pem-encoded X.509 certificate signing request (CSR).
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\CertificateConfig $config
     *           Immutable. A description of the certificate and key that does not require X.509 or
     *           ASN.1.
     *     @type \Google\Protobuf\Duration $lifetime
     *           Required. Immutable. The desired lifetime of a certificate. Used to create the
     *           "not_before_time" and "not_after_time" fields inside an X.509
     *           certificate. Note that the lifetime may be truncated if it would extend
     *           past the life of any certificate authority in the issuing chain.
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\Certificate\RevocationDetails $revocation_details
     *           Output only. Details regarding the revocation of this [Certificate][google.cloud.security.privateca.v1beta1.Certificate]. This
     *           [Certificate][google.cloud.security.privateca.v1beta1.Certificate] is considered revoked if and only if this field is present.
     *     @type string $pem_certificate
     *           Output only. The pem-encoded, signed X.509 certificate.
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\CertificateDescription $certificate_description
     *           Output only. A structured description of the issued X.509 certificate.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $pem_certificate_chain
     *           Output only. The chain that may be used to verify the X.509 certificate. Expected to be
     *           in issuer-to-root order according to RFC 5246.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time at which this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] was updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Labels with user-defined metadata.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource path for this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;certificateAuthorities/&#42;&#47;certificates/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource path for this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;certificateAuthorities/&#42;&#47;certificates/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Immutable. A pem-encoded X.509 certificate signing request (CSR).
     *
     * Generated from protobuf field <code>string pem_csr = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getPemCsr()
    {
        return $this->readOneof(2);
    }

    public function hasPemCsr()
    {
        return $this->hasOneof(2);
    }

    /**
     * Immutable. A pem-encoded X.509 certificate signing request (CSR).
     *
     * Generated from protobuf field <code>string pem_csr = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setPemCsr($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Immutable. A description of the certificate and key that does not require X.509 or
     * ASN.1.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateConfig config = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1beta1\CertificateConfig|null
     */
    public function getConfig()
    {
        return $this->readOneof(3);
    }

    public function hasConfig()
    {
        return $this->hasOneof(3);
    }

    /**
     * Immutable. A description of the certificate and key that does not require X.509 or
     * ASN.1.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateConfig config = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\CertificateConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1beta1\CertificateConfig::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Required. Immutable. The desired lifetime of a certificate. Used to create the
     * "not_before_time" and "not_after_time" fields inside an X.509
     * certificate. Note that the lifetime may be truncated if it would extend
     * past the life of any certificate authority in the issuing chain.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lifetime = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getLifetime()
    {
        return $this->lifetime;
    }

    public function hasLifetime()
    {
        return isset($this->lifetime);
    }

    public function clearLifetime()
    {
        unset($this->lifetime);
    }

    /**
     * Required. Immutable. The desired lifetime of a certificate. Used to create the
     * "not_before_time" and "not_after_time" fields inside an X.509
     * certificate. Note that the lifetime may be truncated if it would extend
     * past the life of any certificate authority in the issuing chain.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lifetime = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLifetime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->lifetime = $var;

        return $this;
    }

    /**
     * Output only. Details regarding the revocation of this [Certificate][google.cloud.security.privateca.v1beta1.Certificate]. This
     * [Certificate][google.cloud.security.privateca.v1beta1.Certificate] is considered revoked if and only if this field is present.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.Certificate.RevocationDetails revocation_details = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1beta1\Certificate\RevocationDetails|null
     */
    public function getRevocationDetails()
    {
        return $this->revocation_details;
    }

    public function hasRevocationDetails()
    {
        return isset($this->revocation_details);
    }

    public function clearRevocationDetails()
    {
        unset($this->revocation_details);
    }

    /**
     * Output only. Details regarding the revocation of this [Certificate][google.cloud.security.privateca.v1beta1.Certificate]. This
     * [Certificate][google.cloud.security.privateca.v1beta1.Certificate] is considered revoked if and only if this field is present.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.Certificate.RevocationDetails revocation_details = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\Certificate\RevocationDetails $var
     * @return $this
     */
    public function setRevocationDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1beta1\Certificate\RevocationDetails::class);
        $this->revocation_details = $var;

        return $this;
    }

    /**
     * Output only. The pem-encoded, signed X.509 certificate.
     *
     * Generated from protobuf field <code>string pem_certificate = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPemCertificate()
    {
        return $this->pem_certificate;
    }

    /**
     * Output only. The pem-encoded, signed X.509 certificate.
     *
     * Generated from protobuf field <code>string pem_certificate = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPemCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->pem_certificate = $var;

        return $this;
    }

    /**
     * Output only. A structured description of the issued X.509 certificate.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateDescription certificate_description = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1beta1\CertificateDescription|null
     */
    public function getCertificateDescription()
    {
        return $this->certificate_description;
    }

    public function hasCertificateDescription()
    {
        return isset($this->certificate_description);
    }

    public function clearCertificateDescription()
    {
        unset($this->certificate_description);
    }

    /**
     * Output only. A structured description of the issued X.509 certificate.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateDescription certificate_description = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\CertificateDescription $var
     * @return $this
     */
    public function setCertificateDescription($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1beta1\CertificateDescription::class);
        $this->certificate_description = $var;

        return $this;
    }

    /**
     * Output only. The chain that may be used to verify the X.509 certificate. Expected to be
     * in issuer-to-root order according to RFC 5246.
     *
     * Generated from protobuf field <code>repeated string pem_certificate_chain = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPemCertificateChain()
    {
        return $this->pem_certificate_chain;
    }

    /**
     * Output only. The chain that may be used to verify the X.509 certificate. Expected to be
     * in issuer-to-root order according to RFC 5246.
     *
     * Generated from protobuf field <code>repeated string pem_certificate_chain = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPemCertificateChain($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->pem_certificate_chain = $arr;

        return $this;
    }

    /**
     * Output only. The time at which this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time at which this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time at which this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. Labels with user-defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Labels with user-defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getCertificateConfig()
    {
        return $this->whichOneof("certificate_config");
    }

}

