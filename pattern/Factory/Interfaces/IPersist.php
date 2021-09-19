<?php
namespace Pattern\Factory\Interfaces;

interface IPersist
{
    public function save();

    public function update();

    public function delete();
}
