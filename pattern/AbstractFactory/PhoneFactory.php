<?php
namespace Pattern\AbstractFactory;

use Pattern\AbstractFactory\Interfaces\ISmartPhone;

abstract class PhoneFactory
{
    abstract public function makePhone() : ISmartPhone;
}
