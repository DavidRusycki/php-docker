<?php
namespace app\database;

class Connection {
    private $dsn = 'pgsql:host=local_db;dbname=postgres';
    private $username = 'postgres';
    private $password = 'postgres';

    public function __construct() {
        try {
            $pdo = new \PDO($this->dsn, $this->username, $this->password);
            echo "Postgres connection successful!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
