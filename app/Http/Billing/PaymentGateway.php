<?php

namespace App\Http\Billing;

use Illuminate\Support\Str;

class PaymentGateway
{
    public function __construct(
        private string $currency,
        private int $discount = 0
    ){}

    public function setDiscount(int $amount)
    {
        return $this->discount = $amount;
    }
    public function charge(int $amount)
    {
        return [
            'amount'=>$amount,
            'confirmation_number'=>Str::random(),
            'currency'=>$this->currency,
            'discount' =>$this->discount
        ];
    }

}
