<?php

namespace FBTechnologies\HanootyDeliveryStrategy\Interfaces;

interface HanootyDeliveryInterface
{

    // create one or many orders
    public function createOrder($params);
    // update one or many orders
    public function updateOrder($params);
    // get list of orders
    public function getOrders($params);
    // get one order
    public function getOrder($params);
    // delete one or many
    public function deleteOrder($params);

    // get cities
    public function getCities($params);
    // get wilayas
    public function getWilayas($params);
    // get delivery fees
    public function getDeliveryFees($params);

    // get status
    public function getStatus($params);

}
