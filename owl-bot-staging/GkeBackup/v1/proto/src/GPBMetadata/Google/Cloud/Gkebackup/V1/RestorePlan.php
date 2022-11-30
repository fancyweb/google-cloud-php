<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/restore_plan.proto

namespace GPBMetadata\Google\Cloud\Gkebackup\V1;

class RestorePlan
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Restore::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,google/cloud/gkebackup/v1/restore_plan.protogoogle.cloud.gkebackup.v1google/api/resource.proto\'google/cloud/gkebackup/v1/restore.protogoogle/protobuf/timestamp.proto"�
RestorePlan
name (	B�A
uid (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
description (	C
backup_plan (	B.�A�A�A%
#gkebackup.googleapis.com/BackupPlan<
cluster (	B+�A�A�A"
 container.googleapis.com/ClusterE
restore_config (2(.google.cloud.gkebackup.v1.RestoreConfigB�AB
labels	 (22.google.cloud.gkebackup.v1.RestorePlan.LabelsEntry
etag
 (	B�A-
LabelsEntry
key (	
value (	:8:n�Ak
$gkebackup.googleapis.com/RestorePlanCprojects/{project}/locations/{location}/restorePlans/{restore_plan}B�
com.google.cloud.gkebackup.v1BRestorePlanProtoPZBgoogle.golang.org/genproto/googleapis/cloud/gkebackup/v1;gkebackup�Google.Cloud.GkeBackup.V1�Google\\Cloud\\GkeBackup\\V1�Google::Cloud::GkeBackup::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

