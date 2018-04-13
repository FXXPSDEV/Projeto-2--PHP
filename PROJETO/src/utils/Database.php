<?php

class Database {

    private static $name = "login_db";
    private static $user = "root";
    private static $password = "ironman";
    private static $host = "127.0.0.1";
    private static $port = "3306";
    private static $connection;

    public static function getConnection() {
        if (Database::$connection == null) {
            Database::$connection = new PDO("mysql:host=" . Database::$host . ";port=" . Database::$port . ";dbname=" . Database::$name, 
                                            Database::$user, 
                                            Database::$password);
            return Database::$connection;
        } else {
            return Database::$connection;
        }
    }


}