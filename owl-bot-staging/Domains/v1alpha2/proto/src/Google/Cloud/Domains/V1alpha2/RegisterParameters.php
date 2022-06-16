<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1alpha2/domains.proto

namespace Google\Cloud\Domains\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters required to register a new domain.
 *
 * Generated from protobuf message <code>google.cloud.domains.v1alpha2.RegisterParameters</code>
 */
class RegisterParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * The domain name. Unicode domain names are expressed in Punycode format.
     *
     * Generated from protobuf field <code>string domain_name = 1;</code>
     */
    protected $domain_name = '';
    /**
     * Indicates whether the domain is available for registration. This value is
     * accurate when obtained by calling `RetrieveRegisterParameters`, but is
     * approximate when obtained by calling `SearchDomains`.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1alpha2.RegisterParameters.Availability availability = 2;</code>
     */
    protected $availability = 0;
    /**
     * Contact privacy options that the domain supports.
     *
     * Generated from protobuf field <code>repeated .google.cloud.domains.v1alpha2.ContactPrivacy supported_privacy = 3;</code>
     */
    private $supported_privacy;
    /**
     * Notices about special properties of the domain.
     *
     * Generated from protobuf field <code>repeated .google.cloud.domains.v1alpha2.DomainNotice domain_notices = 4;</code>
     */
    private $domain_notices;
    /**
     * Price to register or renew the domain for one year.
     *
     * Generated from protobuf field <code>.google.type.Money yearly_price = 5;</code>
     */
    protected $yearly_price = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $domain_name
     *           The domain name. Unicode domain names are expressed in Punycode format.
     *     @type int $availability
     *           Indicates whether the domain is available for registration. This value is
     *           accurate when obtained by calling `RetrieveRegisterParameters`, but is
     *           approximate when obtained by calling `SearchDomains`.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $supported_privacy
     *           Contact privacy options that the domain supports.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $domain_notices
     *           Notices about special properties of the domain.
     *     @type \Google\Type\Money $yearly_price
     *           Price to register or renew the domain for one year.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Domains\V1Alpha2\Domains::initOnce();
        parent::__construct($data);
    }

    /**
     * The domain name. Unicode domain names are expressed in Punycode format.
     *
     * Generated from protobuf field <code>string domain_name = 1;</code>
     * @return string
     */
    public function getDomainName()
    {
        return $this->domain_name;
    }

    /**
     * The domain name. Unicode domain names are expressed in Punycode format.
     *
     * Generated from protobuf field <code>string domain_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDomainName($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain_name = $var;

        return $this;
    }

    /**
     * Indicates whether the domain is available for registration. This value is
     * accurate when obtained by calling `RetrieveRegisterParameters`, but is
     * approximate when obtained by calling `SearchDomains`.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1alpha2.RegisterParameters.Availability availability = 2;</code>
     * @return int
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Indicates whether the domain is available for registration. This value is
     * accurate when obtained by calling `RetrieveRegisterParameters`, but is
     * approximate when obtained by calling `SearchDomains`.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1alpha2.RegisterParameters.Availability availability = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAvailability($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Domains\V1alpha2\RegisterParameters\Availability::class);
        $this->availability = $var;

        return $this;
    }

    /**
     * Contact privacy options that the domain supports.
     *
     * Generated from protobuf field <code>repeated .google.cloud.domains.v1alpha2.ContactPrivacy supported_privacy = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupportedPrivacy()
    {
        return $this->supported_privacy;
    }

    /**
     * Contact privacy options that the domain supports.
     *
     * Generated from protobuf field <code>repeated .google.cloud.domains.v1alpha2.ContactPrivacy supported_privacy = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupportedPrivacy($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Domains\V1alpha2\ContactPrivacy::class);
        $this->supported_privacy = $arr;

        return $this;
    }

    /**
     * Notices about special properties of the domain.
     *
     * Generated from protobuf field <code>repeated .google.cloud.domains.v1alpha2.DomainNotice domain_notices = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDomainNotices()
    {
        return $this->domain_notices;
    }

    /**
     * Notices about special properties of the domain.
     *
     * Generated from protobuf field <code>repeated .google.cloud.domains.v1alpha2.DomainNotice domain_notices = 4;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDomainNotices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Domains\V1alpha2\DomainNotice::class);
        $this->domain_notices = $arr;

        return $this;
    }

    /**
     * Price to register or renew the domain for one year.
     *
     * Generated from protobuf field <code>.google.type.Money yearly_price = 5;</code>
     * @return \Google\Type\Money|null
     */
    public function getYearlyPrice()
    {
        return $this->yearly_price;
    }

    public function hasYearlyPrice()
    {
        return isset($this->yearly_price);
    }

    public function clearYearlyPrice()
    {
        unset($this->yearly_price);
    }

    /**
     * Price to register or renew the domain for one year.
     *
     * Generated from protobuf field <code>.google.type.Money yearly_price = 5;</code>
     * @param \Google\Type\Money $var
     * @return $this
     */
    public function setYearlyPrice($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Money::class);
        $this->yearly_price = $var;

        return $this;
    }

}

