<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/outputs.proto

namespace Google\Cloud\Video\LiveStream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Audio stream resource.
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.AudioStream</code>
 */
class AudioStream extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies whether pass through (transmuxing) is enabled or not.
     * If set to `true`, the rest of the settings, other than `mapping`, will be
     * ignored. The default is `false`.
     *
     * Generated from protobuf field <code>bool transmux = 8;</code>
     */
    protected $transmux = false;
    /**
     * The codec for this audio stream. The default is `aac`.
     * Supported audio codecs:
     * - `aac`
     *
     * Generated from protobuf field <code>string codec = 1;</code>
     */
    protected $codec = '';
    /**
     * Required. Audio bitrate in bits per second. Must be between 1 and 10,000,000.
     *
     * Generated from protobuf field <code>int32 bitrate_bps = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $bitrate_bps = 0;
    /**
     * Number of audio channels. Must be between 1 and 6. The default is 2.
     *
     * Generated from protobuf field <code>int32 channel_count = 3;</code>
     */
    protected $channel_count = 0;
    /**
     * A list of channel names specifying layout of the audio channels.
     * This only affects the metadata embedded in the container headers, if
     * supported by the specified format. The default is `[fl, fr]`.
     * Supported channel names:
     * - `fl` - Front left channel
     * - `fr` - Front right channel
     * - `sl` - Side left channel
     * - `sr` - Side right channel
     * - `fc` - Front center channel
     * - `lfe` - Low frequency
     *
     * Generated from protobuf field <code>repeated string channel_layout = 4;</code>
     */
    private $channel_layout;
    /**
     * The mapping for the input streams and audio channels.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.AudioStream.AudioMapping mapping = 5;</code>
     */
    private $mapping;
    /**
     * The audio sample rate in Hertz. The default is 48000 Hertz.
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 6;</code>
     */
    protected $sample_rate_hertz = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $transmux
     *           Specifies whether pass through (transmuxing) is enabled or not.
     *           If set to `true`, the rest of the settings, other than `mapping`, will be
     *           ignored. The default is `false`.
     *     @type string $codec
     *           The codec for this audio stream. The default is `aac`.
     *           Supported audio codecs:
     *           - `aac`
     *     @type int $bitrate_bps
     *           Required. Audio bitrate in bits per second. Must be between 1 and 10,000,000.
     *     @type int $channel_count
     *           Number of audio channels. Must be between 1 and 6. The default is 2.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $channel_layout
     *           A list of channel names specifying layout of the audio channels.
     *           This only affects the metadata embedded in the container headers, if
     *           supported by the specified format. The default is `[fl, fr]`.
     *           Supported channel names:
     *           - `fl` - Front left channel
     *           - `fr` - Front right channel
     *           - `sl` - Side left channel
     *           - `sr` - Side right channel
     *           - `fc` - Front center channel
     *           - `lfe` - Low frequency
     *     @type \Google\Cloud\Video\LiveStream\V1\AudioStream\AudioMapping[]|\Google\Protobuf\Internal\RepeatedField $mapping
     *           The mapping for the input streams and audio channels.
     *     @type int $sample_rate_hertz
     *           The audio sample rate in Hertz. The default is 48000 Hertz.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Outputs::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies whether pass through (transmuxing) is enabled or not.
     * If set to `true`, the rest of the settings, other than `mapping`, will be
     * ignored. The default is `false`.
     *
     * Generated from protobuf field <code>bool transmux = 8;</code>
     * @return bool
     */
    public function getTransmux()
    {
        return $this->transmux;
    }

    /**
     * Specifies whether pass through (transmuxing) is enabled or not.
     * If set to `true`, the rest of the settings, other than `mapping`, will be
     * ignored. The default is `false`.
     *
     * Generated from protobuf field <code>bool transmux = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setTransmux($var)
    {
        GPBUtil::checkBool($var);
        $this->transmux = $var;

        return $this;
    }

    /**
     * The codec for this audio stream. The default is `aac`.
     * Supported audio codecs:
     * - `aac`
     *
     * Generated from protobuf field <code>string codec = 1;</code>
     * @return string
     */
    public function getCodec()
    {
        return $this->codec;
    }

    /**
     * The codec for this audio stream. The default is `aac`.
     * Supported audio codecs:
     * - `aac`
     *
     * Generated from protobuf field <code>string codec = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCodec($var)
    {
        GPBUtil::checkString($var, True);
        $this->codec = $var;

        return $this;
    }

    /**
     * Required. Audio bitrate in bits per second. Must be between 1 and 10,000,000.
     *
     * Generated from protobuf field <code>int32 bitrate_bps = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getBitrateBps()
    {
        return $this->bitrate_bps;
    }

    /**
     * Required. Audio bitrate in bits per second. Must be between 1 and 10,000,000.
     *
     * Generated from protobuf field <code>int32 bitrate_bps = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setBitrateBps($var)
    {
        GPBUtil::checkInt32($var);
        $this->bitrate_bps = $var;

        return $this;
    }

    /**
     * Number of audio channels. Must be between 1 and 6. The default is 2.
     *
     * Generated from protobuf field <code>int32 channel_count = 3;</code>
     * @return int
     */
    public function getChannelCount()
    {
        return $this->channel_count;
    }

    /**
     * Number of audio channels. Must be between 1 and 6. The default is 2.
     *
     * Generated from protobuf field <code>int32 channel_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setChannelCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->channel_count = $var;

        return $this;
    }

    /**
     * A list of channel names specifying layout of the audio channels.
     * This only affects the metadata embedded in the container headers, if
     * supported by the specified format. The default is `[fl, fr]`.
     * Supported channel names:
     * - `fl` - Front left channel
     * - `fr` - Front right channel
     * - `sl` - Side left channel
     * - `sr` - Side right channel
     * - `fc` - Front center channel
     * - `lfe` - Low frequency
     *
     * Generated from protobuf field <code>repeated string channel_layout = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannelLayout()
    {
        return $this->channel_layout;
    }

    /**
     * A list of channel names specifying layout of the audio channels.
     * This only affects the metadata embedded in the container headers, if
     * supported by the specified format. The default is `[fl, fr]`.
     * Supported channel names:
     * - `fl` - Front left channel
     * - `fr` - Front right channel
     * - `sl` - Side left channel
     * - `sr` - Side right channel
     * - `fc` - Front center channel
     * - `lfe` - Low frequency
     *
     * Generated from protobuf field <code>repeated string channel_layout = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannelLayout($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->channel_layout = $arr;

        return $this;
    }

    /**
     * The mapping for the input streams and audio channels.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.AudioStream.AudioMapping mapping = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * The mapping for the input streams and audio channels.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.livestream.v1.AudioStream.AudioMapping mapping = 5;</code>
     * @param \Google\Cloud\Video\LiveStream\V1\AudioStream\AudioMapping[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMapping($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\LiveStream\V1\AudioStream\AudioMapping::class);
        $this->mapping = $arr;

        return $this;
    }

    /**
     * The audio sample rate in Hertz. The default is 48000 Hertz.
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 6;</code>
     * @return int
     */
    public function getSampleRateHertz()
    {
        return $this->sample_rate_hertz;
    }

    /**
     * The audio sample rate in Hertz. The default is 48000 Hertz.
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setSampleRateHertz($var)
    {
        GPBUtil::checkInt32($var);
        $this->sample_rate_hertz = $var;

        return $this;
    }

}

