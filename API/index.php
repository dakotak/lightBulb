<?php
// index.php

// Composer autoloader
reqire 'vendor/autoload.php';

$app = new \Slim\Slim(array(
	'mode' => 'development',
	'debug' => true
	));


// Define Routes


$app->run();