<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sales_orders/v1/api.proto

namespace Salesorders\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>salesorders.v1.GetStatusCountsResponse</code>
 */
class GetStatusCountsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Counts is a map from the status to the number of orders that are currently in that status
     * the key is the value of the order.Status values but proto doesn't allow enums as the key type so it's ints
     * </pre>
     *
     * <code>map&lt;int64, int64&gt; counts = 1;</code>
     */
    private $counts;

    public function __construct() {
        \GPBMetadata\SalesOrders\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Counts is a map from the status to the number of orders that are currently in that status
     * the key is the value of the order.Status values but proto doesn't allow enums as the key type so it's ints
     * </pre>
     *
     * <code>map&lt;int64, int64&gt; counts = 1;</code>
     */
    public function getCounts()
    {
        return $this->counts;
    }

    /**
     * <pre>
     * Counts is a map from the status to the number of orders that are currently in that status
     * the key is the value of the order.Status values but proto doesn't allow enums as the key type so it's ints
     * </pre>
     *
     * <code>map&lt;int64, int64&gt; counts = 1;</code>
     */
    public function setCounts(&$var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::INT64, \Google\Protobuf\Internal\GPBType::INT64);
        $this->counts = $arr;
    }

}

