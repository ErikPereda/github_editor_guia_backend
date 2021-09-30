<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/lifesciences/v2beta/workflows.proto

namespace Google\Cloud\LifeSciences\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An event generated when a container exits.
 *
 * Generated from protobuf message <code>google.cloud.lifesciences.v2beta.ContainerStoppedEvent</code>
 */
class ContainerStoppedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * The numeric ID of the action that started this container.
     *
     * Generated from protobuf field <code>int32 action_id = 1;</code>
     */
    private $action_id = 0;
    /**
     * The exit status of the container.
     *
     * Generated from protobuf field <code>int32 exit_status = 2;</code>
     */
    private $exit_status = 0;
    /**
     * The tail end of any content written to standard error by the container.
     * If the content emits large amounts of debugging noise or contains
     * sensitive information, you can prevent the content from being printed by
     * setting the `DISABLE_STANDARD_ERROR_CAPTURE` flag.
     * Note that only a small amount of the end of the stream is captured here.
     * The entire stream is stored in the `/google/logs` directory mounted into
     * each action, and can be copied off the machine as described elsewhere.
     *
     * Generated from protobuf field <code>string stderr = 3;</code>
     */
    private $stderr = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $action_id
     *           The numeric ID of the action that started this container.
     *     @type int $exit_status
     *           The exit status of the container.
     *     @type string $stderr
     *           The tail end of any content written to standard error by the container.
     *           If the content emits large amounts of debugging noise or contains
     *           sensitive information, you can prevent the content from being printed by
     *           setting the `DISABLE_STANDARD_ERROR_CAPTURE` flag.
     *           Note that only a small amount of the end of the stream is captured here.
     *           The entire stream is stored in the `/google/logs` directory mounted into
     *           each action, and can be copied off the machine as described elsewhere.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Lifesciences\V2Beta\Workflows::initOnce();
        parent::__construct($data);
    }

    /**
     * The numeric ID of the action that started this container.
     *
     * Generated from protobuf field <code>int32 action_id = 1;</code>
     * @return int
     */
    public function getActionId()
    {
        return $this->action_id;
    }

    /**
     * The numeric ID of the action that started this container.
     *
     * Generated from protobuf field <code>int32 action_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setActionId($var)
    {
        GPBUtil::checkInt32($var);
        $this->action_id = $var;

        return $this;
    }

    /**
     * The exit status of the container.
     *
     * Generated from protobuf field <code>int32 exit_status = 2;</code>
     * @return int
     */
    public function getExitStatus()
    {
        return $this->exit_status;
    }

    /**
     * The exit status of the container.
     *
     * Generated from protobuf field <code>int32 exit_status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setExitStatus($var)
    {
        GPBUtil::checkInt32($var);
        $this->exit_status = $var;

        return $this;
    }

    /**
     * The tail end of any content written to standard error by the container.
     * If the content emits large amounts of debugging noise or contains
     * sensitive information, you can prevent the content from being printed by
     * setting the `DISABLE_STANDARD_ERROR_CAPTURE` flag.
     * Note that only a small amount of the end of the stream is captured here.
     * The entire stream is stored in the `/google/logs` directory mounted into
     * each action, and can be copied off the machine as described elsewhere.
     *
     * Generated from protobuf field <code>string stderr = 3;</code>
     * @return string
     */
    public function getStderr()
    {
        return $this->stderr;
    }

    /**
     * The tail end of any content written to standard error by the container.
     * If the content emits large amounts of debugging noise or contains
     * sensitive information, you can prevent the content from being printed by
     * setting the `DISABLE_STANDARD_ERROR_CAPTURE` flag.
     * Note that only a small amount of the end of the stream is captured here.
     * The entire stream is stored in the `/google/logs` directory mounted into
     * each action, and can be copied off the machine as described elsewhere.
     *
     * Generated from protobuf field <code>string stderr = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStderr($var)
    {
        GPBUtil::checkString($var, True);
        $this->stderr = $var;

        return $this;
    }

}

