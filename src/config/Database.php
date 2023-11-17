<?php
namespace Root\Html\config;

use PDO;
use PDOException;

class Database
{
    private static $conn = null;

    private function __construct()
    {
    }

    public static function getConnection()
    {
        $db_driver = "mysql";
        $host = "db";
        $db_name ="blab";
        $db_user = "root";
        $db_password = "";

        try {
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $url = "$db_driver:host=$host;dbname=$db_name;";
            self::$conn = new PDO($url, $db_user, $db_password, $opciones);
        } catch (PDOException $e) {
            return "Error in the connection: " . $e->getMessage();
        }

        if (is_null(self::$conn)) {
            self::$conn = new Database();
        }
        return self::$conn;
    }

    private function __clone()
    {
    }
}