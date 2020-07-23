<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sales_orders/v1/sales_orders.proto

namespace Salesorders\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Representing a package in an order
 * </pre>
 *
 * Protobuf type <code>salesorders.v1.Package</code>
 */
class Package extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Unique identifier of a package
     * </pre>
     *
     * <code>string package_id = 1;</code>
     */
    private $package_id = '';
    /**
     * <pre>
     * Type of currency the revenue of a package is in
     * </pre>
     *
     * <code>.sales.v1.Currency currency = 2;</code>
     */
    private $currency = 0;
    /**
     * <pre>
     * Revenue of a package
     * </pre>
     *
     * <code>.sales.v1.Revenue revenue = 3;</code>
     */
    private $revenue = null;
    /**
     * <pre>
     * How many of the package is being requested
     * </pre>
     *
     * <code>int64 quantity = 4;</code>
     */
    private $quantity = 0;
    /**
     * <pre>
     * List of unique identifiers for the products that belong to the package
     * DEPRECATED: get the products that are in a package from marketplace
     * </pre>
     *
     * <code>repeated string product_ids = 5 [deprecated = true];</code>
     */
    private $product_ids;
    /**
     * <pre>
     * DEPRECATED: get the addons that are in a package from marketplace
     * </pre>
     *
     * <code>repeated .salesorders.v1.AddonKey addon_keys = 6 [deprecated = true];</code>
     */
    private $addon_keys;

    public function __construct() {
        \GPBMetadata\SalesOrders\V1\SalesOrders::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Unique identifier of a package
     * </pre>
     *
     * <code>string package_id = 1;</code>
     */
    public function getPackageId()
    {
        return $this->package_id;
    }

    /**
     * <pre>
     * Unique identifier of a package
     * </pre>
     *
     * <code>string package_id = 1;</code>
     */
    public function setPackageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->package_id = $var;
    }

    /**
     * <pre>
     * Type of currency the revenue of a package is in
     * </pre>
     *
     * <code>.sales.v1.Currency currency = 2;</code>
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * <pre>
     * Type of currency the revenue of a package is in
     * </pre>
     *
     * <code>.sales.v1.Currency currency = 2;</code>
     */
    public function setCurrency($var)
    {
        GPBUtil::checkEnum($var, \Sales\V1\Currency::class);
        $this->currency = $var;
    }

    /**
     * <pre>
     * Revenue of a package
     * </pre>
     *
     * <code>.sales.v1.Revenue revenue = 3;</code>
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * <pre>
     * Revenue of a package
     * </pre>
     *
     * <code>.sales.v1.Revenue revenue = 3;</code>
     */
    public function setRevenue(&$var)
    {
        GPBUtil::checkMessage($var, \Sales\V1\Revenue::class);
        $this->revenue = $var;
    }

    /**
     * <pre>
     * How many of the package is being requested
     * </pre>
     *
     * <code>int64 quantity = 4;</code>
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <pre>
     * How many of the package is being requested
     * </pre>
     *
     * <code>int64 quantity = 4;</code>
     */
    public function setQuantity($var)
    {
        GPBUtil::checkInt64($var);
        $this->quantity = $var;
    }

    /**
     * <pre>
     * List of unique identifiers for the products that belong to the package
     * DEPRECATED: get the products that are in a package from marketplace
     * </pre>
     *
     * <code>repeated string product_ids = 5 [deprecated = true];</code>
     */
    public function getProductIds()
    {
        return $this->product_ids;
    }

    /**
     * <pre>
     * List of unique identifiers for the products that belong to the package
     * DEPRECATED: get the products that are in a package from marketplace
     * </pre>
     *
     * <code>repeated string product_ids = 5 [deprecated = true];</code>
     */
    public function setProductIds(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->product_ids = $arr;
    }

    /**
     * <pre>
     * DEPRECATED: get the addons that are in a package from marketplace
     * </pre>
     *
     * <code>repeated .salesorders.v1.AddonKey addon_keys = 6 [deprecated = true];</code>
     */
    public function getAddonKeys()
    {
        return $this->addon_keys;
    }

    /**
     * <pre>
     * DEPRECATED: get the addons that are in a package from marketplace
     * </pre>
     *
     * <code>repeated .salesorders.v1.AddonKey addon_keys = 6 [deprecated = true];</code>
     */
    public function setAddonKeys(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Salesorders\V1\AddonKey::class);
        $this->addon_keys = $arr;
    }

}
