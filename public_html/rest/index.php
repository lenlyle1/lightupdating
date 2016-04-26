<?php

define("IN_API", true);
/**
	Load the bootstrap
**/
require_once "../../protected/bootstrap.php";

/**
	Start timer
**/
Timer::start();

// Requests from the same server don't have a HTTP_ORIGIN header
if (!array_key_exists('HTTP_ORIGIN', $_SERVER)) {
    $_SERVER['HTTP_ORIGIN'] = $_SERVER['SERVER_NAME'];
}
try {
    $API = new API_Rest($_REQUEST['request'], $_SERVER['HTTP_ORIGIN']);
    echo $API->processAPI('');
} catch (Exception $e) {
    echo json_encode(Array('error' => $e->getMessage()));
}
/*
if(!empty($flush)){
	$memc->flush();
	Redirect::handle('/');
}
*/