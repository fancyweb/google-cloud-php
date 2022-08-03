<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/job.proto

namespace GPBMetadata\Google\Cloud\Talent\V4Beta1;

class Job
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%google/cloud/talent/v4beta1/job.protogoogle.cloud.talent.v4beta1google/api/resource.proto(google/cloud/talent/v4beta1/common.protogoogle/protobuf/timestamp.proto"�
Job
name (	4
company (	B#�A�A
jobs.googleapis.com/Company
requisition_id (	B�A
title (	B�A
description (	B�A
	addresses (	J
application_info (20.google.cloud.talent.v4beta1.Job.ApplicationInfo=
job_benefits (2\'.google.cloud.talent.v4beta1.JobBenefitH
compensation_info	 (2-.google.cloud.talent.v4beta1.CompensationInfoQ
custom_attributes
 (26.google.cloud.talent.v4beta1.Job.CustomAttributesEntry=
degree_types (2\'.google.cloud.talent.v4beta1.DegreeType

department (	E
employment_types (2+.google.cloud.talent.v4beta1.EmploymentType

incentives (	
language_code (	8
	job_level (2%.google.cloud.talent.v4beta1.JobLevel
promotion_value (
qualifications (	
responsibilities (	B
posting_region (2*.google.cloud.talent.v4beta1.PostingRegion?

visibility (2\'.google.cloud.talent.v4beta1.VisibilityB2
job_start_time (2.google.protobuf.Timestamp0
job_end_time (2.google.protobuf.Timestamp8
posting_publish_time (2.google.protobuf.Timestamp7
posting_expire_time (2.google.protobuf.Timestamp<
posting_create_time (2.google.protobuf.TimestampB�A<
posting_update_time (2.google.protobuf.TimestampB�A!
company_display_name (	B�AG
derived_info (2,.google.cloud.talent.v4beta1.Job.DerivedInfoB�AN
processing_options (22.google.cloud.talent.v4beta1.Job.ProcessingOptionsD
ApplicationInfo
emails (	
instruction (	
uris (	�
DerivedInfo8
	locations (2%.google.cloud.talent.v4beta1.Location@
job_categories (2(.google.cloud.talent.v4beta1.JobCategory�
ProcessingOptions)
!disable_street_address_resolution (H
html_sanitization (2-.google.cloud.talent.v4beta1.HtmlSanitizatione
CustomAttributesEntry
key (	;
value (2,.google.cloud.talent.v4beta1.CustomAttribute:8:k�Ah
jobs.googleapis.com/Job.projects/{project}/tenants/{tenant}/jobs/{job}projects/{project}/jobs/{job}B~
com.google.cloud.talent.v4beta1BJobResourceProtoPZAgoogle.golang.org/genproto/googleapis/cloud/talent/v4beta1;talent�CTSbproto3'
        , true);

        static::$is_initialized = true;
    }
}

