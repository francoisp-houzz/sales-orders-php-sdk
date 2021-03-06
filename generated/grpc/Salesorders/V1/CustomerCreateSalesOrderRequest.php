<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sales_orders/v1/api.proto

namespace Salesorders\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>salesorders.v1.CustomerCreateSalesOrderRequest</code>
 */
class CustomerCreateSalesOrderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     *The order to create
     * </pre>
     *
     * <code>.salesorders.v1.Order order = 1;</code>
     */
    private $order = null;

    public function __construct() {
        \GPBMetadata\SalesOrders\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     *The order to create
     * </pre>
     *
     * <code>.salesorders.v1.Order order = 1;</code>
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * <pre>
     *The order to create
     * </pre>
     *
     * <code>.salesorders.v1.Order order = 1;</code>
     */
    public function setOrder(&$var)
    {
        GPBUtil::checkMessage($var, \Salesorders\V1\Order::class);
        $this->order = $var;
    }

}

