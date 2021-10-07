<?php

class Connection{

    private static $dbHost = "localhost";
    private static $dbName = "burger_code";
    private static $dbUser = "root";
    private static $dbPassword = "";

    private static $connection = null;

    public static function connect(){

        try {
            
            Connection::$connection = new PDO("mysql:host=".Connection::$dbHost.";dbname=".Connection::$dbName,Connection::$dbUser,Connection::$dbPassword);

        } catch (Exception $e) {
            die($e->getMessage());
        }

        return Connection::$connection;
    }

    public static function disconnect(){
    
        Connection::$connection = null;

    }
}

?>


