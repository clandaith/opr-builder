<?php
session_start();

require 'vendor/autoload.php';

$log = $_SESSION["logger"];

if ($_SESSION["logged_in"] != true) {
    echo "not logged in.  Later!";
} else {
    echo "logged in";
}

session_destroy();