<?php
/**
 * Created by PhpStorm.
 * User: dbutchy
 * Date: 3/22/2019
 * Time: 2:13 PM
 */
function ForceLogin(){
    if(isset($_SESSION['user_id'])){

    }else{
        header("Location : /login.php");
        exit;
    }
}

function DirectLoggedInUser(){
    if(isset($_SESSION['user_id'])){
        header("Location : /dashboard.php");
        exit('direct logged-in user');
    }else{

    }
}
?>