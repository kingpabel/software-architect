<?php

class Paypal extends PaymentGateWay
{
    public function charge()
    {
        // charge the payment from payapl
        $this->postCharge();
    }
}
