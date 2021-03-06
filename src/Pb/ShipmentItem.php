<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: shipment.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.ShipmentItem</code>
 */
class ShipmentItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sku = 1;</code>
     */
    protected $sku = '';
    /**
     * Generated from protobuf field <code>int32 qty = 2;</code>
     */
    protected $qty = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sku
     *     @type int $qty
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Shipment::initOnce();
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
     * Generated from protobuf field <code>int32 qty = 2;</code>
     * @return int
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Generated from protobuf field <code>int32 qty = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setQty($var)
    {
        GPBUtil::checkInt32($var);
        $this->qty = $var;

        return $this;
    }

}

