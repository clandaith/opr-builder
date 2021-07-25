<?php
session_start();

require "classes/Blork.php";

use classes\Blork;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

$_SESSION["logged_in"] = true;

echo "hello world";
echo "<br><br>";

$blork = new Blork();
$blork->doSomething();
