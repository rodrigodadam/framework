<?php

$database = require 'core/bootstrap.php';

$router = new Router;

require 'routes.php';

//echo '<pre>';print_r(trim($_SERVER['REQUEST_URI']));die;

require $router->direct(trim($_SERVER['REQUEST_URI'], '/'));


//$_SERVER esta buscando somente '/' e nao o uri