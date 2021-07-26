<?php

namespace classes;

require 'vendor/autoload.php';

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class LoggingFactory {
    private static Logger $log;

    private static function setup() {
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
        if (null === static::$log) {
            self::setup();
        }

        return static::$log;
    }
}

