<?php
// error_reporting(E_ALL);ini_set('display_errors', 1);
require_once __DIR__."/class/OpenWeatherMapWidget.php";
require_once __DIR__."/config.php";
<<<<<<< HEAD
header('Content-Type: application/json');
=======
header('Content-Type: application/json; charset=UTF-8');
>>>>>>> 9ab05ee40cc795093f988ad9d7eac5262abf5b50

/******************

START MAIN FUNCTION

*******************/

// Get passed options
try {
	if( !defined("API_KEY") || API_KEY === "key_goes_here" || API_KEY === "" ) {
		throw new Exception("API_KEY needs to be defined in config.", 1);
	}

	$options = $_GET;
	$options['apiKey'] = API_KEY;
	$weatherWidget = new OpenWeatherMapWidget($options);
	$response = $weatherWidget->getData();

	print $response;

} catch (Exception $e) {
	$response = array( "error" => $e->getMessage());
	print json_encode($response);
}