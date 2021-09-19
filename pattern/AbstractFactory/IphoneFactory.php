<?php
namespace Pattern\AbstractFactory;

use Pattern\AbstractFactory\Interfaces\ISmartPhone;

class IphoneFactory extends PhoneFactory
{
    public function makePhone() : ISmartPhone
    {
        return new Iphone;
    }
}
