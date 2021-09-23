<?php
namespace Pattern\Builder;

use Pattern\Builder\Interfaces\ISmartPhoneBuilder;

class SmartPhoneCreator
{
    public function buildPhone(ISmartPhoneBuilder $SmartPhoneBuilder)
    {
        return $SmartPhoneBuilder->addCPU()
        ->addGPU()
        ->addRAM()
        ->addSensors()
        ->addCamera()
        ->addCase()
        ->getProduct();
    }
}
