<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sales_orders/v1/api.proto

namespace Salesorders\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Filters to list tags based on given filter criterias
 * </pre>
 *
 * Protobuf type <code>salesorders.v1.ListTagsRequest.Filters</code>
 */
class ListTagsRequest_Filters extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The market_ids to include when filtering for tags, if empty will filter for all markets
     * </pre>
     *
     * <code>repeated string market_ids = 1;</code>
     */
    private $market_ids;

    public function __construct() {
        \GPBMetadata\SalesOrders\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The market_ids to include when filtering for tags, if empty will filter for all markets
     * </pre>
     *
     * <code>repeated string market_ids = 1;</code>
     */
    public function getMarketIds()
    {
        return $this->market_ids;
    }

    /**
     * <pre>
     * The market_ids to include when filtering for tags, if empty will filter for all markets
     * </pre>
     *
     * <code>repeated string market_ids = 1;</code>
     */
    public function setMarketIds(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->market_ids = $arr;
    }

}

