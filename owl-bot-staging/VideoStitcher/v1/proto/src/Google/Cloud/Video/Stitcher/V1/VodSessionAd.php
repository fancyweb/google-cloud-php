<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/sessions.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for an inserted ad in a VOD session.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.VodSessionAd</code>
 */
class VodSessionAd extends \Google\Protobuf\Internal\Message
{
    /**
     * Duration in seconds of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 1;</code>
     */
    protected $duration = null;
    /**
     * Metadata of companion ads associated with the ad.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.CompanionAds companion_ads = 2;</code>
     */
    protected $companion_ads = null;
    /**
     * The list of progress tracking events for the ad break. These can be of
     * the following IAB types: `MUTE`, `UNMUTE`, `PAUSE`, `CLICK`,
     * `CLICK_THROUGH`, `REWIND`, `RESUME`, `ERROR`, `FULLSCREEN`,
     * `EXIT_FULLSCREEN`, `EXPAND`, `COLLAPSE`, `ACCEPT_INVITATION_LINEAR`,
     * `CLOSE_LINEAR`, `SKIP`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.Event activity_events = 3;</code>
     */
    private $activity_events;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $duration
     *           Duration in seconds of the ad.
     *     @type \Google\Cloud\Video\Stitcher\V1\CompanionAds $companion_ads
     *           Metadata of companion ads associated with the ad.
     *     @type array<\Google\Cloud\Video\Stitcher\V1\Event>|\Google\Protobuf\Internal\RepeatedField $activity_events
     *           The list of progress tracking events for the ad break. These can be of
     *           the following IAB types: `MUTE`, `UNMUTE`, `PAUSE`, `CLICK`,
     *           `CLICK_THROUGH`, `REWIND`, `RESUME`, `ERROR`, `FULLSCREEN`,
     *           `EXIT_FULLSCREEN`, `EXPAND`, `COLLAPSE`, `ACCEPT_INVITATION_LINEAR`,
     *           `CLOSE_LINEAR`, `SKIP`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\Sessions::initOnce();
        parent::__construct($data);
    }

    /**
     * Duration in seconds of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function hasDuration()
    {
        return isset($this->duration);
    }

    public function clearDuration()
    {
        unset($this->duration);
    }

    /**
     * Duration in seconds of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->duration = $var;

        return $this;
    }

    /**
     * Metadata of companion ads associated with the ad.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.CompanionAds companion_ads = 2;</code>
     * @return \Google\Cloud\Video\Stitcher\V1\CompanionAds|null
     */
    public function getCompanionAds()
    {
        return $this->companion_ads;
    }

    public function hasCompanionAds()
    {
        return isset($this->companion_ads);
    }

    public function clearCompanionAds()
    {
        unset($this->companion_ads);
    }

    /**
     * Metadata of companion ads associated with the ad.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.CompanionAds companion_ads = 2;</code>
     * @param \Google\Cloud\Video\Stitcher\V1\CompanionAds $var
     * @return $this
     */
    public function setCompanionAds($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Stitcher\V1\CompanionAds::class);
        $this->companion_ads = $var;

        return $this;
    }

    /**
     * The list of progress tracking events for the ad break. These can be of
     * the following IAB types: `MUTE`, `UNMUTE`, `PAUSE`, `CLICK`,
     * `CLICK_THROUGH`, `REWIND`, `RESUME`, `ERROR`, `FULLSCREEN`,
     * `EXIT_FULLSCREEN`, `EXPAND`, `COLLAPSE`, `ACCEPT_INVITATION_LINEAR`,
     * `CLOSE_LINEAR`, `SKIP`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.Event activity_events = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActivityEvents()
    {
        return $this->activity_events;
    }

    /**
     * The list of progress tracking events for the ad break. These can be of
     * the following IAB types: `MUTE`, `UNMUTE`, `PAUSE`, `CLICK`,
     * `CLICK_THROUGH`, `REWIND`, `RESUME`, `ERROR`, `FULLSCREEN`,
     * `EXIT_FULLSCREEN`, `EXPAND`, `COLLAPSE`, `ACCEPT_INVITATION_LINEAR`,
     * `CLOSE_LINEAR`, `SKIP`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.Event activity_events = 3;</code>
     * @param array<\Google\Cloud\Video\Stitcher\V1\Event>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActivityEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Stitcher\V1\Event::class);
        $this->activity_events = $arr;

        return $this;
    }

}

