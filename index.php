<?php
session_start();
require "classes/Blork.php";

echo "hello world";
echo "\n\n";

$blork = new \classes\Blork();
$blork->doSomething();

?>