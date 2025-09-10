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

        // kirim data user ke view
        $this->view('profile/index', [
            'user'  => $user,
            'title' => 'Profile'
        ]);
    }
}
