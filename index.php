<?php

$app['db'] = require 'core/bootstrap.php';


require Router::load('routes.php')
    ->loadController(Request::uri(), Request::method());



