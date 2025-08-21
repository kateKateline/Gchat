<?php
require_once __DIR__ . '/../../config/db.php';
require_once __DIR__ . '/../model/User.php';

class LoginController {
    public function index() {
        $title = "Login — Gcon";
        $description = "Sign in to your Gcon account.";
        $content = __DIR__ . '/../view/landing/page/login.php';
        include __DIR__ . '/../view/layout.php';
    }

    public function authenticate() {
        session_start();
        global $conn;

        $userModel = new User($conn);

        $email    = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        // Ambil user dari database
        $user = $userModel->findByEmail($email);

        if ($user) {
            
            // 1.text 
            if ($password === $user['password']) {
                $_SESSION['user_id']   = $user['id'];
                $_SESSION['username']  = $user['username'];
                $_SESSION['role']      = $user['role'];

                header("Location: /Gcon/public/index.php?page=home");
                exit;
            }

            // 2.hash
            /*
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id']   = $user['id'];
                $_SESSION['username']  = $user['username'];
                $_SESSION['role']      = $user['role'];

                header("Location: /Gcon/public/index.php?page=home");
                exit;
            }
            */
        }

        // bro apa ini pusing banget anjrit
        echo "Email atau password salah!";
    }
}
