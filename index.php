<?php
session_start();
require "classes/Blork.php";

echo "hello world";
echo "<br><br>";

$blork = new \classes\Blork();
$blork->doSomething();

