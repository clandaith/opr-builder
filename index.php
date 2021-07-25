<?php
session_start();

require "classes/Blork.php";

//use classes\Blork;

$_SESSION["logged_in"] = true;

echo "hello world";
echo "<br><br>";

$blork = new \classes\Blork();
$blork->doSomething();

