<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sales/v1/workflow.proto

namespace Sales\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>sales.v1.LineItem</code>
 */
class LineItem extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * While this is not deprecated, more currencies than the value of the enum are supported. To use those currencies use currency_code instead
     * </pre>
     *
     * <code>.sales.v1.Currency currency = 3;</code>
     */
    private $currency = 0;
    /**
     * <pre>
     *DEPRECATED: not important now that there is a draft state for sales orders, history of the order should be used instead
     * </pre>
     *
     * <code>.sales.v1.Revenue initial_revenue = 4 [deprecated = true];</code>
     */
    private $initial_revenue = null;
    /**
     * <code>.sales.v1.Revenue current_revenue = 5;</code>
     */
    private $current_revenue = null;
    /**
     * <code>int64 quantity = 6;</code>
     */
    private $quantity = 0;
    /**
     * <pre>
     * Only used when AppKey is the identifier
     * </pre>
     *
     * <code>bool is_trial = 7;</code>
     */
    private $is_trial = false;
    /**
     * <pre>
     * The 3-letter currency code defined in ISO 4217.
     * </pre>
     *
     * <code>string currency_code = 8;</code>
     */
    private $currency_code = '';
    protected $identifier;

    public function __construct() {
        \GPBMetadata\Sales\V1\Workflow::initOnce();
        parent::__construct();
    }

    /**
     * <code>.sales.v1.LineItem.AppKey app_key = 1;</code>
     */
    public function getAppKey()
    {
        return $this->readOneof(1);
    }

    /**
     * <code>.sales.v1.LineItem.AppKey app_key = 1;</code>
     */
    public function setAppKey(&$var)
    {
        GPBUtil::checkMessage($var, \Sales\V1\LineItem\AppKey::class);
        $this->writeOneof(1, $var);
    }

    /**
     * <code>string package_id = 2;</code>
     */
    public function getPackageId()
    {
        return $this->readOneof(2);
    }

    /**
     * <code>string package_id = 2;</code>
     */
    public function setPackageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);
    }

    /**
     * <pre>
     * While this is not deprecated, more currencies than the value of the enum are supported. To use those currencies use currency_code instead
     * </pre>
     *
     * <code>.sales.v1.Currency currency = 3;</code>
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * <pre>
     * While this is not deprecated, more currencies than the value of the enum are supported. To use those currencies use currency_code instead
     * </pre>
     *
     * <code>.sales.v1.Currency currency = 3;</code>
     */
    public function setCurrency($var)
    {
        GPBUtil::checkEnum($var, \Sales\V1\Currency::class);
        $this->currency = $var;
    }

    /**
     * <pre>
     *DEPRECATED: not important now that there is a draft state for sales orders, history of the order should be used instead
     * </pre>
     *
     * <code>.sales.v1.Revenue initial_revenue = 4 [deprecated = true];</code>
     */
    public function getInitialRevenue()
    {
        return $this->initial_revenue;
    }

    /**
     * <pre>
     *DEPRECATED: not important now that there is a draft state for sales orders, history of the order should be used instead
     * </pre>
     *
     * <code>.sales.v1.Revenue initial_revenue = 4 [deprecated = true];</code>
     */
    public function setInitialRevenue(&$var)
    {
        GPBUtil::checkMessage($var, \Sales\V1\Revenue::class);
        $this->initial_revenue = $var;
    }

    /**
     * <code>.sales.v1.Revenue current_revenue = 5;</code>
     */
    public function getCurrentRevenue()
    {
        return $this->current_revenue;
    }

    /**
     * <code>.sales.v1.Revenue current_revenue = 5;</code>
     */
    public function setCurrentRevenue(&$var)
    {
        GPBUtil::checkMessage($var, \Sales\V1\Revenue::class);
        $this->current_revenue = $var;
    }

    /**
     * <code>int64 quantity = 6;</code>
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <code>int64 quantity = 6;</code>
     */
    public function setQuantity($var)
    {
        GPBUtil::checkInt64($var);
        $this->quantity = $var;
    }

    /**
     * <pre>
     * Only used when AppKey is the identifier
     * </pre>
     *
     * <code>bool is_trial = 7;</code>
     */
    public function getIsTrial()
    {
        return $this->is_trial;
    }

    /**
     * <pre>
     * Only used when AppKey is the identifier
     * </pre>
     *
     * <code>bool is_trial = 7;</code>
     */
    public function setIsTrial($var)
    {
        GPBUtil::checkBool($var);
        $this->is_trial = $var;
    }

    /**
     * <pre>
     * The 3-letter currency code defined in ISO 4217.
     * </pre>
     *
     * <code>string currency_code = 8;</code>
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * <pre>
     * The 3-letter currency code defined in ISO 4217.
     * </pre>
     *
     * <code>string currency_code = 8;</code>
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;
    }

    public function getIdentifier()
    {
        return $this->whichOneof("identifier");
    }

}

