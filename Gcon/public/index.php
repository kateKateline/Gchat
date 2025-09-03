<?php
declare(strict_types=1);
session_start();

spl_autoload_register(function ($class) {
    $prefix = 'App\\';   // harus pakai huruf besar A
    $base_dir = __DIR__ . '/../app/';
    $len = strlen($prefix);

    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});


$cfgApp = require __DIR__ . '/../config/app.php';
$cfgDb  = require __DIR__ . '/../config/database.php';

use App\Controllers\HomeController;
use App\Controllers\AuthController;
use App\Controllers\DashboardController;

$page   = $_GET['page'] ?? 'home';
$action = $_GET['action'] ?? null;

switch ($page) {
    case 'home':
        (new HomeController())->index();
        break;

    case 'discover':
        (new HomeController())->discover();
        break;

    case 'auth':
        $auth = new AuthController();
        if ($action === 'auth') {
            $auth->auth();
        } elseif ($action === 'register') {
            $auth->register();
        } else {
            $auth->login();
        }
        break;

    case 'logout':
        (new AuthController())->logout();
        break;

    case 'dashboard':
        (new DashboardController())->index();
        break;

    default:
        http_response_code(404);
        echo '404 - Halaman tidak ditemukan';
}
