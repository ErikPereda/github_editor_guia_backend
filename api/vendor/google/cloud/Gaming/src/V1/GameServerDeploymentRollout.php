<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/game_server_deployments.proto

namespace Google\Cloud\Gaming\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The game server deployment rollout which represents the desired rollout
 * state.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1.GameServerDeploymentRollout</code>
 */
class GameServerDeploymentRollout extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the game server deployment rollout. Uses the form:
     * `projects/{project}/locations/{location}/gameServerDeployments/{deployment}/rollout`.
     * For example,
     * `projects/my-project/locations/global/gameServerDeployments/my-deployment/rollout`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * The default game server config is applied to all realms unless overridden
     * in the rollout. For example,
     * `projects/my-project/locations/global/gameServerDeployments/my-game/configs/my-config`.
     *
     * Generated from protobuf field <code>string default_game_server_config = 4;</code>
     */
    private $default_game_server_config = '';
    /**
     * Contains the game server config rollout overrides. Overrides are processed
     * in the order they are listed. Once a match is found for a realm, the rest
     * of the list is not processed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.GameServerConfigOverride game_server_config_overrides = 5;</code>
     */
    private $game_server_config_overrides;
    /**
     * ETag of the resource.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     */
    private $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the game server deployment rollout. Uses the form:
     *           `projects/{project}/locations/{location}/gameServerDeployments/{deployment}/rollout`.
     *           For example,
     *           `projects/my-project/locations/global/gameServerDeployments/my-deployment/rollout`.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The creation time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last-modified time.
     *     @type string $default_game_server_config
     *           The default game server config is applied to all realms unless overridden
     *           in the rollout. For example,
     *           `projects/my-project/locations/global/gameServerDeployments/my-game/configs/my-config`.
     *     @type \Google\Cloud\Gaming\V1\GameServerConfigOverride[]|\Google\Protobuf\Internal\RepeatedField $game_server_config_overrides
     *           Contains the game server config rollout overrides. Overrides are processed
     *           in the order they are listed. Once a match is found for a realm, the rest
     *           of the list is not processed.
     *     @type string $etag
     *           ETag of the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\GameServerDeployments::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the game server deployment rollout. Uses the form:
     * `projects/{project}/locations/{location}/gameServerDeployments/{deployment}/rollout`.
     * For example,
     * `projects/my-project/locations/global/gameServerDeployments/my-deployment/rollout`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the game server deployment rollout. Uses the form:
     * `projects/{project}/locations/{location}/gameServerDeployments/{deployment}/rollout`.
     * For example,
     * `projects/my-project/locations/global/gameServerDeployments/my-deployment/rollout`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return isset($this->update_time) ? $this->update_time : null;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * The default game server config is applied to all realms unless overridden
     * in the rollout. For example,
     * `projects/my-project/locations/global/gameServerDeployments/my-game/configs/my-config`.
     *
     * Generated from protobuf field <code>string default_game_server_config = 4;</code>
     * @return string
     */
    public function getDefaultGameServerConfig()
    {
        return $this->default_game_server_config;
    }

    /**
     * The default game server config is applied to all realms unless overridden
     * in the rollout. For example,
     * `projects/my-project/locations/global/gameServerDeployments/my-game/configs/my-config`.
     *
     * Generated from protobuf field <code>string default_game_server_config = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultGameServerConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_game_server_config = $var;

        return $this;
    }

    /**
     * Contains the game server config rollout overrides. Overrides are processed
     * in the order they are listed. Once a match is found for a realm, the rest
     * of the list is not processed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.GameServerConfigOverride game_server_config_overrides = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGameServerConfigOverrides()
    {
        return $this->game_server_config_overrides;
    }

    /**
     * Contains the game server config rollout overrides. Overrides are processed
     * in the order they are listed. Once a match is found for a realm, the rest
     * of the list is not processed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.GameServerConfigOverride game_server_config_overrides = 5;</code>
     * @param \Google\Cloud\Gaming\V1\GameServerConfigOverride[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGameServerConfigOverrides($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Gaming\V1\GameServerConfigOverride::class);
        $this->game_server_config_overrides = $arr;

        return $this;
    }

    /**
     * ETag of the resource.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * ETag of the resource.
     *
     * Generated from protobuf field <code>string etag = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

