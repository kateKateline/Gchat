<?php
namespace App\Core;

class Controller {
    protected function view(string $view, array $data = []) {
        extract($data);
        $viewPath = __DIR__ . '/../views/' . $view . '.php';
        require __DIR__ . '/../views/layouts/header.php';
        require $viewPath;
        require __DIR__ . '/../views/layouts/footer.php';
    }
}
