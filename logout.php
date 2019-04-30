<?php
/**
 * Created by PhpStorm.
 * User: dbutchy
 * Date: 4/30/2019
 * Time: 9:18 AM
 */
//    if(isset($_SESSION['user_id'])){
//
    //$past = time() - 36000;
    session_start();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);
    header("Location: index.php");

?>