<?php

namespace App\Http\Controllers;

use App\Models\Service\DeliveryFacade;
use Illuminate\Http\Request;
use App\Models\Parcel;
use App\Models\Sender;
use App\Models\Recipient;

class OrderController extends Controller
{
    private $deliveryFacade;

    public function __construct(DeliveryFacade $deliveryFacade)
    {
        $this->deliveryFacade = $deliveryFacade;
    }

    public function sendOrder(Request $request)
    {

        $sender = Sender::create([
            'name' => $request->sender->id,
            'email' => $request->sender->name,
        ]);

        $sender = Parcel::create([
            'order_id' => $request->sender->parcel->order_id,
            'name' => $request->sender->parcel->name,
            'sender_id' => $sender->id,
        ]);

        $sender = Recipient::create([
            'id' => $request->recipient->id,
            'name' => $request->recipient->name,
        ]);
        $orderData = $request->all();
        $this->deliveryFacade->sendToService('nova_poshta', $orderData);

        return response()->json(['message' => 'Order sent successfully']);
    }
}