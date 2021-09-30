<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An entry describing an error that has occurred.
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.ErrorLogEntry</code>
 */
class ErrorLogEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A URL that refers to the target (a data source, a data sink,
     * or an object) with which the error is associated.
     *
     * Generated from protobuf field <code>string url = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $url = '';
    /**
     * A list of messages that carry the error details.
     *
     * Generated from protobuf field <code>repeated string error_details = 3;</code>
     */
    private $error_details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $url
     *           Required. A URL that refers to the target (a data source, a data sink,
     *           or an object) with which the error is associated.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $error_details
     *           A list of messages that carry the error details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A URL that refers to the target (a data source, a data sink,
     * or an object) with which the error is associated.
     *
     * Generated from protobuf field <code>string url = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Required. A URL that refers to the target (a data source, a data sink,
     * or an object) with which the error is associated.
     *
     * Generated from protobuf field <code>string url = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * A list of messages that carry the error details.
     *
     * Generated from protobuf field <code>repeated string error_details = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrorDetails()
    {
        return $this->error_details;
    }

    /**
     * A list of messages that carry the error details.
     *
     * Generated from protobuf field <code>repeated string error_details = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrorDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->error_details = $arr;

        return $this;
    }

}

