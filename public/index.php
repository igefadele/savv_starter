<?php

// Setup Constants & Autoload
define('ROOT_PATH', dirname(__DIR__));
require ROOT_PATH . '/vendor/autoload.php';

// Bootstrap the Savv framework
$app = \Savv\Core\Application::bootstrap(dirname(__DIR__));

$app->run();