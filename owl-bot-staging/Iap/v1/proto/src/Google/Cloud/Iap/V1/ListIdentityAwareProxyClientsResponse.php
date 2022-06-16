<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iap/v1/service.proto

namespace Google\Cloud\Iap\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListIdentityAwareProxyClients.
 *
 * Generated from protobuf message <code>google.cloud.iap.v1.ListIdentityAwareProxyClientsResponse</code>
 */
class ListIdentityAwareProxyClientsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Clients existing in the brand.
     *
     * Generated from protobuf field <code>repeated .google.cloud.iap.v1.IdentityAwareProxyClient identity_aware_proxy_clients = 1;</code>
     */
    private $identity_aware_proxy_clients;
    /**
     * A token, which can be send as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Iap\V1\IdentityAwareProxyClient[]|\Google\Protobuf\Internal\RepeatedField $identity_aware_proxy_clients
     *           Clients existing in the brand.
     *     @type string $next_page_token
     *           A token, which can be send as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iap\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Clients existing in the brand.
     *
     * Generated from protobuf field <code>repeated .google.cloud.iap.v1.IdentityAwareProxyClient identity_aware_proxy_clients = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIdentityAwareProxyClients()
    {
        return $this->identity_aware_proxy_clients;
    }

    /**
     * Clients existing in the brand.
     *
     * Generated from protobuf field <code>repeated .google.cloud.iap.v1.IdentityAwareProxyClient identity_aware_proxy_clients = 1;</code>
     * @param \Google\Cloud\Iap\V1\IdentityAwareProxyClient[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIdentityAwareProxyClients($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Iap\V1\IdentityAwareProxyClient::class);
        $this->identity_aware_proxy_clients = $arr;

        return $this;
    }

    /**
     * A token, which can be send as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be send as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

