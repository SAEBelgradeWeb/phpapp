<?php

$app = [];

$app['config'] = require('config.php');


require 'functions.php';


return new QueryBuilder(
    \Connection::connectDB($app['config']['database'])
);