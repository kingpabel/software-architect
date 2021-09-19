<?php

require_once './vendor/autoload.php';

use Pattern\AbstractFactory\PhoneFactory;
use Pattern\AbstractFactory\SamsungFactory;
use Pattern\Factory\DBFactory;
use Pattern\Singleton\ConnectDB;

// abstract factory
testFactory(new SamsungFactory);

function testFactory(PhoneFactory $phoneFactory)
{
    $phone = $phoneFactory->makePhone();
    echo 'the display is ' . $phone->getDisplay() . PHP_EOL;
    echo 'the cable is ' . $phone->getCableType() . PHP_EOL;
}

// factory
$db = DBFactory::create();
$db->save();

// singleton
$connection = ConnectDB::init();
$connection->getConnection();
