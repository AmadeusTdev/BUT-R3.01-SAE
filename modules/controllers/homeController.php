<?php
namespace modules\controllers;

class HomeController {
    public function execute() {
        require_once __DIR__ . '/../views/homeView.php';
    }
}
