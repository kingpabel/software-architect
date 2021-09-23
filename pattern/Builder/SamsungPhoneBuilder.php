<?php
namespace Pattern\Builder;

use Pattern\Builder\Interfaces\ISmartPhoneBuilder;

class SamsungPhoneBuilder implements ISmartPhoneBuilder
{
    public function addCPU() : self
    {
        // add cpu
        return $this;
    }

    public function addGPU() : self
    {
        // add GPU
        return $this;
    }

    public function addRAM() : self
    {
        // add ram
        return $this;
    }

    public function addSensors() : self
    {
        //  add sensor
        return $this;
    }

    public function addCamera() : self
    {
        // add camera
        return $this;
    }

    public function addCase() : self
    {
        // add case
        return $this;
    }

    public function getProduct() : self
    {
        // finally get the product
        return $this;
    }
}
