<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sales_orders/v1/api.proto

namespace Salesorders\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Request for approving a requested cancellation
 * </pre>
 *
 * Protobuf type <code>salesorders.v1.ApproveCancellationRequest</code>
 */
class ApproveCancellationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Unique identifier of an order
     * </pre>
     *
     * <code>string order_id = 1;</code>
     */
    private $order_id = '';
    /**
     * <pre>
     * The business the order belongs to
     * </pre>
     *
     * <code>string business_id = 2;</code>
     */
    private $business_id = '';

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

    /**
     * <pre>
     * The business the order belongs to
     * </pre>
     *
     * <code>string business_id = 2;</code>
     */
    public function getBusinessId()
    {
        return $this->business_id;
    }

    /**
     * <pre>
     * The business the order belongs to
     * </pre>
     *
     * <code>string business_id = 2;</code>
     */
    public function setBusinessId($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_id = $var;
    }

}
