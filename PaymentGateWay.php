<?php

abstract class PaymentGateWay
{
    abstract public function charge();

    protected function postCharge()
    {
        $this->dispatch();
        $this->sendPaymentConfirmation();
    }

    private function dispatch()
    {
        // dispatch a number of event
    }

    private function sendPaymentConfirmation()
    {
        // could be on email/sms
    }
}
