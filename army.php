<?php
session_start();

if ($_SESSION["logged_in"] != true) {
    echo "not logged in.  Later!";
} else {
    echo "logged in";
}

session_destroy();