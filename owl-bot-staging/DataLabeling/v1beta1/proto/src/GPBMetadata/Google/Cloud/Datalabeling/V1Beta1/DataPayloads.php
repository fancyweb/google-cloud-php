<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/data_payloads.proto

namespace GPBMetadata\Google\Cloud\Datalabeling\V1Beta1;

class DataPayloads
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
5google/cloud/datalabeling/v1beta1/data_payloads.proto!google.cloud.datalabeling.v1beta1"a
ImagePayload
	mime_type (	
image_thumbnail (
	image_uri (	

signed_uri (	"#
TextPayload
text_content (	"S
VideoThumbnail
	thumbnail (.
time_offset (2.google.protobuf.Duration"�
VideoPayload
	mime_type (	
	video_uri (	K
video_thumbnails (21.google.cloud.datalabeling.v1beta1.VideoThumbnail

frame_rate (

signed_uri (	B�
%com.google.cloud.datalabeling.v1beta1PZMgoogle.golang.org/genproto/googleapis/cloud/datalabeling/v1beta1;datalabeling�!Google.Cloud.DataLabeling.V1Beta1�!Google\\Cloud\\DataLabeling\\V1beta1�$Google::Cloud::DataLabeling::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

