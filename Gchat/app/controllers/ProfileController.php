<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class ProfileController extends Controller {
    public function index() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?page=auth");
            exit;
        }
    
        $userModel = new User();
        $user = $userModel->findById($_SESSION['user_id']);
    
        // ambil tab
        $tab = $_GET['tab'] ?? 'profile'; 
        $view = 'profile/index'; // default halaman Profile
    
        if ($tab === 'my_accounts') {
            $view = 'profile/my_accounts';
        } elseif ($tab === 'password') {
            $view = 'profile/password';
        } elseif ($tab === 'privacy') {
            $view = 'profile/privacy';
        }
    
        $this->view($view, [
            'user'  => $user,
            'title' => 'Profile - ' . ucfirst(str_replace('_', ' ', $tab))
        ], 'layouts/profile');
    }
    
    
    

    // ganti banner
    public function updateBanner() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?page=auth");
            exit;
        }

        if (isset($_FILES['banner']) && $_FILES['banner']['error'] === UPLOAD_ERR_OK) {
            $fileTmp  = $_FILES['banner']['tmp_name'];
            $fileName = uniqid() . "-" . basename($_FILES['banner']['name']);
            $targetDir = __DIR__ . "/../../public/uploads/banner/";
            $targetFile = $targetDir . $fileName;

            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0777, true);
            }

            if (move_uploaded_file($fileTmp, $targetFile)) {
                $userModel = new User();
                $userModel->updateBanner($_SESSION['user_id'], $fileName);
            }
        }

        header("Location: index.php?page=profile");
        exit;
    }

public function updateAvatar() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php?page=auth");
        exit;
    }

    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
        $fileTmp  = $_FILES['avatar']['tmp_name'];
        $fileName = uniqid() . '_' . basename($_FILES['avatar']['name']);
        $targetDir  = __DIR__ . '/../../public/uploads/profile_image/';
        $targetFile = $targetDir . $fileName;

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        if (move_uploaded_file($fileTmp, $targetFile)) {
            $userModel = new \App\Models\User();
            $userModel->updateAvatar($_SESSION['user_id'], $fileName);
            $_SESSION['profile_image'] = $fileName;
        }
    }

    header("Location: index.php?page=profile");
    exit;
}
public function updateInfo() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php?page=auth");
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = array_key_exists('username', $_POST) ? trim((string)$_POST['username']) : null;
        if ($username === '') { $username = null; }

        $about = array_key_exists('about_me', $_POST) ? trim((string)$_POST['about_me']) : null;

        $userModel = new User();
        $userModel->updateInfo($_SESSION['user_id'], $username, $about);

        if ($username !== null) {
            $_SESSION['username'] = $username;
        }
        if ($about !== null) {
            $_SESSION['about_me'] = $about;
        }
    }

    header("Location: index.php?page=profile");
    exit;
}

public function updateStatus() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php?page=auth");
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $status = $_POST['status'] ?? 'offline';
        $allowed = ['online','offline','dnd','invisible'];

        if (in_array($status, $allowed)) {
            $userModel = new User();
            $userModel->updateStatus($_SESSION['user_id'], $status);
        }
    }

    header("Location: index.php?page=profile");
    exit;
}

}
