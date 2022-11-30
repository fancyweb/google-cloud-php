<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1alpha2/domains.proto

namespace Google\Cloud\Domains\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `RetrieveTransferParameters` method.
 *
 * Generated from protobuf message <code>google.cloud.domains.v1alpha2.RetrieveTransferParametersRequest</code>
 */
class RetrieveTransferParametersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The domain name. Unicode domain names must be expressed in Punycode format.
     *
     * Generated from protobuf field <code>string domain_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $domain_name = '';
    /**
     * Required. The location. Must be in the format `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string location = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $location = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $domain_name
     *           Required. The domain name. Unicode domain names must be expressed in Punycode format.
     *     @type string $location
     *           Required. The location. Must be in the format `projects/&#42;&#47;locations/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Domains\V1Alpha2\Domains::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The domain name. Unicode domain names must be expressed in Punycode format.
     *
     * Generated from protobuf field <code>string domain_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDomainName()
    {
        return $this->domain_name;
    }

    /**
     * Required. The domain name. Unicode domain names must be expressed in Punycode format.
     *
     * Generated from protobuf field <code>string domain_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The location. Must be in the format `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string location = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Required. The location. Must be in the format `projects/&#42;&#47;locations/&#42;`.
     *
     * Generated from protobuf field <code>string location = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

}

