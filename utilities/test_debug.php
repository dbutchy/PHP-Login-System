<?php
/**
 * Created by PhpStorm.
 * User: dbutchy
 * Date: 4/26/2019
 * Time: 11:12 AM
 */
    define('__CONFIG__', true);
    include_once ('../inc/config.php');
    ForceLogin();
    $psuedoRandom1 = rand(0, 20);
    $psuedoRandom2 = rand(0, 20);
    if($psuedoRandom1 === $psuedoRandom2){
        echo "the two numbers (" . strval($psuedoRandom1) . " and " . strval($psuedoRandom2) . ") are equal,  :)";
    } else{
        echo "the two numbers (" . strval($psuedoRandom1) . " and " . strval($psuedoRandom2) . ") are NOT equal,  :(";
    }