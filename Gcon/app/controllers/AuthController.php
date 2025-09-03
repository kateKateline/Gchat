<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class AuthController extends Controller {
    public function login() {

        $this->view('auth/login', ['title' => 'Login']);
    }

    public function auth() {

        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $user = (new User())->findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'] ?? 'user';
            $_SESSION['profile_image'] = $user['profile_image'] ?? '';

            if ($_SESSION['role'] === 'admin') {
                header("Location: /Gcon/public/index.php?page=dashboard");
            } else {
                header("Location: /Gcon/public/index.php?page=home");
            }
            exit;
        }

        $_SESSION['flash'] = 'Email atau password salah';
        header("Location: /Gcon/public/index.php?page=login");
        exit;
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: /Gcon/public/index.php?page=home");
        exit;
    }

    public function register() {
        session_start();
        $this->view('auth/register', ['title' => 'Register']);
    }
}
