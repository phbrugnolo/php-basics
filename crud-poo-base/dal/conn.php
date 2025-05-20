<?php 
namespace App\Dal;

use \PDO;
use \PDOException;

abstract class Connection {
    public static ?PDO $conn = null;
    private static string $host = 'localhost';
    private static string $db_name = 'aulacrud';
    private static string $user = 'root';
    private static string $password = '';

    public static function getConn(): PDO
    {
        if (self::$conn === null) {
            try {
                self::$conn = new PDO("mysql::host=" . self::$host . ";dbname=" . self::$db_name, self::$user, self::$password);
            } catch (\PDOException $e) {
                throw new PDOException("Erro ao conectar com o banco " . $e->getMessage());
            }
        }
        return self::$conn;
    }
}
