<?php

namespace app\form;

use app\database\Connection;
use app\render\Render;

class Presenter {
    private $database;

    public function __construct() {
        $this->database = new Connection();
    }

    public function show() {
        $results = $this->database->queryAll("select * from movies");

        Render::render($results);
    }
}