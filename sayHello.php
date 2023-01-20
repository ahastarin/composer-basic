<?php
require_once __DIR__ . '/vendor/autoload.php';

use phpjwt\data\People;

$people = new People("ahas");

echo $people->sayHello("audy");
