```

require_once './vendor/autoload.php';

use Pattern\AbstractFactory\PhoneFactory;
use Pattern\AbstractFactory\SamsungFactory;
use Pattern\Builder\IphoneBuilder;
use Pattern\Builder\SmartPhoneCreator;
use Pattern\Factory\DBFactory;
use Pattern\Prototype\User;
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

// builder
$smartPhoneBuilder = new SmartPhoneCreator;
$smartPhoneBuilder->buildPhone(new IphoneBuilder);

// prototype
$user = new User;
$user->setName('Imtiaz Pabel');
$user->setUsername('pabel');
$user->setPassword('password');
var_dump(clone $user);
```
