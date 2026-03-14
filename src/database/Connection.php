<?php
namespace app\database;

use PDO;

class Connection {
    private $dsn = 'pgsql:host=local_db;dbname=postgres';
    private $username = 'postgres';
    private $password = 'postgres';
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new \PDO($this->dsn, $this->username, $this->password);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

   public function query($query, int $id) {
        $stmt = $this->pdo->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute(); 

        return $stmt->fetchAll();
    }

    public function post($name, $desc) : void {
        $sql = "insert into movies (name, description) values (:name,:desc)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':desc', $desc, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function queryAll($query): array {
        $stmt = $this->pdo->prepare($query);
        
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
