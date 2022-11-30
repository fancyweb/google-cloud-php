<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/network_settings.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A NetworkSettings resource is a container for ingress settings for a version
 * or service.
 *
 * Generated from protobuf message <code>google.appengine.v1.NetworkSettings</code>
 */
class NetworkSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * The ingress settings for version or service.
     *
     * Generated from protobuf field <code>.google.appengine.v1.NetworkSettings.IngressTrafficAllowed ingress_traffic_allowed = 1;</code>
     */
    protected $ingress_traffic_allowed = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ingress_traffic_allowed
     *           The ingress settings for version or service.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\NetworkSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * The ingress settings for version or service.
     *
     * Generated from protobuf field <code>.google.appengine.v1.NetworkSettings.IngressTrafficAllowed ingress_traffic_allowed = 1;</code>
     * @return int
     */
    public function getIngressTrafficAllowed()
    {
        return $this->ingress_traffic_allowed;
    }

    /**
     * The ingress settings for version or service.
     *
     * Generated from protobuf field <code>.google.appengine.v1.NetworkSettings.IngressTrafficAllowed ingress_traffic_allowed = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIngressTrafficAllowed($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AppEngine\V1\NetworkSettings\IngressTrafficAllowed::class);
        $this->ingress_traffic_allowed = $var;

        return $this;
    }

}

