<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/audio_config.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of how speech should be synthesized.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.SynthesizeSpeechConfig</code>
 */
class SynthesizeSpeechConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Speaking rate/speed, in the range [0.25, 4.0]. 1.0 is the normal
     * native speed supported by the specific voice. 2.0 is twice as fast, and
     * 0.5 is half as fast. If unset(0.0), defaults to the native 1.0 speed. Any
     * other values < 0.25 or > 4.0 will return an error.
     *
     * Generated from protobuf field <code>double speaking_rate = 1;</code>
     */
    protected $speaking_rate = 0.0;
    /**
     * Optional. Speaking pitch, in the range [-20.0, 20.0]. 20 means increase 20
     * semitones from the original pitch. -20 means decrease 20 semitones from the
     * original pitch.
     *
     * Generated from protobuf field <code>double pitch = 2;</code>
     */
    protected $pitch = 0.0;
    /**
     * Optional. Volume gain (in dB) of the normal native volume supported by the
     * specific voice, in the range [-96.0, 16.0]. If unset, or set to a value of
     * 0.0 (dB), will play at normal native signal amplitude. A value of -6.0 (dB)
     * will play at approximately half the amplitude of the normal native signal
     * amplitude. A value of +6.0 (dB) will play at approximately twice the
     * amplitude of the normal native signal amplitude. We strongly recommend not
     * to exceed +10 (dB) as there's usually no effective increase in loudness for
     * any value greater than that.
     *
     * Generated from protobuf field <code>double volume_gain_db = 3;</code>
     */
    protected $volume_gain_db = 0.0;
    /**
     * Optional. An identifier which selects 'audio effects' profiles that are
     * applied on (post synthesized) text to speech. Effects are applied on top of
     * each other in the order they are given.
     *
     * Generated from protobuf field <code>repeated string effects_profile_id = 5;</code>
     */
    private $effects_profile_id;
    /**
     * Optional. The desired voice of the synthesized audio.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.VoiceSelectionParams voice = 4;</code>
     */
    protected $voice = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $speaking_rate
     *           Optional. Speaking rate/speed, in the range [0.25, 4.0]. 1.0 is the normal
     *           native speed supported by the specific voice. 2.0 is twice as fast, and
     *           0.5 is half as fast. If unset(0.0), defaults to the native 1.0 speed. Any
     *           other values < 0.25 or > 4.0 will return an error.
     *     @type float $pitch
     *           Optional. Speaking pitch, in the range [-20.0, 20.0]. 20 means increase 20
     *           semitones from the original pitch. -20 means decrease 20 semitones from the
     *           original pitch.
     *     @type float $volume_gain_db
     *           Optional. Volume gain (in dB) of the normal native volume supported by the
     *           specific voice, in the range [-96.0, 16.0]. If unset, or set to a value of
     *           0.0 (dB), will play at normal native signal amplitude. A value of -6.0 (dB)
     *           will play at approximately half the amplitude of the normal native signal
     *           amplitude. A value of +6.0 (dB) will play at approximately twice the
     *           amplitude of the normal native signal amplitude. We strongly recommend not
     *           to exceed +10 (dB) as there's usually no effective increase in loudness for
     *           any value greater than that.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $effects_profile_id
     *           Optional. An identifier which selects 'audio effects' profiles that are
     *           applied on (post synthesized) text to speech. Effects are applied on top of
     *           each other in the order they are given.
     *     @type \Google\Cloud\Dialogflow\V2\VoiceSelectionParams $voice
     *           Optional. The desired voice of the synthesized audio.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\AudioConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Speaking rate/speed, in the range [0.25, 4.0]. 1.0 is the normal
     * native speed supported by the specific voice. 2.0 is twice as fast, and
     * 0.5 is half as fast. If unset(0.0), defaults to the native 1.0 speed. Any
     * other values < 0.25 or > 4.0 will return an error.
     *
     * Generated from protobuf field <code>double speaking_rate = 1;</code>
     * @return float
     */
    public function getSpeakingRate()
    {
        return $this->speaking_rate;
    }

    /**
     * Optional. Speaking rate/speed, in the range [0.25, 4.0]. 1.0 is the normal
     * native speed supported by the specific voice. 2.0 is twice as fast, and
     * 0.5 is half as fast. If unset(0.0), defaults to the native 1.0 speed. Any
     * other values < 0.25 or > 4.0 will return an error.
     *
     * Generated from protobuf field <code>double speaking_rate = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setSpeakingRate($var)
    {
        GPBUtil::checkDouble($var);
        $this->speaking_rate = $var;

        return $this;
    }

    /**
     * Optional. Speaking pitch, in the range [-20.0, 20.0]. 20 means increase 20
     * semitones from the original pitch. -20 means decrease 20 semitones from the
     * original pitch.
     *
     * Generated from protobuf field <code>double pitch = 2;</code>
     * @return float
     */
    public function getPitch()
    {
        return $this->pitch;
    }

    /**
     * Optional. Speaking pitch, in the range [-20.0, 20.0]. 20 means increase 20
     * semitones from the original pitch. -20 means decrease 20 semitones from the
     * original pitch.
     *
     * Generated from protobuf field <code>double pitch = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setPitch($var)
    {
        GPBUtil::checkDouble($var);
        $this->pitch = $var;

        return $this;
    }

    /**
     * Optional. Volume gain (in dB) of the normal native volume supported by the
     * specific voice, in the range [-96.0, 16.0]. If unset, or set to a value of
     * 0.0 (dB), will play at normal native signal amplitude. A value of -6.0 (dB)
     * will play at approximately half the amplitude of the normal native signal
     * amplitude. A value of +6.0 (dB) will play at approximately twice the
     * amplitude of the normal native signal amplitude. We strongly recommend not
     * to exceed +10 (dB) as there's usually no effective increase in loudness for
     * any value greater than that.
     *
     * Generated from protobuf field <code>double volume_gain_db = 3;</code>
     * @return float
     */
    public function getVolumeGainDb()
    {
        return $this->volume_gain_db;
    }

    /**
     * Optional. Volume gain (in dB) of the normal native volume supported by the
     * specific voice, in the range [-96.0, 16.0]. If unset, or set to a value of
     * 0.0 (dB), will play at normal native signal amplitude. A value of -6.0 (dB)
     * will play at approximately half the amplitude of the normal native signal
     * amplitude. A value of +6.0 (dB) will play at approximately twice the
     * amplitude of the normal native signal amplitude. We strongly recommend not
     * to exceed +10 (dB) as there's usually no effective increase in loudness for
     * any value greater than that.
     *
     * Generated from protobuf field <code>double volume_gain_db = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setVolumeGainDb($var)
    {
        GPBUtil::checkDouble($var);
        $this->volume_gain_db = $var;

        return $this;
    }

    /**
     * Optional. An identifier which selects 'audio effects' profiles that are
     * applied on (post synthesized) text to speech. Effects are applied on top of
     * each other in the order they are given.
     *
     * Generated from protobuf field <code>repeated string effects_profile_id = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEffectsProfileId()
    {
        return $this->effects_profile_id;
    }

    /**
     * Optional. An identifier which selects 'audio effects' profiles that are
     * applied on (post synthesized) text to speech. Effects are applied on top of
     * each other in the order they are given.
     *
     * Generated from protobuf field <code>repeated string effects_profile_id = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEffectsProfileId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->effects_profile_id = $arr;

        return $this;
    }

    /**
     * Optional. The desired voice of the synthesized audio.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.VoiceSelectionParams voice = 4;</code>
     * @return \Google\Cloud\Dialogflow\V2\VoiceSelectionParams|null
     */
    public function getVoice()
    {
        return $this->voice;
    }

    public function hasVoice()
    {
        return isset($this->voice);
    }

    public function clearVoice()
    {
        unset($this->voice);
    }

    /**
     * Optional. The desired voice of the synthesized audio.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.VoiceSelectionParams voice = 4;</code>
     * @param \Google\Cloud\Dialogflow\V2\VoiceSelectionParams $var
     * @return $this
     */
    public function setVoice($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\VoiceSelectionParams::class);
        $this->voice = $var;

        return $this;
    }

}

