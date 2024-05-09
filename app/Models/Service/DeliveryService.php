<?php

namespace App\Models\Service;
use App\Models\Parcel;
use App\Models\Sender;
use App\Models\Recipient;

abstract class DeliveryService
{
    abstract public function getDeliveryService(): DeliveryServiceConnector;

    public function post(array $data): void
    {
        $service = $this->getDeliveryService();
        $service->createOrder($data);
    }
}
