<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/resources.proto

namespace GPBMetadata\Google\Api\Servicemanagement\V1;

class Resources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\ConfigChange::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Metric::initOnce();
        \GPBMetadata\Google\Api\Quota::initOnce();
        \GPBMetadata\Google\Api\Service::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/api/servicemanagement/v1/resources.protogoogle.api.servicemanagement.v1google/api/config_change.protogoogle/api/field_behavior.protogoogle/api/metric.protogoogle/api/quota.protogoogle/api/service.proto#google/longrunning/operations.protogoogle/protobuf/any.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"C
ManagedService
service_name (	
producer_project_id (	"�
OperationMetadata
resource_names (	F
steps (27.google.api.servicemanagement.v1.OperationMetadata.Step
progress_percentage (.

start_time (2.google.protobuf.Timestampf
Step
description (	I
status (29.google.api.servicemanagement.v1.OperationMetadata.Status"g
Status
STATUS_UNSPECIFIED 
DONE
NOT_STARTED
IN_PROGRESS

FAILED
	CANCELLED"�

Diagnostic
location (	>
kind (20.google.api.servicemanagement.v1.Diagnostic.Kind
message (	"
Kind
WARNING 	
ERROR"V
ConfigSource

id (	:
files (2+.google.api.servicemanagement.v1.ConfigFile"�

ConfigFile
	file_path (	
file_contents (G
	file_type (24.google.api.servicemanagement.v1.ConfigFile.FileType"�
FileType
FILE_TYPE_UNSPECIFIED 
SERVICE_CONFIG_YAML
OPEN_API_JSON
OPEN_API_YAML
FILE_DESCRIPTOR_SET_PROTO

PROTO_FILE"
	ConfigRef
name (	"@
ChangeReport0
config_changes (2.google.api.ConfigChange"�
Rollout

rollout_id (	B�A/
create_time (2.google.protobuf.Timestamp

created_by (	F
status (26.google.api.servicemanagement.v1.Rollout.RolloutStatusc
traffic_percent_strategy (2?.google.api.servicemanagement.v1.Rollout.TrafficPercentStrategyH b
delete_service_strategy� (2>.google.api.servicemanagement.v1.Rollout.DeleteServiceStrategyH 
service_name (	�
TrafficPercentStrategye
percentages (2P.google.api.servicemanagement.v1.Rollout.TrafficPercentStrategy.PercentagesEntry2
PercentagesEntry
key (	
value (:8
DeleteServiceStrategy"�
RolloutStatus
ROLLOUT_STATUS_UNSPECIFIED 
IN_PROGRESS
SUCCESS
	CANCELLED

FAILED
PENDING
FAILED_ROLLED_BACKB

strategyB�
#com.google.api.servicemanagement.v1BResourcesProtoPZPgoogle.golang.org/genproto/googleapis/api/servicemanagement/v1;servicemanagement�GASM�!Google.Cloud.ServiceManagement.V1�!Google\\Cloud\\ServiceManagement\\V1�$Google::Cloud::ServiceManagement::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

