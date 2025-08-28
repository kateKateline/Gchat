<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}


require_once __DIR__ . '/../app/controller/HomeController.php';
require_once __DIR__ . '/../app/controller/LoginController.php';
require_once __DIR__ . '/../app/controller/LogoutController.php';
require_once __DIR__ . '/../app/controller/RegisterController.php';
require_once __DIR__ . '/../app/controller/DiscoverController.php';


$page = $_GET['page'] ?? 'home';
$action = $_GET['action'] ?? '';

switch ($page) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;

    case 'discover':
        $controller = new DiscoverController();
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

    case 'register':
        $controller = new RegisterController();
        if ($action === 'store') {
            $controller->store();
        } else {
            $controller->index();
        }
        break;

    case 'logout':
        $controller = new LogoutController();
        $controller->index();
        break;

    default:
        include '404.php';
}
