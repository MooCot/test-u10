<?php

namespace App\Models;

interface DeliveryService
{
    public function send($data, $endpoint, $method);
}
