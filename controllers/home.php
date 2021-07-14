<?php

$tasks = $app['db']->selectAll('tasks');

require 'views/index.view.php';