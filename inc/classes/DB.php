<?php
/**
 * Created by PhpStorm.
 * User: dbutchy
 * Date: 3/22/2019
 * Time: 2:13 PM
 */

// If there is no constant defined called __CONFIG__, do not load this file
if(!defined('__CONFIG__')) {
    exit('You do not have a config file');
}

class DB {

    protected static $con;

    private function __construct() {

        try {

            self::$con = new PDO( 'mysql:charset=utf8mb4;host=localhost;port=3306;dbname=php-login-system', 'root', '100geiger' );
            self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );

        } catch (PDOException $e) {
            echo "Could not connect to database."; exit;
        }

    }


    public static function getConnection() {

        if (!self::$con) {
            new DB();
        }

        return self::$con;
    }
}

?>