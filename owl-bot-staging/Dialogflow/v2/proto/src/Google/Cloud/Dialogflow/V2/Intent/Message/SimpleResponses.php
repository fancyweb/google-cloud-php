<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/intent.proto

namespace Google\Cloud\Dialogflow\V2\Intent\Message;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The collection of simple response candidates.
 * This message in `QueryResult.fulfillment_messages` and
 * `WebhookResponse.fulfillment_messages` should contain only one
 * `SimpleResponse`.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Intent.Message.SimpleResponses</code>
 */
class SimpleResponses extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The list of simple responses.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message.SimpleResponse simple_responses = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $simple_responses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message\SimpleResponse[]|\Google\Protobuf\Internal\RepeatedField $simple_responses
     *           Required. The list of simple responses.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The list of simple responses.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message.SimpleResponse simple_responses = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSimpleResponses()
    {
        return $this->simple_responses;
    }

    /**
     * Required. The list of simple responses.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message.SimpleResponse simple_responses = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message\SimpleResponse[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSimpleResponses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\Intent\Message\SimpleResponse::class);
        $this->simple_responses = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SimpleResponses::class, \Google\Cloud\Dialogflow\V2\Intent_Message_SimpleResponses::class);

