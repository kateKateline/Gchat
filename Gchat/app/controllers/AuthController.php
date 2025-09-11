<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class AuthController extends Controller {
    public function login() {
        $this->view('auth/login', ['title' => 'Login']);
    }

    // proses login
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
                header("Location: /Gchat/public/index.php?page=dashboard");
            } else {
                header("Location: /Gchat/public/index.php?page=home");
            }
            exit;
        }

        $_SESSION['flash'] = 'Email atau password salah';
        header("Location: /Gchat/public/index.php?page=auth");
        exit;
    }

    // logout 
    public function logout() {
        session_start();
        session_destroy();
        header("Location: /Gchat/public/index.php?page=home");
        exit;
    }

    // tampilkan form register
    public function register() {
        $this->view('auth/register', ['title' => 'Register']);
    }

    // proses register + auto login
    public function store() {
        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if (!empty($username) && !empty($email) && !empty($password)) {
            $userModel = new User();

            // cek apakah email sudah ada
            if ($userModel->findByEmail($email)) {
                $_SESSION['flash'] = 'Email sudah terdaftar!';
                header("Location: /Gchat/public/index.php?page=register");
                exit;
            }

            // buat user baru
            $userModel->create($username, $email, $password);

            // ambil data user yang baru dibuat
            $user = $userModel->findByEmail($email);

            // langsung login user
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'] ?? 'user';
            $_SESSION['profile_image'] = $user['profile_image'] ?? '';

            // redirect sesuai role
            if ($_SESSION['role'] === 'admin') {
                header("Location: /Gchat/public/index.php?page=dashboard");
            } else {
                header("Location: /Gchat/public/index.php?page=home");
            }
            exit;
        }

        $_SESSION['flash'] = 'Semua field harus diisi!';
        header("Location: /Gchat/public/index.php?page=register");
        exit;
    }
}
