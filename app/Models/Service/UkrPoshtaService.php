<?php

namespace App\Models\Service;

class UkrPoshtaService extends DeliveryService
{
    private $key;
    private $token;
    public function __construct(string $key, string $token)
    {
        $this->key = $key;
        $this->token = $token;
    }
    public function getDeliveryService(): DeliveryServiceConnector
    {
        return new UkrPoshtaConnector($this->key, $this->token);
    }
}
