<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: order.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.Item</code>
 */
class Item extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sku = 1;</code>
     */
    protected $sku = '';
    /**
     * Generated from protobuf field <code>int32 quantity = 2;</code>
     */
    protected $quantity = 0;
    /**
     * Generated from protobuf field <code>double shippingCost = 3;</code>
     */
    protected $shippingCost = 0.0;
    /**
     * Generated from protobuf field <code>double shippingDiscount = 4;</code>
     */
    protected $shippingDiscount = 0.0;
    /**
     * Generated from protobuf field <code>double taxCost = 5;</code>
     */
    protected $taxCost = 0.0;
    /**
     * Generated from protobuf field <code>double price = 6;</code>
     */
    protected $price = 0.0;
    /**
     * Generated from protobuf field <code>double promotionDiscount = 7;</code>
     */
    protected $promotionDiscount = 0.0;
    /**
     * Generated from protobuf field <code>double codFee = 8;</code>
     */
    protected $codFee = 0.0;
    /**
     * Generated from protobuf field <code>double codFeeDiscount = 9;</code>
     */
    protected $codFeeDiscount = 0.0;
    /**
     * Generated from protobuf field <code>double giftWrapPrice = 10;</code>
     */
    protected $giftWrapPrice = 0.0;
    /**
     * Generated from protobuf field <code>double giftWrapTax = 11;</code>
     */
    protected $giftWrapTax = 0.0;
    /**
     * Generated from protobuf field <code>string title = 12;</code>
     */
    protected $title = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sku
     *     @type int $quantity
     *     @type float $shippingCost
     *     @type float $shippingDiscount
     *     @type float $taxCost
     *     @type float $price
     *     @type float $promotionDiscount
     *     @type float $codFee
     *     @type float $codFeeDiscount
     *     @type float $giftWrapPrice
     *     @type float $giftWrapTax
     *     @type string $title
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Order::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string sku = 1;</code>
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Generated from protobuf field <code>string sku = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSku($var)
    {
        GPBUtil::checkString($var, True);
        $this->sku = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 quantity = 2;</code>
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Generated from protobuf field <code>int32 quantity = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkInt32($var);
        $this->quantity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double shippingCost = 3;</code>
     * @return float
     */
    public function getShippingCost()
    {
        return $this->shippingCost;
    }

    /**
     * Generated from protobuf field <code>double shippingCost = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setShippingCost($var)
    {
        GPBUtil::checkDouble($var);
        $this->shippingCost = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double shippingDiscount = 4;</code>
     * @return float
     */
    public function getShippingDiscount()
    {
        return $this->shippingDiscount;
    }

    /**
     * Generated from protobuf field <code>double shippingDiscount = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setShippingDiscount($var)
    {
        GPBUtil::checkDouble($var);
        $this->shippingDiscount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double taxCost = 5;</code>
     * @return float
     */
    public function getTaxCost()
    {
        return $this->taxCost;
    }

    /**
     * Generated from protobuf field <code>double taxCost = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setTaxCost($var)
    {
        GPBUtil::checkDouble($var);
        $this->taxCost = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double price = 6;</code>
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Generated from protobuf field <code>double price = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkDouble($var);
        $this->price = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double promotionDiscount = 7;</code>
     * @return float
     */
    public function getPromotionDiscount()
    {
        return $this->promotionDiscount;
    }

    /**
     * Generated from protobuf field <code>double promotionDiscount = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setPromotionDiscount($var)
    {
        GPBUtil::checkDouble($var);
        $this->promotionDiscount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double codFee = 8;</code>
     * @return float
     */
    public function getCodFee()
    {
        return $this->codFee;
    }

    /**
     * Generated from protobuf field <code>double codFee = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setCodFee($var)
    {
        GPBUtil::checkDouble($var);
        $this->codFee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double codFeeDiscount = 9;</code>
     * @return float
     */
    public function getCodFeeDiscount()
    {
        return $this->codFeeDiscount;
    }

    /**
     * Generated from protobuf field <code>double codFeeDiscount = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setCodFeeDiscount($var)
    {
        GPBUtil::checkDouble($var);
        $this->codFeeDiscount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double giftWrapPrice = 10;</code>
     * @return float
     */
    public function getGiftWrapPrice()
    {
        return $this->giftWrapPrice;
    }

    /**
     * Generated from protobuf field <code>double giftWrapPrice = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setGiftWrapPrice($var)
    {
        GPBUtil::checkDouble($var);
        $this->giftWrapPrice = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double giftWrapTax = 11;</code>
     * @return float
     */
    public function getGiftWrapTax()
    {
        return $this->giftWrapTax;
    }

    /**
     * Generated from protobuf field <code>double giftWrapTax = 11;</code>
     * @param float $var
     * @return $this
     */
    public function setGiftWrapTax($var)
    {
        GPBUtil::checkDouble($var);
        $this->giftWrapTax = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 12;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

}

