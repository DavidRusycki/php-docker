<?php

namespace app\render;

class Render {
    public static function render(array $results) {
        foreach($results as $result) {
            echo "<br>";
            echo $result['name'];
            echo "<br>";
            echo $result['description'];
            echo "<br>";
            echo $result['create_at'];
            echo "<br>";
            echo "<br>";
        }
    }
}