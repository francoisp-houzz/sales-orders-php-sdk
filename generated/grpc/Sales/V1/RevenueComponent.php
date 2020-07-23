<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sales/v1/workflow.proto

namespace Sales\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>sales.v1.RevenueComponent</code>
 */
class RevenueComponent extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The value in the smallest common currency unit i.e. cents. Therefore 4000 would represent $40.00.
     * </pre>
     *
     * <code>int64 value = 1;</code>
     */
    private $value = 0;
    /**
     * <pre>
     * The frequency this revenue occurs.
     * </pre>
     *
     * <code>.sales.v1.RevenuePeriod period = 2;</code>
     */
    private $period = 0;
    /**
     * <pre>
     * The indication if this is only the starting price or the actual price
     * </pre>
     *
     * <code>bool is_starting_revenue = 3;</code>
     */
    private $is_starting_revenue = false;

    public function __construct() {
        \GPBMetadata\Sales\V1\Workflow::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The value in the smallest common currency unit i.e. cents. Therefore 4000 would represent $40.00.
     * </pre>
     *
     * <code>int64 value = 1;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <pre>
     * The value in the smallest common currency unit i.e. cents. Therefore 4000 would represent $40.00.
     * </pre>
     *
     * <code>int64 value = 1;</code>
     */
    public function setValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->value = $var;
    }

    /**
     * <pre>
     * The frequency this revenue occurs.
     * </pre>
     *
     * <code>.sales.v1.RevenuePeriod period = 2;</code>
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * <pre>
     * The frequency this revenue occurs.
     * </pre>
     *
     * <code>.sales.v1.RevenuePeriod period = 2;</code>
     */
    public function setPeriod($var)
    {
        GPBUtil::checkEnum($var, \Sales\V1\RevenuePeriod::class);
        $this->period = $var;
    }

    /**
     * <pre>
     * The indication if this is only the starting price or the actual price
     * </pre>
     *
     * <code>bool is_starting_revenue = 3;</code>
     */
    public function getIsStartingRevenue()
    {
        return $this->is_starting_revenue;
    }

    /**
     * <pre>
     * The indication if this is only the starting price or the actual price
     * </pre>
     *
     * <code>bool is_starting_revenue = 3;</code>
     */
    public function setIsStartingRevenue($var)
    {
        GPBUtil::checkBool($var);
        $this->is_starting_revenue = $var;
    }

}
