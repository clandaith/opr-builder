<?php

namespace classes;
    
include '../traits/LoggingTrait.php';

class MainController {
    use \LoggingTrait;

    function __construct() {
        $this->getLogger()->info("Constructing main controller...");
    }

    function __destruct() {
        $this->getLogger()->info("Destructing main controller...");
    }

    public function start() {
        getLogger()->info("MainController start");
    }
}