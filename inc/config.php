<?php 
	// following check is a precaution, preventing loading this file directly
	if(!defined('__CONFIG__')) {
		exit("You do not have access to this file! (the config file)");
	}
    include_once "classes/DB.php";

	$con = DB::getConnection();
 ?>