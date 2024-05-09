<?php

namespace App\Models\Service;

class UkrPoshtaConnector implements DeliveryServiceConnector
{
    private $key;
    private $token;
    public function __construct(string $key, string $token)
    {
        $this->key = $key;
        $this->token = $token;
    }
    public function createOrder(array $data): void
    {
        echo "Send HTTP API request createOrder " . $data['sender']['parcel']['order_id'];
    }
}
