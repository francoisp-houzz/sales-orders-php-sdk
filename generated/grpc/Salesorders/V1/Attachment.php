<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sales_orders/v1/sales_orders.proto

namespace Salesorders\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Represents an attachment on an order
 * </pre>
 *
 * Protobuf type <code>salesorders.v1.Attachment</code>
 */
class Attachment extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The name of the attachment
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * The url to the attachment
     * </pre>
     *
     * <code>string url = 2;</code>
     */
    private $url = '';

    public function __construct() {
        \GPBMetadata\SalesOrders\V1\SalesOrders::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The name of the attachment
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * The name of the attachment
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <pre>
     * The url to the attachment
     * </pre>
     *
     * <code>string url = 2;</code>
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * <pre>
     * The url to the attachment
     * </pre>
     *
     * <code>string url = 2;</code>
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;
    }

}

