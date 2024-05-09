<?php

namespace App\Http\Controllers;

use App\Models\DeliveryFacade;

class OrderController extends Controller
{
    private $deliveryFacade;

    public function __construct(DeliveryFacade $deliveryFacade)
    {
        $this->deliveryFacade = $deliveryFacade;
    }

    public function sendOrder()
    {
        // Логіка обробки замовлення

        // Відправка замовлення до служби доставки
        $this->deliveryFacade->sendToService('nova_poshta', $orderData);

        return response()->json(['message' => 'Order sent successfully']);
    }
}