<?php
/**
 * This file is what creates the cache file of the calendar events.
 *
 * It will hit an endpoint while passing the webspace and the last_updated
 * time from the cache file. If the time is different the endpoint will
 * return the new JSON to be written into the file.
 *
 * After the checks have been done, the JSON will be returned back to the
 * calendar.
 */
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
$debug = isset($_GET['debug']);
ini_set("allow_url_fopen", 1);
$allowedDataSourcePattern = '/(cms|webgen|development|migration|demo)[0-9]*.revize.com/'; // if not a revize domain change this
if ($debug) {
    ini_set ('display_errors', 'on');
    ini_set ('log_errors', 'on');
    ini_set ('display_startup_errors', 'on');
    ini_set ('error_reporting', E_ALL);
}
 // Checking for valid data
if(!isset($_GET['webspace']) || !isset($_GET['relative_revize_url']) || !isset($_GET['protocol']))
    exit('Incorrect data or missing data was passed to the calendar\'s data handler.');
if(empty($_GET['webspace']))
    exit('Calendar handler expected non empty values. Missing value for webspace');
if(empty($_GET['relative_revize_url']))
    exit('Calendar handler expected non empty values. Missing value for relative url');
if(empty($_GET['protocol']))
    exit('Calendar handler expected non empty values. Missing value for protocol');
// Information to be used in the endpoint
$protocol = $_GET['protocol'];
if ($protocol !== 'http:' && $protocol !== 'https:') {
    $protocol = "https:";
}
$webspace = preg_replace("/[^a-zA-Z0-9_]/","",trim($_GET['webspace']));
$relative_revize_url = preg_replace("/[^a-zA-Z0-9\.]/","",trim($_GET['relative_revize_url']));
$isValidDomain = preg_match($allowedDataSourcePattern, $relative_revize_url);
if(!$isValidDomain) {
    exit(json_encode(["error" => "Could not resolve data source"]));
}
// Build and test the cache file path
$cache_file_path = str_replace('\\', '/', getcwd())."/cache/chached_events.json";
$cache_exists = file_exists($cache_file_path);
$cache_file = fopen($cache_file_path, 'a+');
rewind($cache_file);
$data = "";
if($cache_exists && filesize($cache_file_path)){
    $data = fread($cache_file, filesize($cache_file_path));
    if(!empty($data)){
        $data = json_decode($data);
    }
    fclose($cache_file);
}
// var_dump($data);
// Get the last time updated
$time_updated = $data !== "" ? urlencode($data->time_updated) : "NULL";
// Send for either new data, or false
$json_returned = get_events_data($protocol,$webspace,$relative_revize_url,$time_updated);
if ($debug) {
    var_dump($json_returned);
}
$json = json_decode($json_returned);
if($json->time_updated != false){
    // JSON did not return false, meaning there is a time difference.
    //Write the new file and serve the data.
    $cache_file = fopen($cache_file_path, 'w');
    rewind($cache_file);
    fwrite($cache_file, json_encode($json));
    fclose($cache_file);
    echo json_encode($json->events);
} else {
    // JSON returned false, meaning the cache file is fine to serve.
    if(isset($data->events)){
        echo json_encode($data->events);
    } else {
        echo json_encode(array('error' => 'Cache Error'));
    }
}
// Close the cache file
function get_events_data($protocol,$webspace,$relative_revize_url,$time_updated){
    // Build endpoint path with timout in seconds
    $context = stream_context_create(array(
        'http' => array(
            'timeout' => 2
        )
    ));
    $endpoint_path = "{$protocol}//{$relative_revize_url}/revize/util/endpoints/fetch_calendar_events.php?webspace={$webspace}&time_updated={$time_updated}";
    global $debug;
    if ($debug) {
        var_dump($endpoint_path);
    }
    return file_get_contents($endpoint_path, true, $context);
}