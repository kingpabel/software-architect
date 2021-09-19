<?php
namespace Pattern\AbstractFactory;

use Pattern\AbstractFactory\Interfaces\ISmartPhone;

class Samsung implements ISmartPhone
{
    public function getDisplay() : string
    {
        return 'ips';
    }

    public function getCableType() : string
    {
        return 'type-c';
    }
}
