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
        $password = $_POST['password'];
        //make sure user does not exist
        $findUser = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1;");
        $findUser->bindParam(':email',$email, PDO::PARAM_STR);
        $findUser->execute();
        if($findUser->rowCount() == 1){
            $user = $findUser->fetch(PDO::FETCH_ASSOC);
            $user_id = (int) $user['user_id'];
            $hashPassword = $user['password'];
            if (password_verify($password, $hashPassword)){
                $return['redirect'] = 'dashboard.php';
                $return['is_logged_in'] = true;
                $_SESSION['user_id'] = $user_id;
            } else{
                $return['error'] = 'The password is not correct. Please try again, or if you do not remember your password then request a <a href="">password reset</a>.';
                $return['is_logged_in'] = false;
            }

        } else {
         //need to add error trapping  for when any of these operations fail (e.g. user_id not autoincrement)
            $return['error'] = "You do not have an account!  <a href=register.php>Create an Account</a>";
            $return['is_logged_in'] = false;
        }
        //array('name'=>'Charlie')  is a key-value pair
        //$return['redirect'] = 'dashboard.php';
        $return['name'] = $_POST['email'];
        echo json_encode($return, JSON_PRETTY_PRINT);

    } else {
        //prevent access to content (exit, kill script, redirect)
        //header('Location: https://www.google.com');

        exit("You should not have access to this file!");
    }
