<?php
namespace app\infra;

use app\form\Presenter;
use app\form\Searcher;

class Router {
    public function dispatch() {
        if(array_key_exists('ocultar', $_POST)) return;

        if(array_key_exists('procurar', $_POST)){
            new Searcher()->search();
        };

        if(array_key_exists('show', $_POST)){
            new Presenter()->show();
        }
    }
}