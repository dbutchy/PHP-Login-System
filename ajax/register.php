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
        $return = [];
        $email = Filter::String($_POST['email']);
        //make sure user does not exist
        $findUser = $con->prepare("SELECT user_id FROM users WHERE email = LOWER(:email) LIMIT 1;");
        $findUser->bindParam(':email',$email, PDO::PARAM_STR);
        $findUser->execute();
        if($findUser->rowCount() == 1){
            $return['error'] = "You already have an account!  You cannot register a second time.";
            $return['is_logged_in'] = false;
        } else {
         //need to add error trapping  for when any of these operations fail (e.g. user_id not autoincrement)
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $addUser = $con->prepare("INSERT INTO users (email, password) VALUES(:email, :password);");
            $addUser->bindParam(':email', $email, PDO::PARAM_STR);
            $addUser->bindParam(':password', $password, PDO::PARAM_STR);
            $addUser->execute();
            $user_id = $con->lastInsertId();
            $_SESSION['user_id'] = (int) $user_id;
            $_SESSION['email'] = $email;
            $return['redirect'] = 'dashboard.php';
            $return['is_logged_in'] = true;
        }
        // make sure user can be added, then add

        // assemble return info for a redirect js code
        // FOR  a more direct redirect use:
        // header('Location: https://www.google.com');

        //array('name'=>'Charlie')  is a key-value pair
        //$return['redirect'] = 'dashboard.php';
        $return['name'] = $_POST['email'];
        echo json_encode($return, JSON_PRETTY_PRINT);

    } else {
        //prevent access to content (exit, kill script, redirect)
        //header('Location: https://www.google.com');

        exit("You should not have access to this file!");
    }
