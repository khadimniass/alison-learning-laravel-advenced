<?php

namespace App\Orders;

use App\Http\Billing\PaymentGateway;

class OrderDetails
{
    public function __construct(
        private PaymentGateway $paymentGateway,
    ){}

    public function get():array
    {
        $this->paymentGateway->setDiscount(600);
        return [
            'name'=>'Greg',
            'address'=>'31 Stret wilson',
        ];
    }
}
