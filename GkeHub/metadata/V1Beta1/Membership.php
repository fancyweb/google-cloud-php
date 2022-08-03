<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1beta1/membership.proto

namespace GPBMetadata\Google\Cloud\Gkehub\V1Beta1;

class Membership
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
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�<
,google/cloud/gkehub/v1beta1/membership.protogoogle.cloud.gkehub.v1beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�

Membership
name (	B�AH
labels (23.google.cloud.gkehub.v1beta1.Membership.LabelsEntryB�A
description (	B�AH
endpoint (2/.google.cloud.gkehub.v1beta1.MembershipEndpointB�AH @
state (2,.google.cloud.gkehub.v1beta1.MembershipStateB�A>
	authority	 (2&.google.cloud.gkehub.v1beta1.AuthorityB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A4
delete_time (2.google.protobuf.TimestampB�A
external_id
 (	B�A=
last_connection_time (2.google.protobuf.TimestampB�A
	unique_id (	B�A\\
infrastructure_type (2:.google.cloud.gkehub.v1beta1.Membership.InfrastructureTypeB�A-
LabelsEntry
key (	
value (	:8"W
InfrastructureType#
INFRASTRUCTURE_TYPE_UNSPECIFIED 
ON_PREM
MULTI_CLOUD:g�Ad
 gkehub.googleapis.com/Membership@projects/{project}/locations/{location}/memberships/{membership}B
type"�
MembershipEndpointC
gke_cluster (2\'.google.cloud.gkehub.v1beta1.GkeClusterB�AH J
on_prem_cluster (2*.google.cloud.gkehub.v1beta1.OnPremClusterB�AH R
multi_cloud_cluster (2..google.cloud.gkehub.v1beta1.MultiCloudClusterB�AH E
edge_cluster	 (2(.google.cloud.gkehub.v1beta1.EdgeClusterB�AH O
appliance_cluster
 (2-.google.cloud.gkehub.v1beta1.ApplianceClusterB�AH Q
kubernetes_metadata (2/.google.cloud.gkehub.v1beta1.KubernetesMetadataB�AQ
kubernetes_resource (2/.google.cloud.gkehub.v1beta1.KubernetesResourceB�AB
type"�
KubernetesResource#
membership_cr_manifest (	B�AP
membership_resources (2-.google.cloud.gkehub.v1beta1.ResourceManifestB�AM
connect_resources (2-.google.cloud.gkehub.v1beta1.ResourceManifestB�AK
resource_options (2,.google.cloud.gkehub.v1beta1.ResourceOptionsB�A"c
ResourceOptions
connect_version (	B�A
v1beta1_crd (B�A
k8s_version (	B�A"<
ResourceManifest
manifest (	
cluster_scoped ("F

GkeCluster
resource_link (	B�A
cluster_missing (B�A"�
OnPremCluster
resource_link (	B�A
cluster_missing (B�A
admin_cluster (B�AQ
cluster_type (26.google.cloud.gkehub.v1beta1.OnPremCluster.ClusterTypeB�A"_
ClusterType
CLUSTERTYPE_UNSPECIFIED 
	BOOTSTRAP

HYBRID

STANDALONE
USER"M
MultiCloudCluster
resource_link (	B�A
cluster_missing (B�A")
EdgeCluster
resource_link (	B�A".
ApplianceCluster
resource_link (	B�A"�
KubernetesMetadata*
kubernetes_api_server_version (	B�A
node_provider_id (	B�A

node_count (B�A

vcpu_count (B�A
	memory_mb (B�A4
update_timed (2.google.protobuf.TimestampB�A"}
	Authority
issuer (	B�A#
workload_identity_pool (	B�A
identity_provider (	B�A
	oidc_jwks (B�A"�
MembershipStateD
code (21.google.cloud.gkehub.v1beta1.MembershipState.CodeB�A
description (	B3
update_time (2.google.protobuf.TimestampB"g
Code
CODE_UNSPECIFIED 
CREATING	
READY
DELETING
UPDATING
SERVICE_UPDATING"�
ListMembershipsRequest8
parent (	B(�A�A" gkehub.googleapis.com/Membership
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListMembershipsResponse:
	resources (2\'.google.cloud.gkehub.v1beta1.Membership
next_page_token (	
unreachable (	"N
GetMembershipRequest6
name (	B(�A�A"
 gkehub.googleapis.com/Membership"�
CreateMembershipRequest8
parent (	B(�A�A" gkehub.googleapis.com/Membership
membership_id (	B�A>
resource (2\'.google.cloud.gkehub.v1beta1.MembershipB�A

request_id (	B�A"j
DeleteMembershipRequest6
name (	B(�A�A"
 gkehub.googleapis.com/Membership

request_id (	B�A"�
UpdateMembershipRequest6
name (	B(�A�A"
 gkehub.googleapis.com/Membership4
update_mask (2.google.protobuf.FieldMaskB�A>
resource (2\'.google.cloud.gkehub.v1beta1.MembershipB�A

request_id (	B�A"�
GenerateConnectManifestRequest6
name (	B(�A�A"
 gkehub.googleapis.com/MembershipE
connect_agent (2).google.cloud.gkehub.v1beta1.ConnectAgentB�A
version (	B�A

is_upgrade (B�A
registry (	B�A&
image_pull_secret_content (B�A"f
GenerateConnectManifestResponseC
manifest (21.google.cloud.gkehub.v1beta1.ConnectAgentResource"]
ConnectAgentResource3
type (2%.google.cloud.gkehub.v1beta1.TypeMeta
manifest (	"-
TypeMeta
kind (	
api_version (	"L
ConnectAgent
name (	B
proxy (B�A
	namespace (	B�A"�
ValidateExclusivityRequest8
parent (	B(�A�A" gkehub.googleapis.com/Membership
cr_manifest (	B�A 
intended_membership (	B�A"A
ValidateExclusivityResponse"
status (2.google.rpc.Status"�
"GenerateExclusivityManifestRequest6
name (	B(�A�A"
 gkehub.googleapis.com/Membership
crd_manifest (	B�A
cr_manifest (	B�A"P
#GenerateExclusivityManifestResponse
crd_manifest (	
cr_manifest (	"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_detail (	B�A
cancel_requested (B�A
api_version (	B�A2�
GkeHubMembershipService�
ListMemberships3.google.cloud.gkehub.v1beta1.ListMembershipsRequest4.google.cloud.gkehub.v1beta1.ListMembershipsResponse"E���64/v1beta1/{parent=projects/*/locations/*}/memberships�Aparent�
GetMembership1.google.cloud.gkehub.v1beta1.GetMembershipRequest\'.google.cloud.gkehub.v1beta1.Membership"C���64/v1beta1/{name=projects/*/locations/*/memberships/*}�Aname�
CreateMembership4.google.cloud.gkehub.v1beta1.CreateMembershipRequest.google.longrunning.Operation"����@"4/v1beta1/{parent=projects/*/locations/*}/memberships:resource�Aparent,resource,membership_id�A

MembershipOperationMetadata�
DeleteMembership4.google.cloud.gkehub.v1beta1.DeleteMembershipRequest.google.longrunning.Operation"p���6*4/v1beta1/{name=projects/*/locations/*/memberships/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
UpdateMembership4.google.cloud.gkehub.v1beta1.UpdateMembershipRequest.google.longrunning.Operation"����@24/v1beta1/{name=projects/*/locations/*/memberships/*}:resource�Aname,resource,update_mask�A

MembershipOperationMetadata�
GenerateConnectManifest;.google.cloud.gkehub.v1beta1.GenerateConnectManifestRequest<.google.cloud.gkehub.v1beta1.GenerateConnectManifestResponse"T���NL/v1beta1/{name=projects/*/locations/*/memberships/*}:generateConnectManifest�
ValidateExclusivity7.google.cloud.gkehub.v1beta1.ValidateExclusivityRequest8.google.cloud.gkehub.v1beta1.ValidateExclusivityResponse"P���JH/v1beta1/{parent=projects/*/locations/*}/memberships:validateExclusivity�
GenerateExclusivityManifest?.google.cloud.gkehub.v1beta1.GenerateExclusivityManifestRequest@.google.cloud.gkehub.v1beta1.GenerateExclusivityManifestResponse"X���RP/v1beta1/{name=projects/*/locations/*/memberships/*}:generateExclusivityManifestI�Agkehub.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.gkehub.v1beta1PZAgoogle.golang.org/genproto/googleapis/cloud/gkehub/v1beta1;gkehub�Google.Cloud.GkeHub.V1Beta1�Google\\Cloud\\GkeHub\\V1beta1�Google::Cloud::GkeHub::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

