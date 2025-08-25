<?php
require_once __DIR__ . '/../../config/db.php';
require_once __DIR__ . '/../model/User.php';

class RegisterController {
    public function index() {
        $title = "Sign Up — Gcon";
        $description = "Create a new Gcon account.";
        $content = __DIR__ . '/../view/landing/page/register.php';
        include __DIR__ . '/../view/layout.php';
    }

    public function store() {
        global $conn;
        $userModel = new User($conn);

        $username = $_POST['username'] ?? '';
        $email    = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        //text:
        // $hashedPassword = $password;

        //hash:
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if ($userModel->create($username, $email, $hashedPassword)) {
            header("Location: /Gcon/public/index.php?page=home");
            exit;
        } else {
            echo "Gagal mendaftar. Coba lagi!";
        }
    }
}
