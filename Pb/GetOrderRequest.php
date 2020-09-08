<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: order.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.GetOrderRequest</code>
 */
class GetOrderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string shopId = 1;</code>
     */
    protected $shopId = '';
    /**
     * Generated from protobuf field <code>string orderNumber = 2;</code>
     */
    protected $orderNumber = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $shopId
     *     @type string $orderNumber
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Order::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string shopId = 1;</code>
     * @return string
     */
    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * Generated from protobuf field <code>string shopId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setShopId($var)
    {
        GPBUtil::checkString($var, True);
        $this->shopId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string orderNumber = 2;</code>
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Generated from protobuf field <code>string orderNumber = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->orderNumber = $var;

        return $this;
    }

}

