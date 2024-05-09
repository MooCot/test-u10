<?php

namespace App\Models;

class DeliveryFacade {
    private $services;

    public function __construct() {
        $this->services = [
            'nova_poshta' => new NovaPoshtaService(),
            'ukr_poshta' => new UkrPoshtaService(),
        ];
    }

    public function sendToService($serviceName, $endpoint, $method, $data) {
        if (isset($this->services[$serviceName])) {
            $this->services[$serviceName]->send($data, $endpoint, $method);
        } else {
            throw new \Exception("Невідомий сервіс доставки: $serviceName");
        }
    }
}
