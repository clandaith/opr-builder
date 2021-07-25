<?php
session_start();

use classes\Blork;

$_SESSION["logged_in"] = true;

echo "hello world";
echo "<br><br>";

$blork = new Blork();
$blork->doSomething();

