<?php
// error_reporting(E_ALL);ini_set('display_errors', 1);
require_once __DIR__."\class\SocialFeedWidget.php";
require_once __DIR__."\config.php";
header('content-type: application/json; charset=UTF-8');

/******************

START MAIN FUNCTION

*******************/

// Get passed options
try {

	$options = $_GET;

	$widget = new SocialFeedWidget($options);

	$response = $widget->getData();

	// needed to fire callback function in socialfeed plugin
	if( !empty($_GET['callback']) )
	{

		print $_GET['callback'] . "(" . $response . ");";

	}
	else
	{

		print $response;

	}

} catch (Exception $e) {

	$response = array( "error" => "$e");

	print json_encode($response);

}