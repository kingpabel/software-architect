<?php
namespace Pattern\Builder\Interfaces;

interface ISmartPhoneBuilder
{
    public function addCPU() : self;

    public function addGPU() : self;

    public function addRAM() : self;

    public function addSensors() : self;

    public function addCamera() : self;

    public function addCase() : self;

    public function getProduct() : self;
}
