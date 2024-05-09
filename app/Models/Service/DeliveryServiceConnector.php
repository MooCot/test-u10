<?php

namespace App\Models\Service;

interface DeliveryServiceConnector
{
    public function createOrder(array $data): void;
}
