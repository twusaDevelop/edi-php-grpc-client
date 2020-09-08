<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Pb;

/**
 */
class OrderServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Pb\GetOrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetOrders(\Pb\GetOrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.OrderService/GetOrders',
        $argument,
        ['\Pb\GetOrdersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Pb\GetOrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetOrder(\Pb\GetOrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.OrderService/GetOrder',
        $argument,
        ['\Pb\GetOrderResponse', 'decode'],
        $metadata, $options);
    }

}
