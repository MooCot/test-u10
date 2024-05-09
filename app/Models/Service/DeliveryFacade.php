<?php

namespace App\Models\Service;

class DeliveryFacade {
    private $services;

    public function __construct() {
        $this->services = [
            'nova_poshta' => new NovaPoshtaService("john_smith", "******"),
            'ukr_poshta' => new UkrPoshtaService("john_smith", "******"),
        ];
    }

    public function sendToService(string $serviceName, array $data): void
    {
        if (isset($this->services[$serviceName])) {
            $this->services[$serviceName]->post($data);
        } else {
            throw new \Exception("Unknown service: $serviceName");
        }
    }
}
