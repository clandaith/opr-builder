<?php

use classes\MainController;

require 'vendor/autoload.php';
require 'classes/MainController.php';

session_start();
$_SESSION["logged_in"] = true;

$mainController = new MainController();
$mainController->start();
