<?php

class Stripe extends PaymentGateWay implements FraudDetectAble
{
    public function charge()
    {
        if (!$this->isFraud()) {
            // charge the payment from payapl
            $this->postCharge();
        }
    }

    public function isFraud()
    {
        // validate the payment details
    }
}
