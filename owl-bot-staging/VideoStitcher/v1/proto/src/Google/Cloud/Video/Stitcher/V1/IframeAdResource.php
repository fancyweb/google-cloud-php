<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/companions.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for an IFrame ad resource.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.IframeAdResource</code>
 */
class IframeAdResource extends \Google\Protobuf\Internal\Message
{
    /**
     * URI source for an IFrame to display for the ad resource.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     */
    protected $uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           URI source for an IFrame to display for the ad resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\Companions::initOnce();
        parent::__construct($data);
    }

    /**
     * URI source for an IFrame to display for the ad resource.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * URI source for an IFrame to display for the ad resource.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

}

