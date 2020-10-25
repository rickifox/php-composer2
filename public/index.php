<?php

require __DIR__ . '/../vendor/autoload.php';

/*use App\Wcs\Hello;

$hello = new Hello();
echo $hello->talk();*/

use HelloWorld\SayHello;

$hello = new SayHello();
echo $hello->world();