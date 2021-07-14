<?php

$app = [];

$app['config'] = require('config.php');

require 'Router.php';
require 'Request.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'functions.php';


return new QueryBuilder(
    \Connection::connectDB($app['config']['database'])
);