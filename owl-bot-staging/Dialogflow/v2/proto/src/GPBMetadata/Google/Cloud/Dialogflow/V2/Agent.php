<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/agent.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class Agent
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ValidationResult::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�%
&google/cloud/dialogflow/v2/agent.protogoogle.cloud.dialogflow.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto2google/cloud/dialogflow/v2/validation_result.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
AgentC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
display_name (	B�A"
default_language_code (	B�A%
supported_language_codes (	B�A
	time_zone (	B�A
description (	B�A

avatar_uri (	B�A
enable_logging (B�AF

match_mode	 (2+.google.cloud.dialogflow.v2.Agent.MatchModeB�A%
classification_threshold
 (B�AF
api_version (2,.google.cloud.dialogflow.v2.Agent.ApiVersionB�A9
tier (2&.google.cloud.dialogflow.v2.Agent.TierB�A"V
	MatchMode
MATCH_MODE_UNSPECIFIED 
MATCH_MODE_HYBRID
MATCH_MODE_ML_ONLY"l

ApiVersion
API_VERSION_UNSPECIFIED 
API_VERSION_V1
API_VERSION_V2
API_VERSION_V2_BETA_1"b
Tier
TIER_UNSPECIFIED 
TIER_STANDARD
TIER_ENTERPRISE
TIER_ENTERPRISE_PLUS:m�Aj
dialogflow.googleapis.com/Agentprojects/{project}/agent-projects/{project}/locations/{location}/agent"J
GetAgentRequest7
parent (	B\'�A�A!dialogflow.googleapis.com/Agent"~
SetAgentRequest5
agent (2!.google.cloud.dialogflow.v2.AgentB�A4
update_mask (2.google.protobuf.FieldMaskB�A"M
DeleteAgentRequest7
parent (	B\'�A�A!dialogflow.googleapis.com/Agent"z
SearchAgentsRequest7
parent (	B\'�A�A!dialogflow.googleapis.com/Agent
	page_size (B�A

page_token (	"b
SearchAgentsResponse1
agents (2!.google.cloud.dialogflow.v2.Agent
next_page_token (	"L
TrainAgentRequest7
parent (	B\'�A�A!dialogflow.googleapis.com/Agent"e
ExportAgentRequest7
parent (	B\'�A�A!dialogflow.googleapis.com/Agent
	agent_uri (	B�A"L
ExportAgentResponse
	agent_uri (	H 
agent_content (H B
agent"�
ImportAgentRequest7
parent (	B\'�A�A!dialogflow.googleapis.com/Agent
	agent_uri (	H 
agent_content (H B
agent"�
RestoreAgentRequest7
parent (	B\'�A�A!dialogflow.googleapis.com/Agent
	agent_uri (	H 
agent_content (H B
agent"q
GetValidationResultRequest7
parent (	B\'�A�A!dialogflow.googleapis.com/Agent
language_code (	B�A2�
Agents�
GetAgent+.google.cloud.dialogflow.v2.GetAgentRequest!.google.cloud.dialogflow.v2.Agent"[���L/v2/{parent=projects/*}/agentZ+)/v2/{parent=projects/*/locations/*}/agent�Aparent�
SetAgent+.google.cloud.dialogflow.v2.SetAgentRequest!.google.cloud.dialogflow.v2.Agent"t���f"#/v2/{agent.parent=projects/*}/agent:agentZ8"//v2/{agent.parent=projects/*/locations/*}/agent:agent�Aagent�
DeleteAgent..google.cloud.dialogflow.v2.DeleteAgentRequest.google.protobuf.Empty"[���L*/v2/{parent=projects/*}/agentZ+*)/v2/{parent=projects/*/locations/*}/agent�Aparent�
SearchAgents/.google.cloud.dialogflow.v2.SearchAgentsRequest0.google.cloud.dialogflow.v2.SearchAgentsResponse"i���Z$/v2/{parent=projects/*}/agent:searchZ20/v2/{parent=projects/*/locations/*}/agent:search�Aparent�

TrainAgent-.google.cloud.dialogflow.v2.TrainAgentRequest.google.longrunning.Operation"����^"#/v2/{parent=projects/*}/agent:train:*Z4"//v2/{parent=projects/*/locations/*}/agent:train:*�Aparent�A/
google.protobuf.Emptygoogle.protobuf.Struct�
ExportAgent..google.cloud.dialogflow.v2.ExportAgentRequest.google.longrunning.Operation"����`"$/v2/{parent=projects/*}/agent:export:*Z5"0/v2/{parent=projects/*/locations/*}/agent:export:*�Aparent�AH
.google.cloud.dialogflow.v2.ExportAgentResponsegoogle.protobuf.Struct�
ImportAgent..google.cloud.dialogflow.v2.ImportAgentRequest.google.longrunning.Operation"����`"$/v2/{parent=projects/*}/agent:import:*Z5"0/v2/{parent=projects/*/locations/*}/agent:import:*�A/
google.protobuf.Emptygoogle.protobuf.Struct�
RestoreAgent/.google.cloud.dialogflow.v2.RestoreAgentRequest.google.longrunning.Operation"����b"%/v2/{parent=projects/*}/agent:restore:*Z6"1/v2/{parent=projects/*/locations/*}/agent:restore:*�A/
google.protobuf.Emptygoogle.protobuf.Struct�
GetValidationResult6.google.cloud.dialogflow.v2.GetValidationResultRequest,.google.cloud.dialogflow.v2.ValidationResult"t���n./v2/{parent=projects/*}/agent/validationResultZ<:/v2/{parent=projects/*/locations/*}/agent/validationResultx�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
com.google.cloud.dialogflow.v2B
AgentProtoPZDgoogle.golang.org/genproto/googleapis/cloud/dialogflow/v2;dialogflow��DF�Google.Cloud.Dialogflow.V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

