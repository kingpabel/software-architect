<?php
namespace Pattern\Singleton;

final class ConnectDB
{
    private $con;

    private function __construct()
    {
        // connect to the database
        $this->con = '';
    }

    public static function init()
    {
        static $instance = false;

        if (!$instance) {
            $instance = new self;
        }

        return $instance;
    }

    public function getConnection()
    {
        return $this->con;
    }
}
