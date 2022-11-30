<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/ad_tag_details.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Container for a live session's ad tag detail.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.LiveAdTagDetail</code>
 */
class LiveAdTagDetail extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name in the form of
     * `projects/{project}/locations/{location}/liveSessions/{live_session}/liveAdTagDetails/{id}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * A list of ad requests.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.AdRequest ad_requests = 2;</code>
     */
    private $ad_requests;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name in the form of
     *           `projects/{project}/locations/{location}/liveSessions/{live_session}/liveAdTagDetails/{id}`.
     *     @type array<\Google\Cloud\Video\Stitcher\V1\AdRequest>|\Google\Protobuf\Internal\RepeatedField $ad_requests
     *           A list of ad requests.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\AdTagDetails::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name in the form of
     * `projects/{project}/locations/{location}/liveSessions/{live_session}/liveAdTagDetails/{id}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name in the form of
     * `projects/{project}/locations/{location}/liveSessions/{live_session}/liveAdTagDetails/{id}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * A list of ad requests.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.AdRequest ad_requests = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdRequests()
    {
        return $this->ad_requests;
    }

    /**
     * A list of ad requests.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.AdRequest ad_requests = 2;</code>
     * @param array<\Google\Cloud\Video\Stitcher\V1\AdRequest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Stitcher\V1\AdRequest::class);
        $this->ad_requests = $arr;

        return $this;
    }

}

