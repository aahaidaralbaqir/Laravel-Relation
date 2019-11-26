<?php

class OrderDetails
{
    private $paymentGateway;
    private $discount;

    public function __constuct(PaymentGateway $paymentGateway){
        $this->paymentGateway = $paymentGateway;
    }

    public function all()
    {
        $this->paymentGateway->setDiscount(500);
        return [
            'name' => 'victor',
            'adress' => '123 Coder\rs Tape Street'
        ];
    }
}