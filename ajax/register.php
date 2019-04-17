<?php
/**
 * Created by PhpStorm.
 * User: dbutchy
 * Date: 4/17/2019
 * Time: 9:51 AM
 */
// If there is no constant defined called __CONFIG__, do not load this file
    define('__CONFIG__', true);

    require_once("../inc/config.php");

    if($_SERVER['REQUEST_METHOD']=='POST'){
        //always return JSON format
        header('Content-Type: application/json');

        //make sure user does not exist

        // make sure user can be added, then add

        // assemble return info for a redirect js code
        // FOR  a more direct redirect use:
        // header('Location: https://www.google.com');
        $return = [];
        //array('name'=>'Charlie')  is a key-value pair
        $return['redirect'] = 'dashboard.php';
        $return['name'] = $_POST['email'];
        echo json_encode($return, JSON_PRETTY_PRINT);

    } else {
        //prevent access to content (exit, kill script, redirect)
        //header('Location: https://www.google.com');

        exit("You should not have access to this file!");
    }
