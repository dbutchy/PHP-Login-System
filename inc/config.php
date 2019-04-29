<?php 
	// following check is a precaution, preventing loading this file directly
	if(!defined('__CONFIG__')) {
		exit("You do not have access to this file! (the config file)");
	}

	//error_reporting(-1);
	//ini_set('display_errors','On');

    include_once "classes/DB.php";
    include_once "classes/filter.php";

	$con = DB::getConnection();
 ?>