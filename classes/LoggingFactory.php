<?php

namespace classes;

require 'vendor/autoload.php';

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class LoggingFactory {
    private static LoggingFactory $log;

    public function __construct() {
        // set the format
        //$output = "%message%\n";
        // $formatter = new LineFormatter($output);
// create a log channel to STDOUT
        this::$log = new Logger('my_logger');
        this::$log->pushHandler(new StreamHandler('php://stdout', LoggingFactory::WARNING));
        // $streamHandler->setFormatter($formatter);

        // $log->pushHandler($streamHandler);
// test messages
        this::$log->error("error");
        this::$log->warning("warn");
        this::$log->info("info");
    }

    public static function getLogger(): LoggingFactory {
        return static::$log;
    }
}

