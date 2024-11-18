<?php

namespace App\Http\Controllers;

use App\Http\Billing\PaymentGateway;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(PaymentGateway $paymentGateway,OrderDetails $orderDetails)
    {
        $order = $orderDetails->get();
        dd($paymentGateway->charge(2000));
    }
}
