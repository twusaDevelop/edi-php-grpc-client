<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: order.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.GetOrdersRequest</code>
 */
class GetOrdersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string shopId = 1;</code>
     */
    protected $shopId = '';
    /**
     * Generated from protobuf field <code>int64 startTimestamp = 2;</code>
     */
    protected $startTimestamp = 0;
    /**
     * Generated from protobuf field <code>int64 endTimestamp = 3;</code>
     */
    protected $endTimestamp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $shopId
     *     @type int|string $startTimestamp
     *     @type int|string $endTimestamp
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
     * Generated from protobuf field <code>int64 startTimestamp = 2;</code>
     * @return int|string
     */
    public function getStartTimestamp()
    {
        return $this->startTimestamp;
    }

    /**
     * Generated from protobuf field <code>int64 startTimestamp = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->startTimestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 endTimestamp = 3;</code>
     * @return int|string
     */
    public function getEndTimestamp()
    {
        return $this->endTimestamp;
    }

    /**
     * Generated from protobuf field <code>int64 endTimestamp = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->endTimestamp = $var;

        return $this;
    }

}
