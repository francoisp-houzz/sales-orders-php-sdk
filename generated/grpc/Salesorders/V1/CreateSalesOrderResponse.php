<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sales_orders/v1/api.proto

namespace Salesorders\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Response of creating an order
 * </pre>
 *
 * Protobuf type <code>salesorders.v1.CreateSalesOrderResponse</code>
 */
class CreateSalesOrderResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Unique identifier of an order
     * </pre>
     *
     * <code>string order_id = 1;</code>
     */
    private $order_id = '';

    public function __construct() {
        \GPBMetadata\SalesOrders\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Unique identifier of an order
     * </pre>
     *
     * <code>string order_id = 1;</code>
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * <pre>
     * Unique identifier of an order
     * </pre>
     *
     * <code>string order_id = 1;</code>
     */
    public function setOrderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_id = $var;
    }

}

