<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/connectivity_test.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Results of the configuration analysis from the last run of the test.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.ReachabilityDetails</code>
 */
class ReachabilityDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * The overall result of the test's configuration analysis.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ReachabilityDetails.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * The time of the configuration analysis.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp verify_time = 2;</code>
     */
    private $verify_time = null;
    /**
     * The details of a failure or a cancellation of reachability analysis.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 3;</code>
     */
    private $error = null;
    /**
     * Result may contain a list of traces if a test has multiple possible
     * paths in the network, such as when destination endpoint is a load balancer
     * with multiple backends.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkmanagement.v1.Trace traces = 5;</code>
     */
    private $traces;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *           The overall result of the test's configuration analysis.
     *     @type \Google\Protobuf\Timestamp $verify_time
     *           The time of the configuration analysis.
     *     @type \Google\Rpc\Status $error
     *           The details of a failure or a cancellation of reachability analysis.
     *     @type \Google\Cloud\NetworkManagement\V1\Trace[]|\Google\Protobuf\Internal\RepeatedField $traces
     *           Result may contain a list of traces if a test has multiple possible
     *           paths in the network, such as when destination endpoint is a load balancer
     *           with multiple backends.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\ConnectivityTest::initOnce();
        parent::__construct($data);
    }

    /**
     * The overall result of the test's configuration analysis.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ReachabilityDetails.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * The overall result of the test's configuration analysis.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ReachabilityDetails.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkManagement\V1\ReachabilityDetails\Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * The time of the configuration analysis.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp verify_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getVerifyTime()
    {
        return isset($this->verify_time) ? $this->verify_time : null;
    }

    public function hasVerifyTime()
    {
        return isset($this->verify_time);
    }

    public function clearVerifyTime()
    {
        unset($this->verify_time);
    }

    /**
     * The time of the configuration analysis.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp verify_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setVerifyTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->verify_time = $var;

        return $this;
    }

    /**
     * The details of a failure or a cancellation of reachability analysis.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 3;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return isset($this->error) ? $this->error : null;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * The details of a failure or a cancellation of reachability analysis.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 3;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

    /**
     * Result may contain a list of traces if a test has multiple possible
     * paths in the network, such as when destination endpoint is a load balancer
     * with multiple backends.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkmanagement.v1.Trace traces = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTraces()
    {
        return $this->traces;
    }

    /**
     * Result may contain a list of traces if a test has multiple possible
     * paths in the network, such as when destination endpoint is a load balancer
     * with multiple backends.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkmanagement.v1.Trace traces = 5;</code>
     * @param \Google\Cloud\NetworkManagement\V1\Trace[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTraces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetworkManagement\V1\Trace::class);
        $this->traces = $arr;

        return $this;
    }

}

