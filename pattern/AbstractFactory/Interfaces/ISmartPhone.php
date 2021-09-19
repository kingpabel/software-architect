<?php
namespace Pattern\AbstractFactory\Interfaces;

interface ISmartPhone
{
    public function getDisplay() : string;

    public function getCableType() : string;
}
