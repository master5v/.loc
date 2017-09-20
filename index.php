<?php

ini_set('display_errors',1);
error_reporting(E_ALL);


//define();

require_once "components/Router.php";
$router = new Router();
$router->run();