<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/channel.proto

namespace GPBMetadata\Google\Cloud\Eventarc\V1;

class Channel
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&google/cloud/eventarc/v1/channel.protogoogle.cloud.eventarc.v1google/api/resource.protogoogle/protobuf/timestamp.proto"�
Channel
name (	B�A
uid (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
provider (	
pubsub_topic (	B�AH ;
state	 (2\'.google.cloud.eventarc.v1.Channel.StateB�A
activation_token
 (	B�AB
crypto_key_name (	B)�A�A#
!cloudkms.googleapis.com/CryptoKey"E
State
STATE_UNSPECIFIED 
PENDING

ACTIVE
INACTIVE:s�Ap
eventarc.googleapis.com/Channel:projects/{project}/locations/{location}/channels/{channel}*channels2channelB
	transportB�
com.google.cloud.eventarc.v1BChannelProtoPZ@google.golang.org/genproto/googleapis/cloud/eventarc/v1;eventarc�Google.Cloud.Eventarc.V1�Google\\Cloud\\Eventarc\\V1�Google::Cloud::Eventarc::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

