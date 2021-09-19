<?php
namespace Pattern\Factory;

use Pattern\Factory\Interfaces\IPersist;

class DBFactory
{
    public static function create(string $defautl = 'mysql') : IPersist
    {
        if ($defautl != 'mysql') {
            return new SqLite;
        }

        return new Mysql;
    }
}
