<?php

require 'vendor/autoload.php';

use Monolog\Handler\StreamHandler;
use Monolog\LineFormatter;
use Monolog\Logger;

trait LoggingTrait {
    function getLogger(): \Monolog\Logger {
// set the format
        $output = "%message%\n";
        $formatter = new LineFormatter($output);
// create a log channel to STDOUT
        $log = new Logger('my_logger');
        $streamHandler = new StreamHandler('php://stdout', Logger::WARNING);
        $streamHandler->setFormatter($formatter);

        $log->pushHandler($streamHandler);
// test messages
        $log->error("error");
        $log->warning("warn");
        $log->info("info");

        return $log;
    }
}

