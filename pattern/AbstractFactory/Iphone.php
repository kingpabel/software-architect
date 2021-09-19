<?php
namespace Pattern\AbstractFactory;

use Pattern\AbstractFactory\Interfaces\ISmartPhone;

class Iphone implements ISmartPhone
{
    public function getDisplay() : string
    {
        return 'retina';
    }

    public function getCableType() : string
    {
        return 'lightning';
    }
}
