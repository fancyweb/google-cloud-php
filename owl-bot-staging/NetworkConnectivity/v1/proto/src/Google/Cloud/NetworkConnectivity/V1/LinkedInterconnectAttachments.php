<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of VLAN attachment resources. These resources should
 * be redundant attachments that all advertise the same prefixes to Google
 * Cloud. Alternatively, in active/passive configurations, all attachments
 * should be capable of advertising the same prefixes.
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.LinkedInterconnectAttachments</code>
 */
class LinkedInterconnectAttachments extends \Google\Protobuf\Internal\Message
{
    /**
     * The URIs of linked interconnect attachment resources
     *
     * Generated from protobuf field <code>repeated string uris = 1 [(.google.api.resource_reference) = {</code>
     */
    private $uris;
    /**
     * A value that controls whether site-to-site data transfer is enabled for
     * these resources. Data transfer is available only in [supported
     * locations](https://cloud.google.com/network-connectivity/docs/network-connectivity-center/concepts/locations).
     *
     * Generated from protobuf field <code>bool site_to_site_data_transfer = 2;</code>
     */
    protected $site_to_site_data_transfer = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $uris
     *           The URIs of linked interconnect attachment resources
     *     @type bool $site_to_site_data_transfer
     *           A value that controls whether site-to-site data transfer is enabled for
     *           these resources. Data transfer is available only in [supported
     *           locations](https://cloud.google.com/network-connectivity/docs/network-connectivity-center/concepts/locations).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * The URIs of linked interconnect attachment resources
     *
     * Generated from protobuf field <code>repeated string uris = 1 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUris()
    {
        return $this->uris;
    }

    /**
     * The URIs of linked interconnect attachment resources
     *
     * Generated from protobuf field <code>repeated string uris = 1 [(.google.api.resource_reference) = {</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->uris = $arr;

        return $this;
    }

    /**
     * A value that controls whether site-to-site data transfer is enabled for
     * these resources. Data transfer is available only in [supported
     * locations](https://cloud.google.com/network-connectivity/docs/network-connectivity-center/concepts/locations).
     *
     * Generated from protobuf field <code>bool site_to_site_data_transfer = 2;</code>
     * @return bool
     */
    public function getSiteToSiteDataTransfer()
    {
        return $this->site_to_site_data_transfer;
    }

    /**
     * A value that controls whether site-to-site data transfer is enabled for
     * these resources. Data transfer is available only in [supported
     * locations](https://cloud.google.com/network-connectivity/docs/network-connectivity-center/concepts/locations).
     *
     * Generated from protobuf field <code>bool site_to_site_data_transfer = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setSiteToSiteDataTransfer($var)
    {
        GPBUtil::checkBool($var);
        $this->site_to_site_data_transfer = $var;

        return $this;
    }

}

