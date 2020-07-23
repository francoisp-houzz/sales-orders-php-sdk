<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sales_orders/v1/api.proto

namespace Salesorders\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Begin and end of date range
 * </pre>
 *
 * Protobuf type <code>salesorders.v1.InitiateOrderExportRequest.DateRangeFilter</code>
 */
class InitiateOrderExportRequest_DateRangeFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.google.protobuf.Timestamp begin_range = 1;</code>
     */
    private $begin_range = null;
    /**
     * <code>.google.protobuf.Timestamp end_range = 2;</code>
     */
    private $end_range = null;

    public function __construct() {
        \GPBMetadata\SalesOrders\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>.google.protobuf.Timestamp begin_range = 1;</code>
     */
    public function getBeginRange()
    {
        return $this->begin_range;
    }

    /**
     * <code>.google.protobuf.Timestamp begin_range = 1;</code>
     */
    public function setBeginRange(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->begin_range = $var;
    }

    /**
     * <code>.google.protobuf.Timestamp end_range = 2;</code>
     */
    public function getEndRange()
    {
        return $this->end_range;
    }

    /**
     * <code>.google.protobuf.Timestamp end_range = 2;</code>
     */
    public function setEndRange(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_range = $var;
    }

}
