<?php

namespace classes;

include 'LoggingFactory.php';
include 'Connection.php';

use Monolog\Logger;

class MainController {
    private Logger $log;

    function __construct() {
        $this->log = LoggingFactory::getLogger();
        $this->log->info("Constructing main controller...");
    }

    function __destruct() {
        $this->log->info("Destructing main controller...");
    }

    public function start() {
        $this->log->info("MainController start");

        //$conn = Connection::get();
        // $conn->
    }
}