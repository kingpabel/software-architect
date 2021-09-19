<?php
namespace Pattern\AbstractFactory;

use Pattern\AbstractFactory\Interfaces\ISmartPhone;

class SamsungFactory extends PhoneFactory
{
    public function makePhone() : ISmartPhone
    {
        return new Samsung;
    }
}
