<?php
session_start();

require 'vendor/autoload.php';
require 'classes/Blork.php';

use classes\Blork;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

// set the format
$output = "%message%";
$formatter = new LineFormatter($output);
// create a log channel to STDOUT
$log = new Logger('my_logger');
$streamHandler = new StreamHandler('php://stdout', Logger::WARNING);
$streamHandler->setFormatter($formatter);
$log->pushHandler($streamHandler);
// test messages
$log->addWarning("testing 1");
$log->addWarning("testing 2");

$_SESSION["logged_in"] = true;


echo "hello world";
echo "<br><br>";

$blork = new Blork();
$blork->doSomething();
