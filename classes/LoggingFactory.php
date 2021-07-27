<?php

namespace classes;

use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class LoggingFactory {
    private static $log;

    public static function getLogger(): Logger {
        if (null === self::$log) {
            self::build();
        }

        return self::$log;
    }

    private static function build() {
        echo "here";

        $output = "%message%\n";
        $formatter = new LineFormatter($output);

        self::$log = new Logger('my_logger');
        $streamHandler = new StreamHandler('php://stdout', Logger::WARNING);
        $streamHandler->setFormatter($formatter);
        self::$log->pushHandler($streamHandler);

        self::$log->error("error");
        self::$log->warning("warn");
        self::$log->info("info");
    }

    protected function __construct() {
    }

    private function __clone() {

    }
}

