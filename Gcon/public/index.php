<?php
require_once __DIR__ . '/../app/controller/HomeController.php';
require_once __DIR__ . '/../app/controller/LoginController.php';

$page = $_GET['page'] ?? 'home';
$action = $_GET['action'] ?? '';

switch ($page) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;

    case 'login':
        $controller = new LoginController();
        if ($action === 'auth') {
            $controller->authenticate();
        } else {
            $controller->index();
        }
        break;

    default:
        echo "404 - Page not found";
}

