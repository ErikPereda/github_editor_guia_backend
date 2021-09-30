<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.CustomerEncryptionKey</code>
 */
class CustomerEncryptionKey extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the encryption key that is stored in Google Cloud KMS.
     *
     * Generated from protobuf field <code>string kms_key_name = 484373913;</code>
     */
    private $kms_key_name = null;
    /**
     * The service account being used for the encryption request for the given KMS key. If absent, the Compute Engine default service account is used.
     *
     * Generated from protobuf field <code>string kms_key_service_account = 209986261;</code>
     */
    private $kms_key_service_account = null;
    /**
     * Specifies a 256-bit customer-supplied encryption key, encoded in RFC 4648 base64 to either encrypt or decrypt this resource.
     *
     * Generated from protobuf field <code>string raw_key = 449196488;</code>
     */
    private $raw_key = null;
    /**
     * [Output only] The RFC 4648 base64 encoded SHA-256 hash of the customer-supplied encryption key that protects this resource.
     *
     * Generated from protobuf field <code>string sha256 = 170112551;</code>
     */
    private $sha256 = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kms_key_name
     *           The name of the encryption key that is stored in Google Cloud KMS.
     *     @type string $kms_key_service_account
     *           The service account being used for the encryption request for the given KMS key. If absent, the Compute Engine default service account is used.
     *     @type string $raw_key
     *           Specifies a 256-bit customer-supplied encryption key, encoded in RFC 4648 base64 to either encrypt or decrypt this resource.
     *     @type string $sha256
     *           [Output only] The RFC 4648 base64 encoded SHA-256 hash of the customer-supplied encryption key that protects this resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the encryption key that is stored in Google Cloud KMS.
     *
     * Generated from protobuf field <code>string kms_key_name = 484373913;</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return isset($this->kms_key_name) ? $this->kms_key_name : '';
    }

    public function hasKmsKeyName()
    {
        return isset($this->kms_key_name);
    }

    public function clearKmsKeyName()
    {
        unset($this->kms_key_name);
    }

    /**
     * The name of the encryption key that is stored in Google Cloud KMS.
     *
     * Generated from protobuf field <code>string kms_key_name = 484373913;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

    /**
     * The service account being used for the encryption request for the given KMS key. If absent, the Compute Engine default service account is used.
     *
     * Generated from protobuf field <code>string kms_key_service_account = 209986261;</code>
     * @return string
     */
    public function getKmsKeyServiceAccount()
    {
        return isset($this->kms_key_service_account) ? $this->kms_key_service_account : '';
    }

    public function hasKmsKeyServiceAccount()
    {
        return isset($this->kms_key_service_account);
    }

    public function clearKmsKeyServiceAccount()
    {
        unset($this->kms_key_service_account);
    }

    /**
     * The service account being used for the encryption request for the given KMS key. If absent, the Compute Engine default service account is used.
     *
     * Generated from protobuf field <code>string kms_key_service_account = 209986261;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_service_account = $var;

        return $this;
    }

    /**
     * Specifies a 256-bit customer-supplied encryption key, encoded in RFC 4648 base64 to either encrypt or decrypt this resource.
     *
     * Generated from protobuf field <code>string raw_key = 449196488;</code>
     * @return string
     */
    public function getRawKey()
    {
        return isset($this->raw_key) ? $this->raw_key : '';
    }

    public function hasRawKey()
    {
        return isset($this->raw_key);
    }

    public function clearRawKey()
    {
        unset($this->raw_key);
    }

    /**
     * Specifies a 256-bit customer-supplied encryption key, encoded in RFC 4648 base64 to either encrypt or decrypt this resource.
     *
     * Generated from protobuf field <code>string raw_key = 449196488;</code>
     * @param string $var
     * @return $this
     */
    public function setRawKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->raw_key = $var;

        return $this;
    }

    /**
     * [Output only] The RFC 4648 base64 encoded SHA-256 hash of the customer-supplied encryption key that protects this resource.
     *
     * Generated from protobuf field <code>string sha256 = 170112551;</code>
     * @return string
     */
    public function getSha256()
    {
        return isset($this->sha256) ? $this->sha256 : '';
    }

    public function hasSha256()
    {
        return isset($this->sha256);
    }

    public function clearSha256()
    {
        unset($this->sha256);
    }

    /**
     * [Output only] The RFC 4648 base64 encoded SHA-256 hash of the customer-supplied encryption key that protects this resource.
     *
     * Generated from protobuf field <code>string sha256 = 170112551;</code>
     * @param string $var
     * @return $this
     */
    public function setSha256($var)
    {
        GPBUtil::checkString($var, True);
        $this->sha256 = $var;

        return $this;
    }

}

