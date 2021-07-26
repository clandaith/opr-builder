<?php

namespace classes;

require 'vendor/autoload.php';

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class LoggingFactory {
    private static Logger $log;

    public function setup(): Logger {
        // set the format
        //$output = "%message%\n";
        // $formatter = new LineFormatter($output);
// create a log channel to STDOUT
        $log = new Logger('my_logger');
        $log->pushHandler(new StreamHandler('php://stdout', Logger::WARNING));
        // $streamHandler->setFormatter($formatter);

        // $log->pushHandler($streamHandler);
// test messages
        $log->error("error");
        $log->warning("warn");
        $log->info("info");

        return $log;
    }

    public static function getLogger(): Logger {
        if (null === static::$log) {
            static::$log = new static();
        }

        return static::$log;
    }

    protected function __construct() {

    }
}

