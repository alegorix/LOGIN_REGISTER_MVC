<?php
class Database {
    private static $instance = null;
    private $conn;
    private function __construct() {
        $this->conn = new PDO("mysql:host=localhost;dbname=mvc_login", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance->conn;
    }
}
?>
