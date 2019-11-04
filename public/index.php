<?php
require "../vendor/autoload.php";

use AppWcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello();
$sayHello = new SayHello();

echo "message Hello.php : " . $hello->talk();
echo "<br><br>";

echo "message SayHello.php : " . $sayHello->world();
