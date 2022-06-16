<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech_adaptation.proto

namespace Google\Cloud\Speech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message returned to the client by the `ListCustomClasses` method.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1.ListCustomClassesResponse</code>
 */
class ListCustomClassesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The custom classes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.CustomClass custom_classes = 1;</code>
     */
    private $custom_classes;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
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
     *     @type \Google\Cloud\Speech\V1\CustomClass[]|\Google\Protobuf\Internal\RepeatedField $custom_classes
     *           The custom classes.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1\CloudSpeechAdaptation::initOnce();
        parent::__construct($data);
    }

    /**
     * The custom classes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.CustomClass custom_classes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomClasses()
    {
        return $this->custom_classes;
    }

    /**
     * The custom classes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.CustomClass custom_classes = 1;</code>
     * @param \Google\Cloud\Speech\V1\CustomClass[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomClasses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V1\CustomClass::class);
        $this->custom_classes = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
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
     * A token, which can be sent as `page_token` to retrieve the next page.
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

