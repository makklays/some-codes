<?php


//require __DIR__ . '/lib/autoloader.php';
require __DIR__ . '/lib/lib.php';

use Lib\A;

$obj = new A();
$obj->setTitle('I am Kuziv A.');

echo $obj->getTitle();

//echo Lib\ff();



?>
