<?php
namespace app\form;

use app\database\Connection;
use app\render\Render;

class Searcher {
    private $database;

    public function __construct() {
        $this->database = new Connection();
    }
    
    public function search() {
        $id = $_POST['id'];
        $results = $this->database->query("select * from movies where id = :id", $id);

        Render::render($results);
    }
}