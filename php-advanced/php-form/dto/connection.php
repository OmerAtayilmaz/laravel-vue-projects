<?php
class DatabaseConnection {
    const HOST = 'localhost';
    const USERNAME="root";
    const PASSWORD="";
    const DBNAME="testdb";
    private static $_instance;

    private function __construct(){}

    public static function getInstance(){
        if(!self::$_instance) {
            self::$_instance = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DBNAME);
            if (mysqli_connect_error())
                throw new Exception("Failed to connect to MySQL: " . mysqli_connect_error());
        }
        return self::$_instance;
    }
}
