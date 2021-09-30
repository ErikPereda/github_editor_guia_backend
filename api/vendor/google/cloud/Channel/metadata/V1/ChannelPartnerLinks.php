<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/channel_partner_links.proto

namespace GPBMetadata\Google\Cloud\Channel\V1;

class ChannelPartnerLinks
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Channel\V1\Common::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
3google/cloud/channel/v1/channel_partner_links.protogoogle.cloud.channel.v1$google/cloud/channel/v1/common.protogoogle/protobuf/timestamp.protogoogle/api/annotations.proto"�
ChannelPartnerLink
name (	B�A\'
reseller_cloud_identity_id (	B�AI

link_state (20.google.cloud.channel.v1.ChannelPartnerLinkStateB�A
invite_link_uri (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
	public_id (	B�A\\
#channel_partner_cloud_identity_info (2*.google.cloud.channel.v1.CloudIdentityInfoB�A*>
ChannelPartnerLinkView
UNSPECIFIED 	
BASIC
FULL*z
ChannelPartnerLinkState*
&CHANNEL_PARTNER_LINK_STATE_UNSPECIFIED 
INVITED

ACTIVE
REVOKED
	SUSPENDEDBy
com.google.cloud.channel.v1BChannelPartnerLinksProtoPZ>google.golang.org/genproto/googleapis/cloud/channel/v1;channelbproto3'
        , true);

        static::$is_initialized = true;
    }
}

