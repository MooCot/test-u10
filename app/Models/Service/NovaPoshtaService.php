<?php

namespace App\Models\Service;

class NovaPoshtaService extends DeliveryService
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
        return new NovaPoshtaConnector($this->key, $this->token);
    }
}
