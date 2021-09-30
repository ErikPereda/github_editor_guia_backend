<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/search_service.proto

namespace Google\Cloud\Retail\V2\SearchResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information describing query expansion including whether expansion has
 * occurred.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.SearchResponse.QueryExpansionInfo</code>
 */
class QueryExpansionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Bool describing whether query expansion has occurred.
     *
     * Generated from protobuf field <code>bool expanded_query = 1;</code>
     */
    private $expanded_query = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $expanded_query
     *           Bool describing whether query expansion has occurred.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Bool describing whether query expansion has occurred.
     *
     * Generated from protobuf field <code>bool expanded_query = 1;</code>
     * @return bool
     */
    public function getExpandedQuery()
    {
        return $this->expanded_query;
    }

    /**
     * Bool describing whether query expansion has occurred.
     *
     * Generated from protobuf field <code>bool expanded_query = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setExpandedQuery($var)
    {
        GPBUtil::checkBool($var);
        $this->expanded_query = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QueryExpansionInfo::class, \Google\Cloud\Retail\V2\SearchResponse_QueryExpansionInfo::class);

