<?php

namespace classes;

//require 'vendor/autoload.php';

use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class LoggingFactory {
    private static Logger $log;

    public function setup(): Logger {
        $output = "%message%\n";
        $formatter = new LineFormatter($output);

        $log = new Logger('my_logger');
        $streamHandler = new StreamHandler('php://stdout', Logger::WARNING);
        $streamHandler->setFormatter($formatter);
        $log->pushHandler($streamHandler);

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

