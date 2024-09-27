<?php

namespace classes;

use PDO;
use PDOException;

class DBConnection
{
    private static $dbInstance = null;

    private function __construct() {}

    public static function getInstance()
    {
        if (self::$dbInstance == null) {

            self::$dbInstance = self::pdoInstance();
        }
        return self::$dbInstance;
    }
    private static function pdoInstance()
    {
        try {
            $DBHost = 'localhost';
            $DBName = 'eventBot';
            $DBUsername = 'root';
            $DBPassword = '';
            $option =
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                );

            return new PDO('mysql:host=' . $DBHost . ';dbname=' . $DBName, $DBUsername, $DBPassword, $option);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
