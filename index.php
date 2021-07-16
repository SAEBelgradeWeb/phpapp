<?php

require_once 'vendor/autoload.php';

$app['db'] = require 'core/bootstrap.php';


Router::load('routes.php')
    ->loadController(Request::uri(), Request::method());



