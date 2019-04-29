<?php 
	// following check is a precaution, preventing loading this file directly
	if(!defined('__CONFIG__')) {
		exit("You do not have access to this file! (the config file)");
	}

	//error_reporting(-1);
	//ini_set('display_errors','On');
    // turn on session  - creates a small file on the server for each session
    //      may bog down a high-volume website
    if(!isset($_SESSION)){
        session_start();
    }

    include_once "classes/DB.php";
    include_once "classes/filter.php";

	$con = DB::getConnection();
 ?>