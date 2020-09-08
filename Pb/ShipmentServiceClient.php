<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Pb;

/**
 */
class ShipmentServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Pb\CreateShipmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateShipment(\Pb\CreateShipmentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.ShipmentService/CreateShipment',
        $argument,
        ['\Pb\CreateShipmentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Pb\GetShipmentStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetShipmentStatus(\Pb\GetShipmentStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pb.ShipmentService/GetShipmentStatus',
        $argument,
        ['\Pb\GetShipmentStatusResponse', 'decode'],
        $metadata, $options);
    }

}
