<?php

// show errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require autoload
require_once("vendor/autoload.php");

// instantiate fat free
$f3 = Base::instance();

// define default route
$f3->route('GET /', function () {
    $view = new Template();
    echo $view->render('views/home.html');
});

// start fat free
$f3->run();
