<?php

namespace App\Billing;

use Illuminate\Support\Str;

class PaymentGateway
{
    private $currency;
    private $discount;

    /**
     * @param $currency<String>
     * @return $currency<String>
     */
    public function __construct(string $currency){
        $this->currency = $currency;
        $this->discount = 0;
    }

    /**
     * @param $amount<int>
     * @return void
     */
    public function setDiscount($amount){
        $this->discount = $amount;
    }

    /**
     * @param $amount int
     * @return Array
     */
    public function charge(int $amount) {
        return [
            'amount' => $amount - $this->discount,
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount
        ];
    }
}