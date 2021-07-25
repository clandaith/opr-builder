<?php
require 'vendor/autoload.php';
require 'classes/MainController.php';

session_start();
$_SESSION["logged_in"] = true;

$mainController = new \classes\MainController();
$mainController->start();
